function disMobileOpenItem() {

    const items = document.querySelectorAll('.js-dis-item');
    const itemButtonOpen = document.querySelectorAll('.js-dis-item-button-open');
    const itemButtonClose = document.querySelectorAll('.js-dis-item-button-close');

    itemButtonOpen.forEach((button, index)=> {

        button.addEventListener('click', () => {
            items[index].classList.add('is-open');
        })

    })

    itemButtonClose.forEach((button, index)=> {

        button.addEventListener('click', () => {
            items[index].classList.remove('is-open');
        })

    })

}

export default disMobileOpenItem;