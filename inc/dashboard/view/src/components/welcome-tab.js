/**
 * gutena: Welcome tab
 */
 
const WelcomeTab = ( props ) => {
    return(
        <div className="gutena-tab-body gutena-welcome-tab gutena-grid">
            <div className="gutena-video">
                <a href={ props.details.video_link } target="_blank" >
                    <img src={ props.details.video_img_url } alt={ props.details.title } title={ props.details.title } />
                </a>
            </div>
            <div className="gutena-details">
                <h2 className="gutena-title" >{ props.details.title }</h2>
                <p className="gutena-description" >{ props.details.description }</p>
                <a href={ props.details.button_link } className="gutena-button" target="_blank" >{ props.details.button_text }</a> 
            </div>
        </div>
    )
}

export default WelcomeTab;