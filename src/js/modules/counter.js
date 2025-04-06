import $ from "jquery";
import {gsap} from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);


function triggerCounter() {

    document.querySelectorAll('.js-trigger-counter').forEach(function(trigger_header) {
        let isTriggered = false;

        gsap.timeline({
            scrollTrigger: {
                trigger: trigger_header,
                start: "top center",
                end: "bottom center",
                scrub: 0.5,
                markers: false,
                onEnter: function() {
                    if (!isTriggered) {
                        $('.js-counter').each(function() {
                            $('.js-counter').addClass('is-counter-view');
                            $(this).prop('Counter', 0).animate({
                                Counter: $(this).text()
                            }, {
                                duration: 2800,
                                easing: 'swing',
                                step: function(now) {
                                    $(this).text(Math.ceil(now));
                                }
                            });
                        });

                        isTriggered = true;
                    }
                },
                onLeave: function() {
                },
                onEnterBack: function() {
                },
                onLeaveBack: function() {
                },
            },
        });
    });

}

export default triggerCounter;