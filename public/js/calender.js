/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/calender.js ***!
  \**********************************/
console.log($('.day'));
$('.day td').click(function () {
  console.log(this);
  $('#overlay').removeClass('hidden');
});
$('#overlay').click(function () {
  $('#overlay').addClass('hidden');
});
$.ajax({
  url: "/rest",
  success: function success(data) {
    console.log(data);
  }
});
/******/ })()
;