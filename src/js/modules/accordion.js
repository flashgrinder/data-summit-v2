import Accordion from "accordion-js";
import "accordion-js/dist/accordion.min.css";

function initAccordion() {

    const accordion = document.querySelector(".js-accordion");
    const acc = new Accordion(accordion, {
        elementClass: 'js-accordion-item',
        triggerClass: 'js-accordion-trigger',
        panelClass: 'js-accordion-panel',
        showMultiple: true,
        // openOnInit: (el) => {
        //     el.open(0);
        // }
    });

    acc.open(0);

}

export default initAccordion;