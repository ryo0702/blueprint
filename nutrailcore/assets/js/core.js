/**
 * vendor module
 * https://webpack.js.org/api/module-methods/
 */
import $ from 'jquery';
import inView from '../libs/in-view';
import '../libs/lazysizes';
import './common';
import './dropdown';
import './contact';
import './slider';
import './modal';
import './animation';
import './close';

// Document Load
const documentOnload = () => {
    // Delay event
    const everythingLoaded = setInterval(function () {
        if (/loaded|complete/.test(document.readyState)) {
            clearInterval(everythingLoaded);

            // trigger delay event
            window.dispatchEvent(new CustomEvent("DOMContentDelayed"));
        }
    }, 1000);

    // Check in-view
    inView('.check-inview').on('enter', el => el.classList.add('is-inview'));

    // Load google fonts
    if (typeof WebFontConfig !== "undefined") {
        import(/* webpackChunkName: "webfont" */'./webfont').then(WebFont => WebFont.load(WebFontConfig));
    }

    // trigger load complete
    document.body.classList.add('page-loaded');

    // trigger event
    window.dispatchEvent(new CustomEvent("DOMContentCompleted"));
}

//add simple support for background images:
document.addEventListener('lazybeforeunveil', function (e) {
    const bg = e.target.getAttribute('data-bg');
    if (bg) {
        e.target.style.backgroundImage = 'url(' + bg + ')';
    }
});

$(document).on('turbolinks:load', documentOnload);

// After page load complete
if (window.addEventListener) {
    window.addEventListener('load', documentOnload);
} else if (window.attachEvent) {
    window.attachEvent('onload', documentOnload);
} else {
    window.onload = documentOnload;
}