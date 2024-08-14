import $ from 'jquery';

window.addEventListener('DOMContentCompleted', () => {

    const navbarScroll = (args) => {
        if ($('.overall-animation').length) {
            const top    = args.scroll.y,
                  header = $('header.navbar');

            if (top > 300) {
                if (!header.hasClass('nav-narrower')) {
                    header.addClass('nav-narrower');
                }
            } else {
                if (header.hasClass('nav-narrower')) {
                    header.removeClass('nav-narrower');
                }
            }
        }
    }

    if (document.querySelector('[data-scroll-container]') !== null) {
        import(/* webpackChunkName: "locomotive-css" */'../libs/locomotive/locomotive-scroll.css');
        import(/* webpackChunkName: "locomotive" */'../libs/locomotive/locomotive-scroll').then(({Smooth}) => {
            const scroll = new Smooth({
                el    : document.querySelector('[data-scroll-container]'),
                smooth: true
            });
            scroll.on('scroll', (args) => {
                navbarScroll(args);
            });
            document.addEventListener('lazyloaded', function () {
                scroll.update()
            });
        });
    }

});