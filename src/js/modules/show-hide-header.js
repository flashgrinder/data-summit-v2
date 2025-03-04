import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
function showHideHeader() {

    const showAnim = gsap.from('.js-header', {
        yPercent: -100,
        paused: true,
        duration: 0.2
    }).progress(1);

    ScrollTrigger.create({
        start: "top top",
        end: "max",
        // markers: true,
        onUpdate: (self) => {
            self.direction === -1 ? showAnim.play() : showAnim.reverse()
        }
    });

}

export default showHideHeader;