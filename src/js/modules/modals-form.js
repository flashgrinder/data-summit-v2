import HystModal from 'hystmodal';

function initModal() {

    const hideHeader = document.querySelector('.js-header');

    let modalsForms = new HystModal({
        linkAttributeName: "data-hystmodal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: true,
        beforeOpen: function(modal){
            hideHeader.style.transform = 'translate(0, -100%)';
        },
        afterClose: function(modal){
            hideHeader.style.transform = 'translate(0, 0)';
        }
    });
        
}
  
export default initModal;