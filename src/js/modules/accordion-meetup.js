import Accordion from "accordion-js";
import "accordion-js/dist/accordion.min.css";

function initAccordionsMeetups() {

    const accordions = Array.from(document.querySelectorAll(".js-session-accordion"));
    new Accordion(accordions, {
        elementClass: 'js-session-accordion-item',
        triggerClass: 'js-session-accordion-trigger',
        panelClass: 'js-session-accordion-panel',
        showMultiple: true,
    });

}

export default initAccordionsMeetups;