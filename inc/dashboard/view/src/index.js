import WelcomeTab from './components/welcome-tab.js';
import TemplatesTab from './components/templates-tab.js';
import ChangelogTab from './components/changelog-tab.js';
import DocTab from './components/doc-tab.js';
import TabNotice from './components/tab-notice.js';
import GetGutenaKitButton from './components/get-plugin.js';
import TabContextProvider from './data/tab-context.js';

const { Component, Fragment, render } = wp.element;
const { TabPanel } = wp.components;

class GutenaThemeDashboard extends Component {
    render(){
        //check for info
        if ( typeof gutena_dahboard_info === 'undefined' || typeof gutena_theme_admin === 'undefined' ){
            return(<div>{ __( 'Sorry! Gutena theme dashboard not available.', 'gutena' ) }</div>);
        }

        //Tab body
        const tabsComponent = {
            welcome:WelcomeTab,
            templates:TemplatesTab,
            changelog:ChangelogTab,
            doc:DocTab,
        };
        //tabs
        const tabs = [];
        for (let tabName in gutena_dahboard_info.tabs) {
            let tab = gutena_dahboard_info.tabs[tabName];
            tabs.push(
                {
                    name: tabName,
                    title: tab.tab_title,
                    className: 'gutena-dashboard-'+tabName,
                    details: tab
                }
            );
        }

        const onSelect = ( tabName ) => {
        };

        return(
            <Fragment> 
            <TabContextProvider>    
                <div className="gutena-theme-dashboard" >
                    <div className="gutena-header" >
                        <div className="gutena-admin-logo">
                            <img src={gutena_dahboard_info.gutena_logo} />
                        </div>
                        <TabNotice />
                        <GetGutenaKitButton addclass="bg-blue" />
                    </div>
                    <TabPanel
                        className="gutena-tab-panel"
                        activeClass="active-tab"
                        onSelect={ onSelect }
                        tabs={ tabs }
                    >
                        { ( tab ) => {
                        const TabSelected = tabsComponent[tab.name] || WelcomeTab;
                        return( <TabSelected details={ tab.details } /> );
                        } }
                    </TabPanel>
                </div>
            </TabContextProvider>
            </Fragment>
        );
    }
}

wp.domReady( () => {
    render(
        <GutenaThemeDashboard />,
        document.querySelector('#gutena-theme-dashboard')
    );
});