import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import mobileNav from './modules/mobile-nav.js';
import partnersSliders from "./modules/partners-sliders";
import animationsSections from "./modules/animation-section";
import showHideHeader from "./modules/show-hide-header";
import initModal from "./modules/modals-form";
import initAccordion from "./modules/accordion";
import showMoreSpeakers from "./modules/speakers";
import triggerCounter from "./modules/counter";
import customTabs from "./modules/tabs";
import tabsSlider from "./modules/tabs-slider";
import initAccordionsMeetups from "./modules/accordion-meetup";
import disMobileSlider from "./modules/dis-mobile-slider";
import disMobileOpenItem from "./modules/dis-mobile-items";
import wasMobileSlider from "./modules/was-mobile-slider";
import loftMobileSlider from "./modules/loft-mobile-slider";

document.addEventListener('DOMContentLoaded', ()=> {

    mobileNav();
    triggerCounter();
    disMobileSlider();
    disMobileOpenItem();
    customTabs();
    tabsSlider();
    // showHideHeader();
    partnersSliders();
    wasMobileSlider();
    loftMobileSlider();
    animationsSections();
    initModal();
    initAccordion();
    initAccordionsMeetups();
    showMoreSpeakers();
    Fancybox.bind('[data-fancybox]');

})
// import isAvifWebp from 'avif-webp-checker';
// isAvifWebp({ mode: 'webp' });
