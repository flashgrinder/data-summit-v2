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
                    оффлайн и онлайн
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
                        <img src="<?php echo STANDART_DIR; ?>img/dis/card-1.svg" alt="" class="dis__card-img">
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
                        <img src="<?php echo STANDART_DIR; ?>img/dis/card-2.png" alt="" class="dis__card-img">
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
                        <img src="<?php echo STANDART_DIR; ?>img/dis/card-3.png" alt="" class="dis__card-img">
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
                        <img src="<?php echo STANDART_DIR; ?>img/dis/card-4.svg" alt="" class="dis__card-img">
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
                            Павел Лихницкий
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
                            Олег Гиацинтов
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Технический директор DIS Group
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/kulik.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/dis.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Александр Кулик
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Директор практики Digital & Data Transformation DIS Group
                        </div>
                    </div>
                </div>
                <div class="speakers__item">
                    <div class="speakers__item-pic">
                        <picture>
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/hasanov.jpeg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/dis.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Василий Хасанов
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Заместитель технического директора, DIS Group
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
                            Александр Чулок
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
                            <img src="<?php echo STANDART_DIR; ?>img/speakers/chulok.jpg" alt="">
                        </picture>
                    </div>
                    <div class="speakers__item-logo d-flex flex-justify-center flex-align-center">
                        <img src="<?php echo STANDART_DIR; ?>img/speakers/hse.png" alt="" class="speakers__item-logo-img">
                    </div>
                    <div class="speakers__item-info">
                        <h3 class="speakers__item-name text text--medium text--primary text--w-semibold">
                            Александр Чулок
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
                            Сергей Иванов
                        </h3>
                        <div class="speakers__item-position text text--small text--primary text--w-medium">
                            Ренессанс Страхование
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
                <div class="tracks__onof d-flex d-flex-column">
                <span class="tracks__offline title title--uppercase title--w-semibold">
                    Оффлайн
                </span>
                    <span class="tracks__online title title--uppercase title--w-semibold">
                    Онлайн
                </span>
                </div>
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
                <div class="tracks__item">
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
                </div>
                <div class="tracks__item">
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
                </div>
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
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Открытие саммита
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__subtitle text text--normal text--orange text--w-regular text--uppercase">
                        Пленарная сессия
                    </div>
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                            10:00 — 10:10
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
                                        Павел Лихницкий,
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Генеральный директор DIS Group
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="<?php echo STANDART_DIR; ?>img/decor/20-let.svg" alt="" class="program__tr-decor">
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                            10:30 - 10:50
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Экосистема, платформа и экспертиза для создания data-центричной компании
                            </div>
                            <div class="program__info-text text text--large text--brown text--w-medium">
                                Путь к эффективному управлению данными
                                Будущее управления данными: тренды и Lakehouse как новая парадигма
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/giacintov.png" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Гиацинтов
                                        Олег
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Технический директор DIS Group
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--gen">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                            10:50 — 11:10
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Выступление генерального спонсора
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
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
                                        Чулок Александр, доктор экономических наук, доцент.
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Директор центра научно-технологического прогнозирования, Институт статистических исследований и экономики знаний НИУ ВШЭ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__subtitle text text--normal text--orange text--w-regular text--uppercase">
                        Панельная дискуссия
                    </div>
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
                            11:40 — 12:30
                        </div>
                        <div class="program__info">
                            <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                Практический опыт и приоритеты: культура в управлении данными, понимание ценности данных, способы нарастить эффективность компании
                            </div>
                            <div class="program__speakers">
                                <div class="program__speaker">
                                    <div class="program__speaker-photo">
                                        <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                    </div>
                                    <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                        Модерато: Александр Левашов
                                    </div>
                                    <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                        Главный редактор TAdviser
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__tr program__tr--full">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--orange title--w-semibold title--uppercase">
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

                <div class="program__grid-tr">
                    <div class="program__tr program__tr--title">
                        <div class="program__tr-inner d-flex">
                            <div class="program__title title title--pre-large title--blue title--w-semibold title--uppercase">
                                Технологическая сессия (Зал ROCKEFELLER)
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--title">
                        <div class="program__tr-inner d-flex">
                            <div class="program__title title title--pre-large title--mint title--w-semibold title--uppercase">
                                Бизнес сессия (Зал RATUSHA)
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__subtitle text text--normal text--mint text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                13:30 — 14:00
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Готовность компаний к дата-центричному подходу
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/kulik.jpg" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: Александр Кулик
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Директор практики Digital & Data Transformation DIS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__subtitle text text--normal text--blue text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                13:30 - 14:00
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
                                            Модератор: Гиацинтов
                                            Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Технический директор DIS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__grid-tr">
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                14:00 — 14:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Data Lakehouse - перспективное поколение решений для хранения и использования данных.
                                    Презентация Lakehouse Селена
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                14:00 — 14:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Data-driven в контексте трендов
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Дмитрий Трофимов
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Управляющий цифровой трансформации СберПро
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
                            14:30 — 14:45
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Перерыв
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__subtitle text text--normal text--mint text--w-regular text--uppercase">
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
                                            Модератор: Гиацинтов Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Технический директор DIS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__subtitle text text--normal text--mint text--w-regular text--uppercase">
                            Панельная дискуссия
                        </div>
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                14:45 — 15:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Роль данных в повышении прозрачности и формировании системы ключевых показателей для увеличения производительности бизнеса
                                    Панельная дискуссия
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: Александр Тарасов
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
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                16:00 — 16:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Репликация - от миграции до непрерывной передачи данных в гетерогенных средах
                                    ДатаФлот
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                16:00 — 16:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Стратегия и будущее ИИ в управлении данными. Деконструкция ИИ: от идей  Алана Тьюринга до сингулярности - технологической "чёрной дыры"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__grid-tr">
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                16:30 — 17:00
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    ИИ: практическое использование инструментов
                                    <br>
                                    ИИ в управлении данными
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
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
                                            Иванов Сергей
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                           Управляющий директор по корпоративной архитектуре и управлению данными департамента информационных технологий и стратегических инициатив, "Ренессанс Страхование"
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
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                17:15 — 17:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Data Governance и Маскирование. Выявление критичных данных для дальнейшей защиты: профилирование, разметка данных (ссылка на DG), передача информации в Маскирование.
                                    ИИ в маскировании данных
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                17:15 — 17:45
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Взгляд с точки зрения CDO: показатели эффективности в управлении данными, композитная архитектура, "цифровые двойники" компании, импортозамещение и ИИ. С чего начать?
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/team-avatar.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Модератор: Сергей Евтушенко
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            DIS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program__grid-tr">
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                17:45 — 18:15
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Интеграционные процессы между бизнес-системами и технологическими платформами
                                    ETL-система ФормИТ + DQ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                17:45 — 18:15
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Финализируем тему, чтобы она была максимально полезной
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__grid-tr">
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--blue title--w-semibold title--uppercase">
                                18:15 — 18:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Итоговые заметки технического трека - выводы и инсайты
                                </div>
                                <div class="program__speakers">
                                    <div class="program__speaker">
                                        <div class="program__speaker-photo">
                                            <img src="<?php echo STANDART_DIR; ?>img/speakers/giacintov.png" alt="" class="program__speaker-img">
                                        </div>
                                        <div class="program__speaker-name text text--medium text--primary text--w-semibold">
                                            Гиацинтов
                                            Олег
                                        </div>
                                        <div class="program__speaker-pos text text--normal text--brown text--w-medium">
                                            Технический директор DIS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="program__tr program__tr--elem-grid">
                        <div class="program__tr-inner d-flex d-flex-column">
                            <div class="program__time title title--pre-large title--mint title--w-semibold title--uppercase">
                                18:15 — 18:30
                            </div>
                            <div class="program__info">
                                <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                                    Готовим актуальный контент – скоро анонс
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="program__tr">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            18:30 - 19:00
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Фуршет
                        </div>
                    </div>
                </div>

                <div class="program__tr program__tr--end">
                    <div class="program__tr-inner d-flex">
                        <div class="program__time title title--pre-large title--primary title--w-semibold title--uppercase">
                            19:00
                        </div>
                        <div class="program__title title title--pre-large title--primary title--w-semibold title--uppercase">
                            Вечерняя часть
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