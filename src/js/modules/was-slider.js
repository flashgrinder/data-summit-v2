import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

function wasSliders() {

    const main = new Splide( '.js-was-slider-big', {
        type      : 'fade',
        height    : 293,
        rewind    : true,
        pagination: false,
        arrows    : false,
    } );

    const thumbnails = new Splide( '.js-was-slider-mini', {
        // fixedWidth  : 100,
        // fixedHeight : 60,
        height      : 186,
        perPage     : 3.5,
        gap         : 24,
        rewind      : true,
        pagination  : false,
        arrows    : false,
        isNavigation: true,
        // breakpoints : {
        //     600: {
        //         fixedWidth : 60,
        //         fixedHeight: 44,
        //     },
        // },
    } );

    main.sync( thumbnails );
    main.mount();
    thumbnails.mount();

}

export default wasSliders;