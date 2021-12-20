/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/ts/common.ts ***!
  \********************************/


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
/******/ })()
;