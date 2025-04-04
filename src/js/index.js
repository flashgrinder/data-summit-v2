import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import mobileNav from './modules/mobile-nav.js';
import partnersSliders from "./modules/partners-sliders";
import animationsSections from "./modules/animation-section";
import showHideHeader from "./modules/show-hide-header";
import initModal from "./modules/modals-form";
import initAccordion from "./modules/accordion";
import showMoreSpeakers from "./modules/speakers";

document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    showHideHeader();
    partnersSliders();
    animationsSections();
    initModal();
    initAccordion();
    showMoreSpeakers();
    Fancybox.bind('[data-fancybox]');

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
