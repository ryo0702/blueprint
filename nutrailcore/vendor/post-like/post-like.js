;(function ($) {
    'use strict';

    $(document).on('click', '.sl-button', function (e) {

        e.preventDefault();

        var button      = $(this),
            ajaxurl     = button.attr('href'),
            like_text   = button.data('like'),
            unlike_text = button.data('unlike'),
            wrapper     = button.closest('.sl-wrapper');

        wrapper.addClass('loading');

        $.ajax({
            type   : 'POST',
            url    : ajaxurl,
            success: function (response) {
                wrapper.find('.icon').html(response.icon);
                wrapper.find('.count').html(response.count);

                if (response.status === 'unliked') {
                    button.prop('title', like_text);
                    button.removeClass('liked');
                    button.find('.title').html(like_text);
                } else {
                    button.prop('title', unlike_text);
                    button.addClass('liked');
                    button.find('.title').html(unlike_text);
                }

                wrapper.removeClass('loading');
            }
        });

    });

})(jQuery);