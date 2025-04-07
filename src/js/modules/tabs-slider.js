import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

function tabsSlider() {

    const tabsSlider = new Splide( '.js-tabs-slider', {
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
                fixedWidth: 244,
                perPage: 'auto',
                gap: 10,
            },
        },
    } );
    tabsSlider.mount();

}

export default tabsSlider;