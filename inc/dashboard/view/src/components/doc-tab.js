/**
 * gutena: doc tab
 */

 const DocTab = ( props ) => {
    return(
        <div className="gutena-tab-body gutena-doc-tab">
            <div className="gutena-details">
                <h2 className="gutena-title" >{ props.details.title }</h2>
                <div className="gutena-topics">
                    {
                        props.details.topics.map( ( item, index) => {
                            return(
                                <div key={'gutena-topics-'+index} >
                                    
                                    <p className="gutena-heading" >{ (index+1)+'. ' } { (typeof item.link === 'undefined' || item.link === '')?item.heading: <a href={ item.link } target="_blank" >{ item.heading }</a> } </p>
                                    <p className="" >{ item.description }</p>
                                </div>
                            );
                        } )
                    }
                </div>
                <hr />
                <div className="gutena-support">
                    <h2 className="gutena-title" >{ props.details.support.title }</h2>
                    <p className="gutena-description" >{ props.details.support.description }</p>
                    <a href={ props.details.support.link_url } className="gutena-support-link" target="_blank" >{ props.details.support.link_text }</a> 
                </div>
            </div>
        </div>
    )
}

export default DocTab;