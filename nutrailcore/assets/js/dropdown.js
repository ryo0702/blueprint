import $ from 'jquery';

$(document).on('click', function (e) {
    const target  = $(e.target).closest('.toggle-dropdown'),
          current = target.closest('.dropdown-parent-toggle');

    if (target.length) {
        $('.toggle-dropdown').not(target).not(current).removeClass('open');
        if ($(e.target).is('[data-action="dropdown"]') ||
            $(e.target).closest('[data-action="dropdown"]').length) {
            if (target.hasClass('toggle-overlay')) {
                if (target.hasClass('open')) {
                    $('body').removeClass('active-overlay');
                } else {
                    $('body').addClass('active-overlay');
                }
            }
            target.toggleClass('open');
            e.preventDefault();
        }
    } else {
        $('.toggle-dropdown').removeClass('open');
        if (target.hasClass('toggle-overlay') || !target.length) {
            $('body').removeClass('active-overlay');
        }
    }
});