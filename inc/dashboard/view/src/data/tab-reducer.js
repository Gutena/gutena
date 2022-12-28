/**
 * Tab reducer : perform exactly one action on each dispatch
 */
export const TabReducer = (state,action) =>{
    /**
     * "action" variable contain details object on click "install gutena kit" button 
     * 
     * "state" variable contain initialize array or object defined in TabContext.js
     * **/
    const { buttonText, buttonLink, buttonIconSrc, installationStatus, pluginRes, success, message } = state;//Destructuring 
    let button_text = buttonText;
    let button_link = '#';
    let status = '';
    let msg = '';
    let update = {};
    let button_icon_src = buttonIconSrc;
    switch (action.type) {
        case 'INSTALLATION_BEGINS':
            if ( 'install-plugin' === gutena_theme_admin.plugin_action ) {
                msg = 'Plugin Installation Begins';
                button_text = gutena_theme_admin.installing_plugin_text;
            } else if ( 'activate-plugin' === gutena_theme_admin.plugin_action ) {
                msg = 'Plugin activation Begins';
                button_text = gutena_theme_admin.activateing_plugin_text;
            }
            update = {
                buttonText: button_text,
                buttonLink: button_link,
                buttonIconSrc: button_icon_src,
                installationStatus: 'start',
                pluginRes: {},
                message: msg
              };
            return update;
            break;
        case 'INSTALLATION_END':
            if ( typeof action.response.success !== 'undefined' && action.response.success ){
                msg = msg = ( typeof action.response.data === 'undefined' || typeof action.response.data.message === 'undefined' ) ? 'Gutena Kit plugin activated successfully': action.response.data.message;
                button_text = gutena_theme_admin.success_plugin_text;
                button_link = gutena_theme_admin.demo_import_page_url;
                button_icon_src = gutena_theme_admin.success_svg_url;
                status = 'success';  
            } else {
                status = 'failed';
                msg = ( typeof action.response.data === 'undefined' || typeof action.response.data.message === 'undefined' ) ? gutena_theme_admin.default_failed_text: action.response.data.message;
                if ( 'install-plugin' === gutena_theme_admin.plugin_action ) {
                    button_text = gutena_theme_admin.install_plugin_text;
                } else {
                    button_text = gutena_theme_admin.activate_plugin_text;
                }
            }
            
            update =  {
                buttonText: button_text,
                buttonLink: button_link,
                buttonIconSrc: button_icon_src,
                installationStatus: status,
                pluginRes: action.response,
                message:msg
            };
            return update;
            break;
        default: return state;
            
    }
}