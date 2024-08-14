import $ from 'jquery';

// Document Completed
window.addEventListener('DOMContentCompleted', () => {
    // swiper
    // https://swiperjs.com/types/interfaces/types_swiper_options.swiperoptions
    // https://swiperjs.com/swiper-api
    if ($('.swiper-carousel').length > 0) {
        import(/* webpackChunkName: "swiper" */'../libs/swiper/swiper-bundle.min.js').then(({default: Swiper}) => {
            $('.swiper-carousel').each(function () {
                const attr    = this.getAttribute('data-slider');
                const options = attr ? JSON.parse(attr.replace(/'/g, '"').replace(';', '')) : {};
                new Swiper(this, $.extend(true, {}, {
                    slidesPerView: 3,
                    spaceBetween : 30,
                    pagination   : {
                        el        : '.swiper-pagination',
                        totalClass: '.swiper-pagination-total',
                        clickable : true,
                        type      : 'bullets', // 'bullets' | 'fraction' | 'progressbar' | 'custom'
                    },
                    navigation   : {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    scrollbar    : {
                        el: '.swiper-scrollbar',
                    },
                }, options));
            });
        });
    }
});