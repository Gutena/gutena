/**
 * gutena: Welcome tab
 */
 
const WelcomeTab = ( props ) => {
    return(
        <div className="gutena-tab-body gutena-welcome-tab gutena-grid">
            <div className="gutena-video">
                <img src={ props.details.video_img_url } alt={ props.details.title } title={ props.details.title } />
            </div>
            <div className="gutena-details">
                <h2 className="gutena-title" >{ props.details.title }</h2>
                <p className="gutena-description" >{ props.details.description }</p>
                <a href={ props.details.button_link } className="gutena-button" >{ props.details.button_text }</a> 
            </div>
        </div>
    )
}

export default WelcomeTab;