import $ from 'jquery';

// close modal
$(document).on('click', '.modal [data-dismiss="modal"]', function (e) {
    e.preventDefault();
    const modal    = $(this).closest('.modal');
    const backdrop = $('.modal-backdrop');

    $(document).trigger('hide.bs.modal', modal);

    backdrop.removeClass('show');
    modal.animate({
        top    : '-=50px',
        opacity: '0'
    }, 300, 'linear', function () {
        modal.css('display', 'none');
        modal.removeClass('show');
        backdrop.remove();
        $(document).trigger('hidden.bs.modal', modal);
    });
});

// open modal
$(document).on('click', '[data-toggle="modal"]', function (e) {
    e.preventDefault();

    const btn    = $(this);
    const target = btn.attr('data-target');

    if (target) {
        const modal = $(target);

        $('body').append('<div class="modal-backdrop fade show"></div>');

        $(document).trigger('show.bs.modal', [modal, btn]);

        modal.addClass('show');
        modal.css('display', 'block');
        modal.animate({
            top    : '+=50px',
            opacity: '1'
        }, 300, 'linear', function () {
            $(document).trigger('shown.bs.modal', [modal, btn]);
        });
    }
});

// event modal
$(document).on('shown.bs.modal', function (event, modal, button) {
    //
});