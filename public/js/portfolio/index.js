/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/portfolio/index.js ***!
  \*****************************************/
document.addEventListener('DOMContentLoaded', function () {
  var viewButtons = document.querySelectorAll('.view-details');
  viewButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      var imageUrl = button.getAttribute('data-image');
      var overlay = document.createElement('div');
      overlay.classList.add('overlay-image');
      var image = document.createElement('img');
      image.classList.add('img-fluid');
      image.src = imageUrl;
      image.alt = 'Project Image';
      overlay.appendChild(image);
      document.body.appendChild(overlay);
      document.body.style.overflow = 'hidden';
      overlay.addEventListener('click', function () {
        overlay.remove();
        document.body.style.overflow = '';
      });
    });
  });
  document.addEventListener('click', function (event) {
    if (event.target.classList.contains('overlay-image')) {
      event.target.remove();
      document.body.style.overflow = '';
    }
  });
});
/******/ })()
;