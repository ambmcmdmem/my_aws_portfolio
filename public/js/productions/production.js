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

var selectImgDisplay = function selectImgDisplay(imgInputElementId, displayImgWrapElementId) {
  var imgInputElement = document.getElementById(imgInputElementId);
  var displayImgWrapElement = document.getElementById(displayImgWrapElementId);

  if (imgInputElement === null || displayImgWrapElement === null) {
    alert('Element can\'t find.');
    return;
  }

  imgInputElement.addEventListener('change', function (imgInputEvent) {
    while (displayImgWrapElement.lastChild) {
      displayImgWrapElement.removeChild(displayImgWrapElement.lastChild);
    }

    var fileTarget = imgInputEvent.target;

    if (fileTarget.files === null) {
      alert('file can not find');
      return;
    }

    var imgInputFiles = fileTarget.files;

    var _loop_1 = function _loop_1(file_i) {
      var imgReader = new FileReader();
      var imgInputFile = imgInputFiles[file_i];

      imgReader.onload = function (imgReaderEvent) {
        if (imgReaderEvent.target === null) {
          alert('Img can not find.');
          return;
        }

        if (typeof imgReaderEvent.target.result === 'string') {
          var displayImgElement = document.createElement('img');
          displayImgElement.id = 'imgInputFile_' + file_i;
          displayImgElement.width = 200;
          displayImgElement.setAttribute('src', imgReaderEvent.target.result);
          displayImgWrapElement.appendChild(displayImgElement);
        } else {
          alert('imgReaderEvent.target.result is not string.');
        }
      };

      if (imgInputFile) {
        imgReader.readAsDataURL(imgInputFile);
      }
    };

    for (var file_i = 0; file_i < imgInputFiles.length; file_i++) {
      _loop_1(file_i);
    }
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

(0, common_1.selectImgDisplay)('pathSelect', 'displayImgWrap');
})();

/******/ })()
;