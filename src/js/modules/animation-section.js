import { gsap } from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);
function animationsSections() {

    gsap.utils.toArray(".panel").forEach((panel, i) => {
        ScrollTrigger.create({
            trigger: panel,
            start: "top bottom-=2",
            end: () => "+=" + (window.innerHeight * 2 - 4),
        });
    });

}

export default animationsSections;