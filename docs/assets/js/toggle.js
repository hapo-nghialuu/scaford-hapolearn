$(document).ready(function () {
  $('.menu-bar').click(function () {
    $('.nav').toggleClass('active');
  });

  $('#login-register').click(function () {
    $('#login').toggleClass('active');
  });

  $('#login-btn').click(function () {
    $('#login').toggleClass('active');
    $('#register').removeClass('active');
  });

  $('#register-btn').click(function () {
    $('#register').toggleClass('active');
    $('#login').removeClass('active');
  });

  $('.close-login-form').click(function () {
    $('#login').removeClass('active');
  });

  $('.close-register-form').click(function () {
    $('#register').removeClass('active');
  });
});
