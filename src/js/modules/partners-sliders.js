import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';
import '@splidejs/splide/css';


function partnersSliders() {

    const partnersTrue = document.querySelector('.js-partners');

    if(partnersTrue) {

        const clientsSliders = document.querySelectorAll('.js-slider-partners');
        const buildClientsSlider = clientElem => {
            return new Splide(`#${clientElem.id}`, {
                fixedHeight: 100,
                type   : 'loop',
                height: 'auto',
                drag   : 'free',
                perPage: 5,
                trimSpace: false,
                autoplay: false,
                arrows: false,
                focus: 'center',
                gap: '10px',
                pagination: false,
                autoScroll: {
                    // speed: 0.5,
                    pauseOnHover: false,
                },
                breakpoints : {
                    768: {
                        perPage: 2,
                        fixedHeight: 80,
                    },
                },
            })
        }

        clientsSliders.forEach(slider => buildClientsSlider(slider).mount({AutoScroll}));

    }

}

export default partnersSliders;