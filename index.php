<?php get_header(); ?>

    <section class="main-screen">
        <div class="main-screen__decor"></div>
        <div class="main-screen__body container">
            <div class="main-screen__info">
                <div class="main-screen__top">
                    <div class="main-screen__inner d-flex flex-align-center flex-justify-sb">
                        <h1 class="main-screen__heading title title--extra-huge title--primary title--w-light title--uppercase">
                            DATA SUMMIT 2025
                        </h1>
                        <div class="main-screen__date d-flex d-flex-column flex-align-center flex-justify-center">
                            <div class="main-screen__city text text--medium text--primary text--w-semibold text--uppercase">
                                Москва
                            </div>
                            <div class="main-screen__date-day text text--primary text--w-medium">
                                17
                            </div>
                            <div class="main-screen__date-month text text--medium text--primary text--w-semibold text--uppercase">
                                Апреля
                            </div>
                        </div>
                    </div>
                    <div class="main-screen__subtitle title title--big title--primary title--w-regular title--uppercase">
                        ПУЛЬС ДАННЫХ
                    </div>
                </div>
            </div>
            <div class="main-screen__actions">
                <a href="javascript:;" class="button button--primary" data-hystmodal="#feedback">
                    <span>Регистрация</span>
                    <svg width="36" height="36" class="button__icon">
                        <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#btn-arrow"></use>
                    </svg>
                </a>
                <div class="main-screen__on-off text text--primary text--normal text--w-semibold text--uppercase">
                    офлайн и онлайн
                </div>
            </div>
        </div>
    </section>

    <section class="info">
        <div class="info__body container">
            <div class="info__anchors d-flex flex-align-center flex-justify-center">
                <a href="#program"
                   class="info__anchor text text--medium text--primary text--w-semibold text--uppercase d-flex flex-justify-center flex-align-center">
                    Программа
                    <svg width="36" height="36" class="button__icon">
                        <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-down"></use>
                    </svg>
                </a>
                <a href="#speakers"
                   class="info__anchor  text text--medium text--primary text--w-semibold text--uppercase d-flex flex-justify-center flex-align-center">
                    Спикеры
                    <svg width="36" height="36">
                        <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-down"></use>
                    </svg>
                </a>
            </div>
        </div>
        <div class="info__outer">
            <div class="info__inner container">
                <h3 class="info__title text text--large text--primary text--w-medium text--uppercase">
                    <span class="text text--secondary">Данные – это сердце и кровеносная система</span> IT-архитектуры, питающая бизнес жизненно важными ресурсами.
                </h3>
                <p class="info__description text text--large text--primary text--w-regular">
                    Эффективное управление ими укрепляет иммунитет компании, помогает достигать высоких результатов, обеспечивать лидерство и открывать новые возможности для развития.
                </p>
                <h3 class="info__title text text--large text--secondary text--w-medium text--uppercase">
                    17 апреля приглашаем вас на Дата Саммит «Пульс данных»!
                </h3>
                <p class="info__description text text--large text--primary text--w-regular">
                    Эксперты ведущих компаний и госструктур (к участию приглашены представители Минцифры, Сбербанка, Росатома, Ростеха, Роснефти, Axenix и других крупнейших игроков рынка) — поделятся практическим опытом внедрения решений для управления данными, обсудят ключевые тренды и перспективы.
                </p>
            </div>
        </div>
        <div class="info__wrapper-invite container">
            <div class="info__invite d-flex flex-align-center flex-justify-center">
                <div class="info__invite-arrow d-flex flex-justify-center flex-align-center">
                    <svg width="27" height="34">
                        <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#curved-arrow-right"></use>
                    </svg>
                </div>
                <div class="info__invite-description text text--large text--orange text--w-semibold" data-hystmodal="#feedback">
                    Присоединяйтесь, чтобы почувствовать пульс ваших данных! Участвовать можно как лично, так и онлайн.
                </div>
                <div class="info__invite-arrow d-flex flex-justify-center flex-align-center">
                    <svg width="27" height="34">
                        <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#curved-arrow-left"></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsors">
        <div class="sponsors__body container">
            <div class="sponsors__items d-flex flex-align-center">
                <div class="sponsors__item">
                    <img src="<?php echo STANDART_DIR; ?>img/sponsors/univers.png" alt="" class="sponsors__logo">
                </div>
                <div class="sponsors__item">
                    <img src="<?php echo STANDART_DIR; ?>img/sponsors/selena.png" alt="" class="sponsors__logo">
                </div>
                <div class="sponsors__item">
                    <img src="<?php echo STANDART_DIR; ?>img/sponsors/dataflot.png" alt="" class="sponsors__logo">
                </div>
                <div class="sponsors__item">
                    <img src="<?php echo STANDART_DIR; ?>img/sponsors/data-innovation.png" alt="" class="sponsors__logo">
                </div>
            </div>
        </div>
    </section>

    <section class="dis">
        <div class="dis__body container">
            <div class="dic__sections">
                <div class="dis__section panel">
                    <div class="dis__card">
                        <div class="dis__card-wrap">
                            <div class="dis__card-arrow">
                                <svg width="40" height="40">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-circl-right"></use>
                                </svg>
                            </div>
                            <h3 class="dis__card-title title title--primary title--w-medium title--uppercase">
                                DIS Group – 20 лет: взгляд 2.0!
                            </h3>
                            <div class="dis__card-excerpt text text--medium text--primary text--w-medium">
                                Погрузимся в историю рынка данных, вспомним самые сложные и яркие кейсы, проанализируем накопленный опыт и поделимся ценными инсайтами.
                            </div>
                        </div>
                        <picture>
                            <source media="(max-width: 768px )" srcset="<?php echo STANDART_DIR; ?>img/dis/card-mobile-1.svg">
                            <img src="<?php echo STANDART_DIR; ?>img/dis/card-1.svg" alt="" class="dis__card-img">
                        </picture>
                    </div>
                </div>
                <div class="dis__section panel">
                    <div class="dis__card">
                        <div class="dis__card-wrap">
                            <div class="dis__card-arrow">
                                <svg width="40" height="40">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-circl-right"></use>
                                </svg>
                            </div>
                            <h3 class="dis__card-title title title--primary title--w-medium title--uppercase">
                                Данные + ИИ: новый уровень
                            </h3>
                            <div class="dis__card-excerpt text text--medium text--primary text--w-medium">
                                Покажем, как искусственный интеллект уже встроен в решения по управлению данными, какие задачи он автоматизирует и как максимально эффективно его использовать.
                            </div>
                        </div>
                        <picture>
                            <source media="(max-width: 768px )" srcset="<?php echo STANDART_DIR; ?>img/dis/card-mobile-2.png">
                            <img src="<?php echo STANDART_DIR; ?>img/dis/card-2.png" alt="" class="dis__card-img">
                        </picture>
                    </div>
                </div>
                <div class="dis__section panel">
                    <div class="dis__card">
                        <div class="dis__card-wrap">
                            <div class="dis__card-arrow">
                                <svg width="40" height="40">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-circl-right"></use>
                                </svg>
                            </div>
                            <h3 class="dis__card-title title title--primary title--w-medium title--uppercase">
                                Премьера: Селена – высокопроизводительная Lakehouse платформа
                            </h3>
                            <div class="dis__card-excerpt text text--medium text--primary text--w-medium">
                                Впервые представим Селену – платформу для аналитики в реальном времени. Презентацию проведет RnD-инженер, готовый ответить на любые вопросы.
                            </div>
                        </div>
                        <picture>
                            <source media="(max-width: 768px )" srcset="<?php echo STANDART_DIR; ?>img/dis/card-mobile-3.png">
                            <img src="<?php echo STANDART_DIR; ?>img/dis/card-3.png" alt="" class="dis__card-img">
                        </picture>
                    </div>
                </div>
                <div class="dis__section panel">
                    <div class="dis__card">
                        <div class="dis__card-wrap">
                            <div class="dis__card-arrow">
                                <svg width="40" height="40">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-circl-right"></use>
                                </svg>
                            </div>
                            <h3 class="dis__card-title title title--primary title--w-medium title--uppercase">
                                Нетворкинг с лидерами индустрии
                            </h3>
                            <div class="dis__card-excerpt text text--medium text--primary text--w-medium">
                                Уникальная возможность пообщаться с CDO, CDTO, директорами по данным и экспертами крупнейших компаний, обменяться опытом и наладить полезные связи.
                            </div>
                        </div>
                        <picture>
                            <source media="(max-width: 768px )" srcset="<?php echo STANDART_DIR; ?>img/dis/card-mobile-4.png">
                            <img src="<?php echo STANDART_DIR; ?>img/dis/card-4.png" alt="" class="dis__card-img">
                        </picture>
                    </div>
                </div>
                <div class="dis__section panel" id="last-panel">
                    <div class="dis__card">
                        <div class="dis__card-wrap">
                            <div class="dis__card-arrow">
                                <svg width="40" height="40">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#arrow-circl-right"></use>
                                </svg>
                            </div>
                            <h3 class="dis__card-title title title--primary title--w-medium title--uppercase">
                                Демо-зона: тестируйте технологии в реальном времени
                            </h3>
                            <div class="dis__card-excerpt text text--medium text--primary text--w-medium">
                                Испытайте решения своими руками, соберите свою идеальную платформу управления данными и получите консультации экспертов.
                            </div>
                        </div>
                        <img src="<?php echo STANDART_DIR; ?>img/dis/card-5.png" alt="" class="dis__card-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="speakers" id="speakers">
        <div class="speakers__body container">
            <h3 class="speakers__heading title title--primary title--large title--w-regular title--uppercase text-center">
                Спикеры
            </h3>
            <div class="speakers__items">
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/pavel.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/dis.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Лихницкий Павел
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Генеральный директор DIS Group
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/giacintov.png" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/dis.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Гиацинтов Олег
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Технический директор DIS Group
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/chulok.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/hse.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Чулок Александр
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Доктор экономических наук, доцент. Директор центра научно-технологического прогнозирования,
                            Институт статистических исследований и экономики знаний НИУ ВШЭ
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/ivanov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/renesans.svg" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Ренессанс Страхование. <br> Иванов Сергей
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Управляющий директор по корпоративной архитектуре и управлению данными
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/rabinovich.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/sber.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Сбер. Рабинович Борис
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Старший управляющий директор - директор Департамента управления данными (SberData)
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/goncharov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/uralsib.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Уралсиб. Гончаров Игорь
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Руководитель Службы управления данными
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/selivanov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/sber.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Сбер. Селиванов Юрий
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Управляющий директор
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/gromov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/vtb.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            ВТБ. Громов Владимир
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Заместитель руководителя департамента технологического развития общебанковских систем
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/pivovarova.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/gazprom.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            ПАО «Газпром нефть». Пивоварова Арина
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Руководитель практики развития и поддержки систем каталогизации и описания данных
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/trofimov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/sber.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Сбер. Трофимов Дмитрий
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Управляющий Цифровой трансформации
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/savickii.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/rjd.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Российские железные дороги. Савицкий Артём
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Начальник управления информационного обеспечения
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/chepkasov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/gazprom.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            ПАО «Газпром нефть». Чепкасов Александр
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Начальник отдела цифровой платформы
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/molchanov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/magnit.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Магнит. Молчанов Олег
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Руководитель направления по метаданным и качеству данных.
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/kamenski.jpeg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/ydata.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Юниверс Дата. Каменский Влад
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Генеральный директор
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/levashov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/tadviser.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            TAdviser. Левашов Александр
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Главный редактор
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/tihonova.jpeg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/rbk.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Телеканал РБК. Элина Тихонова
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">

                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/klepikov.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/mts.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            МТС Банк <br> Клепиков Алексей
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Вице-президент
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/abdu.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/mkb.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            МКБ. <br> Абдурахманов Ринат
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Директор департамента управления данными
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/agroeko.svg" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Агроэко. <br> Меркулов Сергей
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                             ИТ-директор
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/evtushenko.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/dis.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            DIS Group <br> Евтушенко Сергей
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Заместитель директора департамента консалтинга
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/cinchenko.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/gazprom.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            ПАО «Газпром нефть». <br> Цынченко  Яна
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Аналитик систем
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tracks">
        <div class="tracks__body container">
            <div class="tracks__top d-flex flex-align-center">
                <h3 class="tracks__heading title title--uppercase title--w-semibold">
                    3 трека
                </h3>
                <div class="tracks__arrow d-flex flex-justify-center flex-align-center">
                    <svg width="32" height="26">
                        <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#curved-arrow-down"></use>
                    </svg>
                </div>
<!--                <div class="tracks__onof d-flex d-flex-column">-->
<!--                    <span class="tracks__offline title title--uppercase title--w-semibold">-->
<!--                        Оффлайн-->
<!--                    </span>-->
<!--                        <span class="tracks__online title title--uppercase title--w-semibold">-->
<!--                        Онлайн-->
<!--                    </span>-->
<!--                </div>-->
            </div>
            <div class="tracks__grid">
                <div class="tracks__item">
                    <div class="tracks__item-inner">
                        <h3 class="tracks__item-title title title--pre-big title--primary title--w-medium title--uppercase">
                            Пленарная сессия
                        </h3>
                        <p class="tracks__item-excerpt text text--medium text--primary text--w-semibold">
                            Культура управления данными, ценность данных, регулирование в области управления данными и наращивание эффективности от использования данных компаний.
                        </p>
                    </div>
                </div>
                <a href="#tech" class="tracks__item">
                    <div class="tracks__item-pic">
                        <img src="<?php echo STANDART_DIR; ?>img/decor/track-decor-item-two.png" alt="">
                        <img class="tracks__item-decor" src="<?php echo STANDART_DIR; ?>img/decor/tracks-decor-ellipse.png" alt="">
                    </div>
                    <div class="tracks__item-info">
                        <h3 class="tracks__item-title title title--pre-big title--primary title--w-medium title--uppercase">
                            Технологическая сессия
                        </h3>
                        <p class="tracks__item-excerpt text text--medium text--primary text--w-semibold">
                            Современные инструменты управления данными: от Data Warehouse и Data Lakehouse до Data Governance. Практики по профилированию, очистке и трансформации данных.
                        </p>
                    </div>
                </a>
                <a href="#business" class="tracks__item">
                    <div class="tracks__item-pic">
                        <img src="<?php echo STANDART_DIR; ?>img/decor/track-decor-item-tree.png" alt="">
                        <img class="tracks__item-decor" src="<?php echo STANDART_DIR; ?>img/decor/tracks-decor-ellipse.png" alt="">
                    </div>
                    <div class="tracks__item-info">
                        <h3 class="tracks__item-title title title--pre-big title--primary title--w-medium title--uppercase">
                            Бизнес- <br> сессия
                        </h3>
                        <p class="tracks__item-excerpt text text--medium text--primary text--w-semibold">
                            Стоимость и ценность данных, риски, гигиена работы с ними. Дискуссии о роли CDO, цифровом следе, управлении активами и ключевых показателях.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="program" id="program">
        <div class="program__top container-full">
            <h3 class="program__heading title title--primary title--large title--w-regular title--uppercase text-center">
                Программа
            </h3>
        </div>
        <div class="program__body container">
            <div class="program__table">
                <div class="program__tr program__tr--start">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            10:00 — 10:10
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Открытие саммита
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/tihonova.jpeg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Ведущая: <br>
                                        Телеканал РБК. <br> Элина Тихонова
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__subtitle text text--normal text--mint text--w-regular text--uppercase">
                        Пленарная сессия
                    </div>
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                            10:10 — 10:30
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                DIS Group: Путь в 20 лет.
                            </div>
                            <div class="program__info-text text text--large text--brown text--w-medium">
                                От дистрибутора Informatica до игрока платформенных решений и методологий в управлении данными
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/pavel.jpg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        DIS Group. <br>
                                        Лихницкий Павел
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Генеральный директор
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo STANDART_DIR; ?>img/decor/20-let.svg" alt="" class="program__tr-decor">
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                            10:30 - 10:50
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Экосистема, платформа и экспертиза для создания data-центричной компании
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/giacintov.png" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        DIS Group. <br>
                                        Гиацинтов Олег
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Технический директор
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--gen">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                            10:50 — 11:10
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Выступление генерального спонсора
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                            11:10 — 11:40
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Глобальные тренды, формирующие Человека 2.0: взгляд 360 градусов сквозь призму мировых форсайтов
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/chulok.jpg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Чулок Александр
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Доктор экономических наук, доцент.
                                        Директор центра научно-технологического прогнозирования, Институт статистических исследований и экономики знаний НИУ ВШЭ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__subtitle text text--normal text--mint text--w-regular text--uppercase">
                        Панельная дискуссия
                    </div>
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                            11:40 — 12:30
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Как управление данными и культура работы с ними повышают эффективность компании
                            </div>
                            <div class="program__info-text text text--large text--brown text--w-medium">
                                К участию приглашены представители компаний: Сбер, DIS Group, Федеральное Казначейство РФ, Росатом, Ростех, Лукойл
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/levashov.jpg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Модератор: <br> TAdviser. <br> Левашов Александр
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Главный редактор
                                    </div>
                                </div>
                            </div>
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase" style="margin-top: 30px">
                                Участники:
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/pavel.jpg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        DIS Group. <br> Лихницкий Павел
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Генеральный директор
                                    </div>
                                </div>
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/rabinovich.jpg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Сбер. <br> Рабинович Борис
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                         Старший управляющий директор. Директор Департамента управления данными (SberData)
                                    </div>
                                </div>
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/gromov.jpg" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        ВТБ. <br> Громов Владимир
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Заместитель руководителя департамента технологического развития общебанковских систем
                                    </div>
                                </div>
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Юникон Бизнес Солюшнс. <br> Якименко Андрей
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Генеральный директор
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                            12:30-12:40
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Драйверы data-индустрии: награждение компаний за выдающиеся проекты
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__tr">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            12:40 — 13:30
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Обед (Зал BACKYARD)
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr program__tr--desktop">
                    <div class="program__tr program__tr--title" id="tech">
                        <div class="program__tr-inner d-flex">
                            <div class="program__title title title--pre-large title--blue title--w-semibold title--uppercase">
                                Технологическая сессия <br> (Зал ROCKEFELLER)
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--title" id="business">
                        <div class="program__tr-inner d-flex">
                            <div class="program__title title title--pre-large title--orange title--w-semibold title--uppercase">
                                Бизнес-сессия <br> (Зал RATUSHA)
                            </div>
                        </div>
                    </div>
                    <!-- Технологическая -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__subtitle text text--normal text--primary text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                13:30 — 14:00
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Современная платформа и экосистема в управлении данными: стандарты и требования к платформам, направление развития платформ
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/giacintov.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: <br> DIS Group. <br> Гиацинтов Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Технический директор
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__subtitle text text--normal text--primary text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                13:30 - 14:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Дата-центричные компании: роль данных в повышении прозрачности и формировании системы ключевых показателей для увеличения
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: <br> Тарасов Александр
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Ст.директор Блока бизнеса Юникон Бизнес Солюшнс
                                        </div>
                                    </div>
                                </div>
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase" style="margin-top: 30px">
                                    Участники:
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/trofimov.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                             Сбер. <br> Трофимов Дмитрий
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Управляющий Цифровой трансформации
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Сбер Тех. <br> Кудрявцев Валерий
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/goncharov.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Уралсиб. <br> Гончаров Игорь
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Руководитель службы управления данными
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            ОТП Банк <br>
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Шевцов Николай
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Технологическая -->
                <div class="program__tr program__tr--full">
                    <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                        Зал ROCKEFELLER
                    </div>
                    <div class="program__tr-inner d-flex d-flex-column">
                        <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                            14:00 — 14:30
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Тема и спикер уточняются
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__tr">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            14:30 — 14:45
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Перерыв
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <!-- Технологическая -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__subtitle text text--normal text--primary text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                14:45 — 15:15
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    ИИ в данных
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/giacintov.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: <br> DIS Group. <br> Гиацинтов Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Технический директор
                                        </div>
                                    </div>
                                </div>
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase" style="margin-top: 30px">
                                    Участники:
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            СУЭК. <br> Рудаков Дмитрий
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/savickii.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Российские железные дороги. <br> Савицкий Артём
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Начальник управления информационного обеспечения
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            DIS Group. <br> Гашников Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Директор практики искусственного интеллекта и машинного обучения
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Цифрум. <br> Баглей Дмитрий
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес  -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__subtitle text text--normal text--primary text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                14:45 — 15:15
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Эффективность инструментов ИИ в цифровой трансформации
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/klepikov.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: МТС Банк. <br> Клепиков Алексей
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Вице-президент
                                        </div>
                                    </div>
                                </div>
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase" style="margin-top: 30px">
                                    Участники:
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/abdu.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            МКБ. Абдурахманов Ринат
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Директор департамента управления данными
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Агроэко. <br> Меркулов Сергей
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            ИТ-директор
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <!-- Технологическая -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                15:15 - 15:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Тема уточняется
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Сбер. <br> Татьяна Скобелева
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Сбер. <br> Сергей Фёдоров
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес  -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                15:15 — 15:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Каталог данных на базе Plus7 EDM как часть импортонезависимой Дата-платформы
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/chepkasov.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            ПАО «Газпром нефть» <br> Чепкасов  Александр
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Начальник отдела цифровой платформы
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/pivovarova.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            ПАО «Газпром нефть» <br> Пивоварова Арина
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Руководитель практики развития и поддержки систем каталогизации и описания данных
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__tr">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            15:45 — 16:00
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Перерыв
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <!-- Технологическая -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                16:00 - 16:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Использование интеграционного слоя с бизнес-системами для актуализации Каталога данных
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/cinchenko.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            ПАО «Газпром нефть». <br> Цынченко Яна
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Аналитик систем
                                        </div>
                                    </div>
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            DIS Group <br> Тюрина Галина
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Руководитель направления качества данных
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                16:00 — 16:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Как внедрение управления данными изменило Магнит
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/molchanov.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Магнит. <br> Молчанов Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Руководитель направления по метаданным и качеству данных
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <!-- Технологическая -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                16:30 - 17:00
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Тема уточняется
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Россельхозбанк. <br> Колошеин Юрий
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                16:30 — 17:00
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Считаем эффективность данных: затраты – да, а эффекты?
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/ivanov.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Ренессанс Страхование. <br> Иванов Сергей
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Управляющий директор по корпоративной архитектуре и управлению данными
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__tr">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            17:00 — 17:15
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Перерыв
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <!-- Технологическая -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                17:15 — 17:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Референсная архитектура современного предприятия
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            DIS Group. <br> Куртов Дмитрий
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__subtitle text text--normal text--primary text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                17:15 — 17:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    А вы зарабатываете на данных?
                                </div>
                                <div class="program__info-text text text--large text--brown text--w-medium">
                                    К участию приглашены представители компаний: Сберпро, Счетная палата  РФ, ОТП Банк, Северсталь
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/evtushenko.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: <br> DIS Group. <br> Евтушенко Сергей
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Зам.директора департамента консалтинга
                                        </div>
                                    </div>
                                </div>
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase" style="margin-top: 30px">
                                    Участники:
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Сбер. <br> Рудковский Михаил
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <!-- Технологическая  -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--blue text--w-regular text--uppercase">
                            Зал ROCKEFELLER
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                17:45 — 18:15
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Готовим актуальный контент
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Бизнес -->
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__hol text text--normal text--orange text--w-regular text--uppercase">
                            Зал RATUSHA
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                                17:45 — 18:15
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Готовим актуальный контент
                                </div>
                                <div class="program__info-text text text--large text--brown text--w-medium">
                                    Представитель компании Форсайт
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Конец -->
                <div class="program__tr program__tr--end">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            18:15 - 21:00
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Фуршет, вечерняя часть
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="was">
        <div class="was__body">
            <div class="was__top container">
                <div class="was__columns">
                    <div class="was__left-col">
                        <div class="was__info-wrap d-flex">
                            <div class="was__title title title--secondary title--w-semibold title--uppercase">
                                Каким был Дата <br> Саммит в 2024
                            </div>
                            <div class="was__arrows d-flex d-flex-column flex-align-center flex-justify-center">
                                <svg width="32" height="26">
                                    <use href="<?php echo STANDART_DIR; ?>img/svgsprite/sprite.symbol.svg#curved-arrow-down-orange"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="was__description text text--large text--primary text--w-medium">
                            В Дата Саммите 2024 приняли участие эксперты из СИБУРа, Ленты, Axenix, Росатома, Сколково, РКС, Уралсиба, Сбера, МТС Банка и других крупнейших компаний. Обсудили тренды и перспективы развития, поговорили про экономику данных и про то, как подготовить данные к искусственному интеллекту.
                        </div>
                    </div>
                    <div class="was__right-col">
                        <div class="was__video">
                            <iframe width="100%" height="100%" loading="lazy" src="https://rutube.ru/play/embed/549d9a453d4b9f242266c89372678395/?p=Uvnk9Q3jF48qgKlAB9Q5kw" frameBorder="0" allow="clipboard-write; autoplay" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="was__wrap-slider">
                <div class="was__splide splide js-was-slider-mini">
                    <div class="was__splide-track splide__track">
                        <div class="was__splide-list splide__list">
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-1.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-2.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-3.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-4.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-5.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-6.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-7.jpg" alt="">
                            </div>
                            <div class="was__splide-slide splide__slide">
                                <img src="<?php echo STANDART_DIR; ?>img/was/was-8.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partners js-partners" id="partners">
        <div class="partners__body">
            <div class="partners__top container">
                <h3 class="partners__heading title title--primary title--large title--w-regular title--uppercase text-center">
                    Партнёры
                </h3>
            </div>
            <div class="partners__sliders-wrapper">
                <div class="partners__splide splide js-slider-partners" id="slider-1"
                     data-splide='{"autoScroll":{ "speed": 0.3}}'>
                    <div class="partners__splide-track splide__track">
                        <div class="partners__splide-list splide__list">
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/rostelecom.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/ydata.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/tarantool.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/tern.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/pix.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/sberteh.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/korus.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partners__splide splide js-slider-partners" id="slider-2"
                     data-splide='{"autoScroll":{ "speed": -0.3}}'>
                    <div class="partners__splide-track splide__track">
                        <div class="partners__splide-list splide__list">
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/rostelecom.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/ydata.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/tarantool.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/tern.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/pix.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/sberteh.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                            <div class="partners__splide-slide splide__slide">
                                <div class="partners__slide-pic">
                                    <img src="<?php echo STANDART_DIR; ?>img/partners/korus.png" alt="" class="partners__slide-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>