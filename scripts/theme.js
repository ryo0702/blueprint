jQuery(document).ready(function($) {
  $('.humburger').on('click', function() {
      $(this).toggleClass('active');
      $('.drawermenu').toggleClass('active');
  });
  $('.drawermenu .close').on('click', function() {
      $('.drawermenu').removeClass('active');
      $('.humburger').removeClass('active');
  });
});