import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

function wasSliders() {

    const thumbnails = new Splide( '.js-was-slider-mini', {
        type        : 'loop',
        height      : 'auto',
        perPage     : 3.5,
        gap         : 24,
        rewind      : true,
        pagination  : false,
        arrows    : false,
        isNavigation: true,
        autoScroll  : {
            speed: 0.3,
        },
        breakpoints : {
            768: {
                perPage: 1,
                gap: 16,
            },
        },
    } );

    thumbnails.mount({AutoScroll});

}

export default wasSliders;