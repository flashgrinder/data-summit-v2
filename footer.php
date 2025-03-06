</main>

<footer class="footer js-reveal gs-reveal">
    <div class="footer__body container">
        <div class="footer__columns d-flex flex-justify-sb">
            <div class="footer__col">
                <div class="footer__title text text--normal text--primary text--w-regular text--uppercase">
                    О DIS Group
                </div>
                <div class="footer__excerpt text text--normal text--primary text--w-medium">
                    Решения по управлению данными, бизнес-аналитике, защите информации и управлению знаниями.
                    <br>
                    <br>
                    Мы упрощаем работу с данными и информацией, предоставляя новые возможности для роста бизнеса.
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__title text text--normal text--primary text--w-regular text--uppercase">
                    Мы в соц сетях
                </div>
                <div class="footer__socials d-flex flex-align-center">
                    <a href="https://t.me/dis_group_news" class="footer__social">
                        <svg width="32" height="32">
                            <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#tg"></use>
                        </svg>
                    </a>
                    <a href="https://vk.com/disgroup1" class="footer__social">
                        <svg width="28" height="28">
                            <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#vk"></use>
                        </svg>
                    </a>
                    <a href="https://rutube.ru/channel/38442777/" class="footer__social">
                        <svg width="37" height="32">
                            <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#rutube"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__title text text--normal text--primary text--w-regular text--uppercase">
                    Наши контакты
                </div>
                <div class="footer__contacts d-flex d-flex-column">
                    <a href="tel:+7 495 645-0201"
                       class="footer__contact text text--normal text--primary text--w-medium d-flex flex-align-center">
                        <svg width="20" height="20">
                            <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#phone"></use>
                        </svg>
                        +7 495 645-0201
                    </a>
                    <a href="mailto:forum@dis-group.ru"
                       class="footer__contact text text--normal text--primary text--w-medium d-flex flex-align-center">
                        <svg width="20" height="20">
                            <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#mail"></use>
                        </svg>
                        forum@dis-group.ru
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Модалка -->
<div class="modal modal--feedback hystmodal" id="feedback" aria-hidden="true">
    <div class="modal__wrap hystmodal__wrap">
        <div class="modal__body hystmodal__window" role="dialog" aria-modal="true">
            <button data-hystclose class="modal__close hystmodal__close">Close</button>
            <script type="text/javascript" async="async" defer="defer" charset="UTF-8" src="https://timepad.ru/js/tpwf/loader/min/loader.js" data-timepad-customized="30874" data-twf2s-event--id="3231087" data-timepad-widget-v2="event_register"></script>
        </div>
    </div>
</div>

<? wp_footer(); ?>
</body>
</html>