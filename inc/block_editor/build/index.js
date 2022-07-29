/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ ((module) => {

module.exports = window["wp"]["element"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);

const {
  __
} = wp.i18n;
const {
  useState
} = wp.element;
const {
  __experimentalToggleGroupControl,
  __experimentalToggleGroupControlOption,
  ColorPalette,
  GradientPicker
} = wp.components;
const {
  useSelect
} = wp.data;
const {
  useEntityProp
} = wp.coreData;
const {
  PluginDocumentSettingPanel
} = wp.editPost;
const {
  registerPlugin
} = wp.plugins;
const ToggleGroupControl = __experimentalToggleGroupControl;
const ToggleGroupControlOption = __experimentalToggleGroupControlOption;
/****Meta Block: gutena/postmeta-hero-header-bg-color : start *****/

const gutena_postmeta_theme_color_settings = () => {
  const postType = useSelect(select => select('core/editor').getCurrentPostType(), []); //Check if postType is of post type

  if ('post' !== postType) {
    return null;
  }

  const [meta, setMeta] = useEntityProp('postType', postType, 'meta');
  const colorValue = typeof meta['gutena_post_theme_color'] === 'undefined' || meta['gutena_post_theme_color'] === null ? '' : meta['gutena_post_theme_color']; //Update Post Meta Value

  const updateColorMetaValue = color => {
    if (typeof color === 'undefined' || color === null) {
      color = '';
    }

    setMeta({ ...meta,
      gutena_post_theme_color: color
    });
  };

  const [currentTab, setCurrentTab] = useState(colorValue.indexOf('gradient') < 0 ? 'color' : 'gradient');
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("style", null, typeof colorValue !== 'undefined' && colorValue != null && colorValue != '' ? `.post-type-post .edit-post-visual-editor__post-title-wrapper {
                    padding: 50px 0px;
                    margin-bottom: 50px;
                background: ${colorValue};
            }` : ''), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(PluginDocumentSettingPanel, {
    className: "gutena-postmeta-setting-panel",
    title: "Theme color",
    initialOpen: true,
    icon: "customizer"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ToggleGroupControl, {
    value: currentTab,
    onChange: setCurrentTab,
    label: __('Select color type'),
    hideLabelFromVision: true,
    isBlock: true
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ToggleGroupControlOption, {
    value: "color",
    label: __('Solid')
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ToggleGroupControlOption, {
    value: "gradient",
    label: __('Gradient')
  })), currentTab === 'color' && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ColorPalette, {
    colors: gutena_block_editor.postThemeColors,
    value: colorValue.indexOf('gradient') < 0 ? colorValue : '',
    onChange: color => updateColorMetaValue(color),
    clearable: true,
    enableAlpha: true
  }), currentTab === 'gradient' && (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(GradientPicker, {
    value: colorValue.indexOf('gradient') >= 0 ? colorValue : '',
    onChange: currentGradient => updateColorMetaValue(currentGradient),
    gradients: gutena_block_editor.postThemeGradients,
    clearable: true
  })));
};

if (typeof gutena_block_editor != 'undefined' && '1' === gutena_block_editor.isPostThemeColors) {
  //Register post meta settings for theme color in right sidebar under post tab
  registerPlugin('gutena-postmeta-theme-color', {
    render: gutena_postmeta_theme_color_settings
  });
}
/****Meta Block: gutena/postmeta-hero-header-bg-color : end *****/
})();

/******/ })()
;
//# sourceMappingURL=index.js.map