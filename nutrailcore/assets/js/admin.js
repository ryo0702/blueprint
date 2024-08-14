;(function ($) {
    'use strict';

    $(document).on('click', '.wpa-field .send-test-smtp', function (e) {
        e.preventDefault();

        const button  = $(this),
              section = button.closest('.wpa-section'),
              email   = section.find('input[data-depend-id="smtp_test_email"]'),
              message = section.find('textarea[data-depend-id="smtp_test_message"]'),
              result  = button.parent().find('.smtp-result'),
              spinner = button.parent().find('.spinner');

        spinner.addClass('is-active');

        $.ajax({
            url    : ajaxurl,
            type   : 'POST',
            data   : {
                action : 'nutrail_email_test_smtp',
                nonce  : nutrail_params.nonce,
                email  : email.val(),
                message: message.val(),
            },
            success: (res, status, xhr) => {
                if (res.success) {
                    result.removeClass('wpa-text-error');
                    result.addClass('wpa-text-success');
                } else {
                    result.removeClass('wpa-text-success');
                    result.addClass('wpa-text-error');
                }
                spinner.removeClass('is-active');
                result.html(res.data.message);
            },
            error  : (xhr, status, error) => {
                spinner.removeClass('is-active');
                result.removeClass('wpa-text-success');
                result.addClass('wpa-text-error');
                result.html(error);
            },
        });
    });

})(window.jQuery);