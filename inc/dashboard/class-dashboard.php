<?php 
/**
 * Gutena Theme Dashboard
 */
 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutena_Theme_Dashboard' ) ) {

    class Gutena_Theme_Dashboard {

        //The instance of this class
        private static $instance = null;

        //Returns the instance of this class.
        public static function get_instance() {
            if ( null === self::$instance ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function __construct() {
            if ( function_exists( 'is_admin' ) && is_admin() ) {
                add_action('admin_menu', array( $this, 'add_theme_admin_menu' ) );
                add_action( 'wp_ajax_install_activate_gutena_kit', array( $this, 'install_activate_gutena_kit_ajax' ) );
                add_action( 'admin_enqueue_scripts', array( $this, 'theme_admin_scripts' ) );
                add_action( 'wp_ajax_dismiss_gutena_admin_notice', array( $this, 'dismiss_gutena_admin_notice_ajax' ) );
                add_action( 'admin_notices', array( $this, 'recommended_plugin_notice' ) );
            }
        }

        public function add_theme_admin_menu() {
           $page_hook_suffix = add_theme_page( esc_html__( 'Gutena Theme Dashboard', 'gutena' ), esc_html__( 'Gutena', 'gutena' ), 'manage_options', 'gutena-theme-dashboard', array( $this, 'theme_dashboard_page' ) );

           if ( ! empty( $page_hook_suffix ) ){
                add_action( 'admin_print_styles-' . $page_hook_suffix, array( $this, 'theme_dashboard_styles' ) );
                add_action( 'admin_print_scripts-' . $page_hook_suffix, array( $this, 'theme_dashboard_scripts' ) );
           }
            
        }

        public function theme_dashboard_page() {
            echo '<div id="gutena-theme-dashboard"></div>';
        }

        public function theme_dashboard_styles() {
            wp_enqueue_style( 'gutena-theme-dashboard-style', GUTENA_THEME_URI . '/inc/dashboard/assets/css/dashboard.css', array(), GUTENA_THEME_VERSION, 'all' );
        }

        public function theme_dashboard_scripts() {
            wp_enqueue_script( 'gutena-theme-dashboard', GUTENA_THEME_URI . '/inc/dashboard/view/build/index.js', array( 'wp-components', 'wp-element', 'gutena-theme-admin' ), GUTENA_THEME_VERSION );
            $plugin_action = $this->get_plugin_require_install_or_active();
            wp_localize_script( 
               'gutena-theme-dashboard' , 
               'gutena_dahboard_info',
                array(
                   'tabs' => array(
                        'welcome' => array(
                            'tab_title' =>  esc_html__( 'Getting Started', 'gutena' ),
                            'title' => esc_html__( 'Welcome to Gutena!', 'gutena' ),
                            'description' => esc_html__( 'Gutena is a block theme for WordPress built to work with the core editor. Our focus is to use core blocks to create modern designs applicable to variety of businesses. We do not add any bloat to our theme. Gutena comes with pre-built full page demos, available to be imported in 1-click using our companion plugin.', 'gutena' ),
                            'button_text' => esc_html__( 'Learn More', 'gutena' ),
                            'button_link' => esc_url( 'https://www.youtube.com/watch?v=qmK16jI9X1A' ),
                            'video_img_url' => esc_url( GUTENA_THEME_URI . '/inc/dashboard/assets/img/video.png' ),
                        ),
                        'templates' => array(
                            'tab_title' =>  esc_html__('Starter Templates', 'gutena'),
                            'title' => esc_html__( 'Gutena Starter Templates!', 'gutena' ),
                            'description' => esc_html__( 'Get started with beautiful pre-built demos for Gutena. Our demos are well thought out and works for variety of use cases. Install light weight Gutena Kit plugin to enable 1-click demo imports.', 'gutena' ),
                            'templates_img' => esc_url( GUTENA_THEME_URI . '/inc/dashboard/assets/img/templates.png' ),
                        ),
                        'changelog' => array(
                            'tab_title' =>  esc_html__('Changelog', 'gutena'),
                            'title' => esc_html__( 'Releases and fixes', 'gutena' ),
                            'description' => $this->get_theme_changelog(),
                        ),
                        'doc' => array(
                            'tab_title' =>  esc_html__('Knowledge Base', 'gutena'),
                            'title' => esc_html__( 'Topics', 'gutena' ),
                            'topics' => array(
                                array(
                                    'heading' =>  esc_html__( 'How to Add a Favicon in Block Theme?', 'gutena'),
                                    'link' => esc_url( GUTENA_THEME_WEB_URI . 'how-to-add-a-favicon-in-block-theme' ),
                                    'description' => esc_html__( '', 'gutena' ),
                                ),
                                array(
                                    'heading' =>  esc_html__( 'How to Create Sidebar with Block Theme?', 'gutena'),
                                    'link' => esc_url( GUTENA_THEME_WEB_URI . 'how-to-create-sidebar-with-block-theme' ),
                                    'description' => esc_html__( '', 'gutena' ),
                                ),
                                array(
                                    'heading' =>  esc_html__( 'How to fix demo page navigation link issue?', 'gutena'),
                                    'link' => esc_url( GUTENA_THEME_WEB_URI . 'fix-navigation-link-not-working-issue' ),
                                    'description' => esc_html__( '', 'gutena' ),
                                ),
                            ),
                            'support' => array(
                                'title' => esc_html__( 'Need Help?', 'gutena' ),
                                'description' => esc_html__( 'Have a question, we are happy to help! Get in touch with our support team.', 'gutena' ),
                                'link_text' => esc_html__( 'Submit a Ticket', 'gutena' ),
                                'link_url' => esc_url( 'https://wordpress.org/support/theme/gutena/' ),
                            )
                        ),
                    ),
                   'gutena_logo' => esc_url( GUTENA_THEME_URI . '/inc/dashboard/assets/img/gutena-logo.svg' ),
                )
            );
        }

        //Check gutena-kit plugin requirement : install or activate
        private function get_plugin_require_install_or_active() {
            $action = false;
            //check function exists 
            if ( ! function_exists( 'get_plugins' ) && file_exists( ABSPATH . 'wp-admin/includes/plugin.php' ) ) {
                require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
            }
            //make sure function available
            if ( function_exists( 'get_plugins' ) ) {
                //get all installed plugin
                $all_plugins = get_plugins();
                
                if ( ! isset( $all_plugins['gutena-kit/gutena-kit.php'] ) ) {
                    $action = 'install-plugin';
                } else {
                    //check function exists 
                    if ( ! function_exists( 'wp_get_active_and_valid_plugins' ) && file_exists( ABSPATH . 'wp-includes/load.php' ) ){
                        require_once( ABSPATH . 'wp-includes/load.php' );
                    }
                     //make sure function available
                    if ( function_exists( 'wp_get_active_and_valid_plugins' ) ) {
                         //get all activated plugin
                        $all_plugins =  wp_get_active_and_valid_plugins();

                        if ( defined( 'WP_PLUGIN_DIR' ) && ! in_array( trailingslashit( WP_PLUGIN_DIR ) . 'gutena-kit/gutena-kit.php', $all_plugins, true ) ) {
                            $action = 'activate-plugin';
                        }
                    }
                }
            }

            return $action;
        }

        //Get Changelog from readme.txt file
        private function get_theme_changelog() {
            $response = wp_remote_get( GUTENA_THEME_URI . '/readme.txt' );
            if ( ! is_wp_error( $response ) ) {
                $response =  wp_remote_retrieve_body( $response );
                $response = explode( '== Changelog ==', $response, 2 );
                if ( 2 === count( $response ) ) {
                    $response =  explode( '== Copyright ==', trim( $response[1] ), 2 );
                    if ( ! empty($response[0]) ) {
                        $response = $response[0];
                        $response =  str_ireplace( "= ", "<hr><br><span class='version'>", $response );
                        $response =  str_ireplace( " =", "</span><br>", $response );
                        return $response;
                    }
                }
            }
            return '';
        }
    
        //Install or activate gutena kit plugin
        public function install_activate_gutena_kit_ajax() {
            if( 1 === check_ajax_referer( 'gutena-theme-nonce', 'gutena_security' ) && function_exists( 'is_gutena_admin' ) &&  true === is_gutena_admin() ){
                $action = $this->get_plugin_require_install_or_active();

                //check activate_plugin function exists 
                if ( ! function_exists( 'activate_plugin' ) && file_exists( ABSPATH . 'wp-admin/includes/plugin.php' ) ) {
                    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                }

                //If require to install plugin
                if ( 'install-plugin' === $action ) {
                    //check plugins_api function exists 
                    if ( ! function_exists( 'plugins_api' ) && file_exists( ABSPATH . 'wp-admin/includes/plugin-install.php' ) ) {
                        include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
                    }
                     //check WP_Upgrader class exists 
                     if ( ! class_exists( 'WP_Upgrader' ) && file_exists( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' ) ) {
                        require_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
                    }
                    //check WP_Ajax_Upgrader_Skin class exists 
                    if ( ! class_exists( 'WP_Ajax_Upgrader_Skin' ) && file_exists( ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php' ) ) {
                        require_once( ABSPATH . 'wp-admin/includes/class-wp-ajax-upgrader-skin.php' );
                    }
                    //check Plugin_Upgrader class exists 
                    if ( ! class_exists( 'Plugin_Upgrader' ) && file_exists( ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php' ) ) {
                        require_once( ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php' );
                    }

                    //make sure all required function and class available
                    if ( function_exists( 'activate_plugin' ) && function_exists( 'plugins_api' ) && class_exists( 'WP_Upgrader' ) && class_exists( 'WP_Ajax_Upgrader_Skin' ) && class_exists( 'Plugin_Upgrader' ) ) {
                        $api = plugins_api(
                            'plugin_information',
                            array(
                                'slug'   => 'gutena-kit',
                                'fields' => array(
                                    'short_description' => false,
                                    'sections' => false,
                                    'requires' => false,
                                    'rating' => false,
                                    'ratings' => false,
                                    'downloaded' => false,
                                    'last_updated' => false,
                                    'added' => false,
                                    'tags' => false,
                                    'compatibility' => false,
                                    'homepage' => false,
                                    'donate_link' => false,
                                ),
                            )
                        );
                        if ( ! is_wp_error( $api ) && ! empty( $api->download_link ) ) {
                            $upgrader = new Plugin_Upgrader( new WP_Ajax_Upgrader_Skin() );
                            $result = $upgrader->install( $api->download_link );
                            if ( empty( $result ) ){
                                wp_send_json_error(
                                    array(
                                        'error'   => 1,
                                        'message' => esc_html__( 'Failed to install Gutena Kit plugin.', 'gutena' ),
                                    )
                                );
                            } else {
                                $result = activate_plugin( 'gutena-kit/gutena-kit.php', '', false, true );
                            }
                        }
                    }
                } elseif ( 'activate-plugin' === $action ) {
                    $result = activate_plugin( 'gutena-kit/gutena-kit.php', '', false, true );
                    if ( is_wp_error( $result ) ) {
                        wp_send_json_error(
                            array(
                                'error'   => 1,
                                'message' => esc_html__( 'Failed to activate Gutena Kit plugin.', 'gutena' ),
                            )
                        );
                    }
                } 
                wp_send_json_success(
                    array(
                        'error'   => 0,
                        'message' => esc_html__( 'Gutena Kit plugin activated successfully!', 'gutena' ),
                    )
                );
            } else {
                wp_send_json_error(
                    array(
                        'error'   => 1,
                        'message' => esc_html__( 'Sorry! Incorrect permission', 'gutena' ),
                    )
                );
            }
        }
        
        //Admin js scripts
        public function theme_admin_scripts() {
            //enqueue admin style
            wp_enqueue_style( 'gutena-theme-admin-style',  GUTENA_THEME_URI.'/inc/dashboard/assets/css/theme-admin.css', array(), GUTENA_THEME_VERSION, 'all' );
            //enqueue admin js for installing gutena kit plugin from admin notice
            wp_enqueue_script( 'gutena-theme-admin',  GUTENA_THEME_URI.'/inc/dashboard/admin-notice/build/index.js',  array( 'wp-components', 'wp-element' ), GUTENA_THEME_VERSION, true );
           
            wp_localize_script( 
                'gutena-theme-admin' , 
                'gutena_theme_admin',
                 array(
                    'plugin_action' => $this->get_plugin_require_install_or_active(),
                    'nonce' => wp_create_nonce( 'gutena-theme-nonce' ),
                    'ajax_url' => esc_url( admin_url('admin-ajax.php') ),
                    'demo_import_page_url' => esc_url( admin_url( 'themes.php?page=gutenakit_demo_import' ) ),
                    'download_svg_url' => esc_url( GUTENA_THEME_URI . '/assets/img/icons/download.svg' ),
                    'success_svg_url' => esc_url( GUTENA_THEME_URI . '/assets/img/icons/circle-check.svg' ),
                    'install_plugin_text' => esc_html__( 'Install Gutena Kit', 'gutena' ),
                    'installing_plugin_text' => esc_html__( 'Installing Gutena Kit', 'gutena' ),
                    'activate_plugin_text' => esc_html__( 'Activate Gutena Kit', 'gutena' ),
                    'activateing_plugin_text' => esc_html__( 'Activating Gutena Kit', 'gutena' ),
                    'success_plugin_text' => esc_html__( 'Explore Gutena Templates', 'gutena' ),
                    'default_failed_text' => esc_html__( 'Sorry! Something went wrong. Please try later.', 'gutena' ),
                 )
            );
            //enqueue admin js for dismiss notice Permanently
            wp_enqueue_script( 'gutena-theme-admin-notice',  GUTENA_THEME_URI.'/inc/dashboard/assets/js/theme-admin.js', array('gutena-theme-admin'), GUTENA_THEME_VERSION, true );
        }
        //Admin Theme notice
        public function recommended_plugin_notice() {
            //get already dismissed notices
            $gutena_admin_dismiss_notices = get_option( 'gutena_admin_dismiss_notices',  array() );
            //check if notice already not dismissed
            if ( is_array( $gutena_admin_dismiss_notices ) && ! in_array( 'gutena_recommended_plugin_notice',   $gutena_admin_dismiss_notices, true ) ) {
               $action = $this->get_plugin_require_install_or_active();
               if ( in_array( $action, array( 'activate-plugin', 'install-plugin'), true ) ) {  
                   echo '
                    <div id="gutena_recommended_plugin_notice" class="notice notice-info is-dismissible">
                        <div class="gutena-admin-notice">
                            <div class="gutena-theme-logo">
                                <img src="'.esc_url( GUTENA_THEME_URI . '/assets/img/icons/gutena-logo.svg' ).'" alt="'.esc_html__( 'Gutena logo', 'gutena' ).'" >
                            </div>
                            <div class="gutena-recommended-plugin">
                                <h2>' . esc_html__( 'Install Gutena Kit for 1-click Demos', 'gutena' ) . ' </h2>
                                <p> ' . esc_html__( 'Gutena Kit brings one click demo imports and must have core block customizations for Gutena to your WordPress site.', 'gutena' ) . ' </p>
                                <p id="install-gutena-kit-plugin"></p>
                            </div>
                        </div>
                        
                    </div>
                   ' ;
               }
            }

        }
        //Dismiss Theme Notices
        public function dismiss_gutena_admin_notice_ajax() {
            if( 1 === check_ajax_referer( 'gutena-theme-nonce', 'gutena_security' ) && function_exists( 'is_gutena_admin' ) &&  true === is_gutena_admin() ){
                //get already dismissed notices
                $gutena_admin_dismiss_notices = get_option( 'gutena_admin_dismiss_notices',  array() );
                //sanitize notice id
                $notice_id = sanitize_text_field( wp_unslash( $_POST['notice_id'] ) );
                //check if notice already dismissed
                if ( is_array( $gutena_admin_dismiss_notices ) && in_array( $notice_id,   $gutena_admin_dismiss_notices ) ) {
                    wp_send_json_success(
                        array(
                            'res' => true,
                            'msg' => esc_html__( 'notice already dismissed', 'gutena' )
                         )
                    );
                } else {
                    //Add notice id to dismissed list
                    $gutena_admin_dismiss_notices[] = $notice_id;
                    if( update_option( 'gutena_admin_dismiss_notices',  $gutena_admin_dismiss_notices ) ) {
                        wp_send_json_success(
                            array(
                                'res' => true,
                                'msg' => esc_html__( 'notice dismissed', 'gutena' )
                             )
                        );
                    }else{
                        wp_send_json_error(
                            array(
                            'res' => true,
                            'msg' => esc_html__( 'Something went wrong', 'gutena' )
                             )
                        );
                    }
                }
                wp_send_json_success();
            } 
            wp_send_json_error(
                array(
                    'error'   => 1,
                    'message' => esc_html__( 'Sorry! Incorrect permission', 'gutena' ),
                )
            );
        }

    }

    Gutena_Theme_Dashboard::get_instance();
}
?>