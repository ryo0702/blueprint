import inView from '../libs/in-view';
import $ from 'jquery';

// Document Completed
window.addEventListener('DOMContentCompleted', () => {
    if ($('.showaction').length) {
        import(/* webpackChunkName: "animate-css" */'../scss/animate.scss');
        inView('.showaction').on('enter', el => {
            if (!el.classList.contains('animate__animated')) {
                const animate  = el.getAttribute('data-animate'),
                      duration = el.getAttribute('data-duration') || '1.5s',
                      delay    = el.getAttribute('data-delay') || 10;
                if (duration) {
                    el.style.setProperty('--animate-duration', duration);
                }
                setTimeout(function () {
                    el.classList.add('' + animate);
                    el.classList.add('animate__animated');
                }, delay);
            }
        });
    }
})