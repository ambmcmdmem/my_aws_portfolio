/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/ts/common.ts":
/*!********************************!*\
  !*** ./resources/ts/common.ts ***!
  \********************************/
/***/ ((__unused_webpack_module, exports) => {



Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.selectImgDisplay = void 0;

var selectImgDisplay = function selectImgDisplay(imgInputElementId, displayElementId) {
  var imgInputElement = document.getElementById(imgInputElementId);
  var displayElement = document.getElementById(displayElementId);

  if (imgInputElement === null || displayElement === null) {
    alert('Element can\'t find.');
    return;
  }

  imgInputElement.addEventListener('change', function (imgInputEvent) {
    var fileTarget = imgInputEvent.target;

    if (fileTarget.files === null) {
      alert('file can not find');
      return;
    }

    var file = fileTarget.files[0];
    var imgReader = new FileReader();

    imgReader.onload = function (imgReaderEvent) {
      if (imgReaderEvent.target === null) {
        alert('Img can not find.');
        return;
      }

      if (typeof imgReaderEvent.target.result === 'string') {
        displayElement.setAttribute('src', imgReaderEvent.target.result);
      }
    };

    imgReader.readAsDataURL(file);
  });
};

exports.selectImgDisplay = selectImgDisplay;

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
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
var exports = __webpack_exports__;
/*!************************************************!*\
  !*** ./resources/ts/productions/production.ts ***!
  \************************************************/


Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var common_1 = __webpack_require__(/*! ../common */ "./resources/ts/common.ts");

(0, common_1.selectImgDisplay)('pathSelect', 'displayImg');
})();

/******/ })()
;