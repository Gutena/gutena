import GetGutenaKitButton from '../../view/src/components/get-plugin.js';
import TabContextProvider from '../../view/src/data/tab-context.js';

const { Component, Fragment, render } = wp.element;

class GutenaKitInstallBtn extends Component {
    render(){
        //check for info
        if ( typeof gutena_theme_admin === 'undefined' ){
            return(<div></div>);
        }

        return(
            <Fragment> 
            <TabContextProvider>    
                <GetGutenaKitButton addclass=" bg-gutena-wp-primary-btn " />
            </TabContextProvider>
            </Fragment>
        );
    }
}

let install_button = document.getElementById("install-gutena-kit-plugin");

if ( install_button ) {
    wp.domReady( () => {
        render(
            <GutenaKitInstallBtn />,
            document.querySelector('#install-gutena-kit-plugin')
        );
    });
}