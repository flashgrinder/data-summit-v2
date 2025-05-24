</main>

<footer class="footer js-reveal gs-reveal">
    <div class="footer__info info info--footer">
        <div class="info__body container">
            <div class="info__inner">
                <div class="info__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/decor/tor.png" alt="">
                </div>
                <div class="info__plunk">
                    <div class="info__title title title--large title--primary title--w-regular">
                        Станьте партнёром <br> DATA SUMMIT 2025
                    </div>
                    <div class="info__excerpt text text--large text--primary text--w-regular">
                        Чтобы принять участие в Саммите в качестве партнёра, отправьте заявку
                        на <a href="mailto:Forum@data-summit.ru">Forum@data-summit.ru</a> . Мы свяжемся с вами в
                        ближайшее время и ответим на все вопросы.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__body container">
        <div class="footer__columns d-flex flex-justify-sb">
            <div class="footer__col">
                <div class="footer__title title title--small title--primary title--w-regular">
                    О DIS Group
                </div>
                <div class="footer__excerpt text text--small text--primary text--w-regular">
                    Решения по управлению данными, бизнес-аналитике, защите информации и управлению знаниями.
                    <br>
                    <br>
                    Мы упрощаем работу с данными и информацией, предоставляя новые возможности для роста бизнеса.
                </div>
                <div class="footer__copyright text text--small text--primary text--w-regular">
                    © DATA SUMMIT 2025
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__outer-wrap d-flex">
                    <div class="footer__inner-wrap">
                        <div class="footer__title title title--small title--primary title--w-regular">
                            Мы в соц сетях
                        </div>
                        <div class="footer__socials d-flex flex-align-center">
                            <a href="https://t.me/dis_group_news" class="footer__social">
                                <svg width="50" height="50">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#tg"></use>
                                </svg>
                            </a>
                            <a href="https://vk.com/disgroup1" class="footer__social">
                                <svg width="50" height="50">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#vk"></use>
                                </svg>
                            </a>
                            <a href="https://rutube.ru/channel/38442777/" class="footer__social">
                                <svg width="50" height="50">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#rutube"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="footer__inner-wrap">
                        <div class="footer__title title title--small title--primary title--w-regular">
                            Наши контакты
                        </div>
                        <div class="footer__contacts d-flex d-flex-column">
                            <a href="tel:+74956450201"
                               class="footer__contact text text--big text--primary text--w-regular">
                                +7 495 645-0201
                            </a>
                            <a href="mailto:forum@dis-group.ru"
                               class="footer__contact text text--normal text--primary text--w-regular">
                                forum@dis-group.ru
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer__cookies text text--small text--primary text--w-regular">
                    Используем cookies для корректной работы сайта, персонализации пользователей и других целей, предусмотренных Политикой обработки персональных данных. 16+
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Модалка -->
<div class="modal modal--feedback hystmodal" id="feedbackss" aria-hidden="true">
    <div class="modal__wrap hystmodal__wrap">
        <div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="modal__close hystmodal__close">Close</button>
            <script type="text/javascript" async="async" defer="defer" charset="UTF-8" src="https://timepad.ru/js/tpwf/loader/min/loader.js" data-timepad-customized="30874" data-twf2s-event--id="3231087" data-timepad-widget-v2="event_register"></script>
        </div>
    </div>
</div>

<!-- Модалка обратной связи -->
<div class="modal hystmodal" id="feedback" aria-hidden="true">
    <div class="modal__wrap hystmodal__wrap">
        <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
            <div class="modal__close" data-hystclose>
                <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="modal__logo">
                <img src="<?= STANDART_DIR; ?>/img/logo.png" alt=""
                     class="modal__logo-img">
            </div>
            <h3 class="modal__title title title--large title--white title--w-regular text-center">
                Получить запись
            </h3>
            <?= do_shortcode('[contact-form-7 id="e20c03c" title="Получить запись" html_class="modal__form"]'); ?>
            <div class="modal__footer d-flex flex-justify-sb flex-align-center">
                <a href="tel:+74956450201" class="modal__contact">
                    +7 495 645-02-01
                </a>
                <a href="mailto:forum@dis-group.ru" class="modal__contact">
                    forum@dis-group.ru
                </a>
                <a href="https://vk.com/disgroup1" class="modal__contact">
                    VK
                </a>
                <a href="https://t.me/dis_group_news" class="modal__contact">
                    Telegram
                </a>
                <a href="https://rutube.ru/channel/38442777/" class="modal__contact">
                    Rutube
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /. Модалка обратной связи -->

<!-- Success -->
<div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
    <div class="modal__wrap hystmodal__wrap">
        <div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
            <div class="modal__close" data-hystclose>
                <svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="modal__wrapper-success">
                <div class="modal__success-text text text--large text--white text--w-regular">
                    Спасибо, ваша запрос принят!
                    <br>
                    <br>
                    Вышлем вам запись мероприятия в ближайшее.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. Success -->

<? wp_footer(); ?>
</body>
</html>