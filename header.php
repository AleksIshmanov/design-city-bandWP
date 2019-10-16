<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cityband
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <head>
        <title>About</title>
        <!--    <link rel="shortcut icon" type="image/x-icon" href="images/1.png" />-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri()?>/assets/css/mdb.min.css" rel="stylesheet">

        <!--   Fonts     -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/font/fonts.css" type="text/css" charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">

        <!--  Owl carousel  -->
<!--        <link rel="stylesheet" href="--><?php //echo get_template_directory_uri()?><!--/assets/css/owl.carousel.min.css">-->
<!--        <link rel="stylesheet" href="--><?php //echo get_template_directory_uri()?><!--/assets/css/owl.theme.default.min.css">-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/animate.css">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'cityband' ); ?><!--</a>-->

    <header>
	<div id="masthead" class="site-header">

        <div>
            <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top bg-light px-5" style="position: fixed; width: 100vw;">
                <a class="navbar-brand wow rotateIn" href="<?= get_site_url() ?>"><img src="<?= get_template_directory_uri()?>/assets/images/logo.svg" height="50" width="50" alt="logo"></a>
                <button class="navbar-toggler w-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>

                <?php

                    $args = array(
                        'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                        // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                        'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                        'container_class' => 'collapse navbar-collapse',              // (string) class контейнера (div тега)
                        'container_id'    => 'navbarTogglerDemo02',              // (string) id контейнера (div тега)
                        'menu_class'      => 'navbar-nav mr-auto mt-2 mt-lg-0',          // (string) class самого меню (ul тега)
                        'menu_id'         => ' ',              // (string) id самого меню (ul тега)

                        'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                        'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                        'before'          => '',              // (string) Текст перед <a> каждой ссылки
                        'after'           => '',              // (string) Текст после </a> каждой ссылки

                        'depth'           => 2,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                        'walker'          => '',             // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                        'theme_location'  => 'top'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
                     );
                    wp_nav_menu($args);
                ?>

                <button class="btn btn-primary my-2 my-sm-0 Register-new-account coolis overflow-hidden d-md-inline d-lg-inline d-xl-inline d-sm-none d-xs-none d-none" type="submit"><span>+7 (905) 585-28-29</span></button>


                <!--                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">-->
<!---->
<!---->
<!--                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="./index.html">Главная</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="./index-2.html">О группе</a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="./index-3.html">Медиа</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item dropdown">-->
<!--                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                                Услуги-->
<!--                            </a>-->
<!--                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                                <a class="dropdown-item" href="#">Услуга</a>-->
<!--                                <a class="dropdown-item" href="#">Услуга</a>-->
<!--                                <a class="dropdown-item" href="#">Услуга</a>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="./index-5.html">Репертуар</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" href="../new-project/index-6.html" tabindex="-1" aria-disabled="true">Организаторам</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!---->
<!--                </div>-->
            </nav>
    </div>


	</header><!-- #masthead -->

	<div id="content" class="site-content">
