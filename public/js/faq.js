/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/faq/faq.js ***!
  \*********************************/
var toggles = document.querySelectorAll(".faq-toggle");
toggles.forEach(function (toggle) {
  toggle.addEventListener("click", function () {
    toggle.parentElement.classList.toggle("active");
  });
});
/******/ })()
;