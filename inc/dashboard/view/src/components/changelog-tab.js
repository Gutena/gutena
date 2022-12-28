/**
 * gutena: changelog tab
 */

 const ChangelogTab = ( props ) => {
    return(
        <div className="gutena-tab-body gutena-changelog-tab">
            <div className="gutena-details">
                <h2 className="gutena-title" >{ props.details.title }</h2>
                <p 
                className="gutena-description"  
                dangerouslySetInnerHTML={{ __html: props.details.description }}
                />
            </div>
        </div>
    )
}

export default ChangelogTab;