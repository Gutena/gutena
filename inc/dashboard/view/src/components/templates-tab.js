import GetGutenaKitButton from './get-plugin.js';

/**
 * Starter Templates tab 
 */
const TemplatesTab = ( props ) => {

    return(
        <div className="gutena-tab-body gutena-templates-tab">
            <div className="gutena-details">
                <h2 className="gutena-title" >{ props.details.title }</h2>
                <p className="gutena-description" >{ props.details.description }</p>
                <GetGutenaKitButton addclass="bg-orange margin-auto " />
            </div>
            <div className="gutena-bottom-img">
                <img src={ props.details.templates_img } alt={ props.details.title } title={ props.details.title } />
            </div>
        </div>
    )
}

export default TemplatesTab;