import { TabContext } from '../data/tab-context.js';

const { Fragment, useContext, useState, useEffect } = wp.element;

const TabNotice = ( props ) => { 
    const { installationStatus, message } = useContext(TabContext);
    const [dismissNotice, setDismissNotice] = useState(installationStatus);

    const gutenaDismissNotice = () =>{
        setDismissNotice('notice-dismissed');
    }

    useEffect(() => {
        if ( 'start' === installationStatus ) {
            setDismissNotice(' ');
        }
    });

    return(<Fragment>
        { ( 'failed' === installationStatus || 'success' === installationStatus ) ? 
            <div className={ `gutena-notice ${installationStatus}-notice ${dismissNotice}` } >
                <span className="gutena-dismiss-notice" onClick={ gutenaDismissNotice } > X </span>
                <span className="gutena-notice-message">{ message }</span>
            </div>: '' 
        }
        </Fragment>
    );
}
export default TabNotice;