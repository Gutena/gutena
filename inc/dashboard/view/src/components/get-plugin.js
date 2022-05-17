import { TabContext } from '../data/tab-context.js';
import { install_actiavte_plugin_ajax } from '../action/install-activate-plugin.js';
const { useContext, useEffect } = wp.element;

const GetGutenaKitButton = ( props ) => {
    const { buttonText, buttonLink, buttonIconSrc, installationStatus, pluginRes, message, dispatch } = useContext(TabContext);

    const install_or_actiavte_plugin = async (event) => {
        if ( '#' === buttonLink && 'start' != installationStatus ) {
            event.preventDefault();
            dispatch({type:"INSTALLATION_BEGINS"});
            const response = await install_actiavte_plugin_ajax();
            dispatch({ type: 'INSTALLATION_END', response: response });  
        } else if( '#' !== buttonLink && buttonLink.length > 7 ){
            location.href = gutena_theme_admin.demo_import_page_url;
        }
    }

    useEffect(() => {
        setTimeout(() => { 
            //send to demo import page if gutenakit activated
            if ( 'success' === installationStatus ){
                location.href = gutena_theme_admin.demo_import_page_url;
            }
        }, 1000);
    });

    return(
        <button className={ `gutena-action-button ${installationStatus}-btn ${props.addclass}` } onClick={ install_or_actiavte_plugin } > { (( '' !== buttonIconSrc )?<img src={ buttonIconSrc } alt={ buttonText } title={ buttonText } />:'') } <span>{buttonText}</span> </button>
    )
}

export default GetGutenaKitButton;