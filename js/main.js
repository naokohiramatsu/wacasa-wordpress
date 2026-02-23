

jQuery(function ($) {
  $('.hum-icon').on('click', function () {
    $(this).toggleClass('active');
    $('.menu').toggleClass('active');
    $('body').toggleClass('is-menu-open');
  });
});
