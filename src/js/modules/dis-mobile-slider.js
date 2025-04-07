import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

function disMobileSlider() {

    const disMobileSlider = new Splide( '.js-dis-slider', {
        type   : 'slider',
        height: 'auto',
        perPage: 3,
        autoWidth: true,
        perMove: 1,
        focus: 0,
        trimSpace: false,
        autoplay: false,
        arrows: false,
        pagination: false,
        gap: 20,
        destroy: true,
        breakpoints: {
            1024: {
                destroy: false,
            },
            768: {
                autoWidth: false,
                fixedWidth: 260,
                height: 318,
                perPage: 'auto',
                gap: 10,
            },
        },
    } );
    disMobileSlider.mount();

}

export default disMobileSlider;