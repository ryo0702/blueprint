jQuery(document).ready(function($) {
  // Drawer Menu
  $('.humburger').on('click', function() {
      $(this).toggleClass('active');
      $('.drawermenu').toggleClass('active');
  });
  $('.drawermenu .close').on('click', function() {
      $('.drawermenu').removeClass('active');
      $('.humburger').removeClass('active');
  });

  // Admin Bar
  var adminbar = $('#wpadminbar');
  if (adminbar.length) {
      $('body').addClass('has-adminbar');
      $('.drawermenu').css('top', adminbar.height());
  }

    // Cookie Notice
    if (!localStorage.getItem('cookie-notice')) {
        $('.cookie-notice').css('display', 'flex');
    }
    $('.cookie-notice .agree').on('click', function() {
        localStorage.setItem('cookie-notice', 'on');
        $('.cookie-notice').css('display', 'none');
    });
    
    // Local Storage Delete
    $('#lsdelete').on('click', function() {
        localStorage.clear();
        alert('ローカルストレージが削除されました。ページをリロードしてください。');
    });

    // Loading Screen
    $(window).on('load', function() {
        $('.loading-screen').fadeOut(300, function() {
            $('body').removeClass('no-scroll'); // ローディング画面が消えたらスクロールを許可
        });
    });
    $('body').addClass('no-scroll');

    // Slick Slider
    $('.slider').slick();
});