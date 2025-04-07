<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <? wp_head(); ?>
</head>

<body class="page bg--white">

<header class="header js-header">
    <div class="header__body container">
        <div class="header__inner d-flex flex-align-center flex-justify-sb">
            <a href="./" class="header__logo">
                <img src="<?php echo STANDART_DIR; ?>img/logo.png" alt="">
            </a>
            <nav class="header__menu mobile-nav menu">
                <ul class="header__menu-list menu__list">
                    <li class="menu__item tn-atom">
                        <a class="menu__link js-anchor-link" href="#speakers">Спикеры</a>
                        <span class="hover-accentuation-text"></span>
                    </li>
                    <li class="menu__item tn-atom">
                        <a class="menu__link js-anchor-link" href="#program">Программа</a>
                        <span class="hover-accentuation-text"></span>
                    </li>
                    <li class="menu__item tn-atom">
                        <a class="menu__link js-anchor-link" href="#themes">Темы</a>
                        <span class="hover-accentuation-text"></span>
                    </li>
                </ul>
            </nav>
            <div class="header__actions">
                <a href="javascript:;" class="button button--primary" data-hystmodal="#feedback">
                    Регистрация
                </a>
            </div>
            <button class="mobile-nav-btn burger js-mobile-nav-burger">
                <div class="nav-icon burger__icon"></div>
            </button>
        </div>
    </div>
</header>
<main>