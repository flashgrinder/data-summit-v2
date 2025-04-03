function showMoreSpeakers() {

    const button = document.querySelector('.js-show-more-speakers');

    const hiddenItems = Array.from(document.querySelectorAll('.js-speaker-item'));
    let isHidden = true;

    button.addEventListener('click', () => {
        button.textContent = isHidden
            ? 'Скрыть спикеров'
            : 'Все спикеры';

        button.classList.toggle('is-open');

        isHidden = !isHidden;

        hiddenItems.forEach((item, i) => {
            if (i > 8) item.classList.toggle('is-hidden')
        });
    });

}

export default showMoreSpeakers;