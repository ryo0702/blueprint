import $ from 'jquery';
import inView from '../libs/in-view';

const actionAjax = function (el) {
    const submit       = $(el).find('[type="submit"]');
    const formMessages = $(el).find('.form-message');

    $(el).find('#agree-check').on('click', function () {
        if ($(this).is(':checked')) {
            submit.removeAttr('disabled');
        } else {
            submit.attr('disabled', 'disabled');
        }
    });
    $(el).validate({
        submitHandler: function (form) {
            // Serialize the form data.
            const formData  = new FormData(form);
            const resetForm = () => {
                form.reset();
                if ($(form).find('#agree-check').length) {
                    submit.attr('disabled', 'disabled');
                }
                $(form).removeClass('loading');
            }
            const ajaxForm  = (data) => {
                // Submit the form using AJAX.
                $.ajax({
                    url        : form.action,
                    type       : form.method,
                    data       : data,
                    processData: false,
                    contentType: false,
                }).done(function (response) {
                    // Make sure that the formMessages div has the 'success' class.
                    if (!response.success) {
                        formMessages.removeClass('success');
                        formMessages.addClass('error');
                    } else {
                        formMessages.removeClass('error');
                        formMessages.addClass('success');
                    }

                    // Set the message text.
                    formMessages.text(response.data.message);

                    // Set the message text.
                    if (response.data.redirect && response.data.redirect !== '') {
                        window.location.href = response.data.redirect;
                    }

                    // Clear the form.
                    resetForm();

                }).fail(function (data) {
                    // Make sure that the formMessages div has the 'error' class.
                    formMessages.removeClass('success');
                    formMessages.addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        formMessages.text(data.responseText);
                    } else {
                        formMessages.text('Oops! An error occurred and your message could not be sent.');
                    }
                    // Clear the form.
                    resetForm();
                });
            }

            $(form).addClass('loading');
            formMessages.removeClass('success error');
            formMessages.text('');

            if (typeof recaptcha !== "undefined" && recaptcha.site_key) {
                grecaptcha.ready(function () {
                    grecaptcha.execute(recaptcha.site_key, {action: 'submit'}).then(function (token) {
                        formData.append('g-recaptcha-response', token);
                        ajaxForm(formData);
                    });
                });
            } else {
                ajaxForm(formData);
            }
        }
    });
}

// Document Completed
window.addEventListener('DOMContentCompleted', () => {
    inView('#contact-form').once('enter', el => {
        import(/* webpackChunkName: "jquery-validation-ja" */'../libs/jquery-validation/dist/localization/messages_ja');
        import(/* webpackChunkName: "jquery-validation" */'../libs/jquery-validation').then(() => actionAjax(el));
    });
    inView('.form-action').once('enter', () => {
        import(/* webpackChunkName: "jquery-validation-ja" */'../libs/jquery-validation/dist/localization/messages_ja');
        import(/* webpackChunkName: "jquery-validation" */'../libs/jquery-validation').then(() => {
            $('.form-action').each((index, el) => actionAjax(el));
        });
    });
});