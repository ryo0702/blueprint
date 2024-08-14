import $ from 'jquery';

function alignheights(alignheights, ahelem, spwidth) {
    let wh         = $(window).width();
    let highestBox = 0;

    if (wh > spwidth) {
        $(document).ready(function ($) {
            $(alignheights).each(function () {
                $(this).find(ahelem).each(function () {
                    if ($(this).height() > highestBox) {
                        highestBox = $(this).height();
                    }
                });
                $(this).find(ahelem).height(highestBox);
            });
        });
    }
}

alignheights(".alignheights", ".ahelem", "768");