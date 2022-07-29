const {__} = wp.i18n;
const { useState } = wp.element;
const {
        __experimentalToggleGroupControl,
	    __experimentalToggleGroupControlOption,
        ColorPalette, GradientPicker,
         } = wp.components;
const { useSelect } = wp.data;
const { useEntityProp } = wp.coreData;
const {  PluginDocumentSettingPanel } = wp.editPost;
const { registerPlugin } = wp.plugins;
const ToggleGroupControl = __experimentalToggleGroupControl;
const ToggleGroupControlOption = __experimentalToggleGroupControlOption;

/****Meta Block: gutena/postmeta-hero-header-bg-color : start *****/
 
const gutena_postmeta_theme_color_settings = () => {
   
    const postType = useSelect(
        ( select ) => select( 'core/editor' ).getCurrentPostType(),
        []
    );

    //Check if postType is of post type
    if( 'post' !== postType ){
        return null;
    }

    const [ meta, setMeta ] = useEntityProp( 'postType', postType, 'meta' );

    const colorValue = (typeof meta[ 'gutena_post_theme_color' ] === 'undefined' || meta[ 'gutena_post_theme_color' ] === null )? '': meta[ 'gutena_post_theme_color' ];
   
    //Update Post Meta Value
    const updateColorMetaValue = ( color ) => {
       
        if(typeof color === 'undefined' || color === null ) {
            color = '';
        }

        setMeta( { ...meta, gutena_post_theme_color: color } );
       
    };

    const [ currentTab, setCurrentTab ] = useState(
		( colorValue.indexOf('gradient') < 0 ) ? 'color' : 'gradient'
	);
    

    return(
        <>
        <style>
            {
                ( typeof colorValue !== 'undefined' && colorValue != null && colorValue != '' ) ? `.post-type-post .edit-post-visual-editor__post-title-wrapper {
                    padding: 50px 0px;
                    margin-bottom: 50px;
                background: ${colorValue};
            }`:''
            }
        </style>
        <PluginDocumentSettingPanel
            className="gutena-postmeta-setting-panel"
            title="Theme color"
            initialOpen={ true }
            icon="customizer"
        >
            
            <ToggleGroupControl
                value={ currentTab }
                onChange={ setCurrentTab }
                label={ __( 'Select color type' ) }
                hideLabelFromVision
                isBlock
            >
                <ToggleGroupControlOption
                    value="color"
                    label={ __( 'Solid' ) }
                />
                <ToggleGroupControlOption
                    value="gradient"
                    label={ __( 'Gradient' ) }
                />
            </ToggleGroupControl>
            { ( currentTab === 'color') && (
                <ColorPalette
                    colors={ gutena_block_editor.postThemeColors }
                    value={ (colorValue.indexOf('gradient')<0)?colorValue:'' }
                    onChange={ ( color ) => updateColorMetaValue( color ) }
                    clearable={ true }
                    enableAlpha={ true }
                />
			) }
            { ( currentTab === 'gradient') && (
                <GradientPicker
                    value={ (colorValue.indexOf('gradient')>=0)?colorValue:'' }
                    onChange={ ( currentGradient ) => updateColorMetaValue( currentGradient ) }
                    gradients={ gutena_block_editor.postThemeGradients }
                    clearable={ true }
                />
			) }
        </PluginDocumentSettingPanel>
        </>
    );

}

if( typeof gutena_block_editor != 'undefined' && '1' === gutena_block_editor.isPostThemeColors ){
    //Register post meta settings for theme color in right sidebar under post tab
    registerPlugin( 'gutena-postmeta-theme-color', { render: gutena_postmeta_theme_color_settings } );
    
}
/****Meta Block: gutena/postmeta-hero-header-bg-color : end *****/