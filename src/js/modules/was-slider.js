import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

function wasSliders() {

    const thumbnails = new Splide( '.js-was-slider-mini', {
        type        : 'loop',
        height      : 186,
        perPage     : 3.5,
        gap         : 24,
        rewind      : true,
        pagination  : false,
        arrows    : false,
        isNavigation: true,
        autoScroll  : {
            speed: 0.3,
        }
        // breakpoints : {
        //     600: {
        //         fixedWidth : 60,
        //         fixedHeight: 44,
        //     },
        // },
    } );

    thumbnails.mount({AutoScroll});

}

export default wasSliders;