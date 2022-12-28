/**
 * Tab global data
 */
const { createContext, useReducer } = wp.element;
import { TabReducer } from './tab-reducer';
const TabContext = createContext();

const TabContextProvider = (props) =>{
    let button_link = '#';
    let button_text = '';
    let button_icon_src = '';
    if ( 'install-plugin' === gutena_theme_admin.plugin_action ) {
        button_text = gutena_theme_admin.install_plugin_text;
        button_icon_src = gutena_theme_admin.download_svg_url;
    } else if ( 'activate-plugin' === gutena_theme_admin.plugin_action ) {
        button_text = gutena_theme_admin.activate_plugin_text;
    } else {
        button_text = gutena_theme_admin.success_plugin_text;
        button_link = gutena_theme_admin.demo_import_page_url;
    }
    let pluginInfo = {
        buttonText: button_text,
        buttonLink: button_link,
        buttonIconSrc: button_icon_src,
        installationStatus: '',
        pluginRes: '',
        message: '',
      };
    const [pluginProgress, dispatch] = useReducer(TabReducer,pluginInfo);
    //dispatch = TabReducer : it's a reducer function defined in TabReducer.js
    // TabReducer function can access { installationInProgress, pluginRes, message } as a state
    return(
        <TabContext.Provider value={{...pluginProgress,dispatch}} >
        {props.children}
        </TabContext.Provider>
    );
}

export default TabContextProvider;

export {TabContext};