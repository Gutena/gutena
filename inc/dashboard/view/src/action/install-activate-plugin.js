/**
 * Gutena kit plugin installation or activation ajax
 */

export const install_actiavte_plugin_ajax = async () => {
    
    const response = await fetch(gutena_theme_admin.ajax_url, {
        method: 'POST',
        credentials: 'same-origin', // <-- make sure to include credentials
        headers:{
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json',
            'X-WP-Nonce' : gutena_theme_admin.nonce
        },
        body: new URLSearchParams({
            'action': 'install_activate_gutena_kit',
            'gutena_security': gutena_theme_admin.nonce, 
            'plugin_require_action': gutena_theme_admin.plugin_action,
        })
    }).then(response => response.json());

    return response;
    
}