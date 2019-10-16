<?php
//Файл отвечает за кастомизацию отдельных страниц и шаблонов

use Carbon_Fields\Container;
use Carbon_Fields\Field;

//страница about
Container::make( 'post_meta', 'Текст, отображаемый на странице' )
    ->show_on_template('page-about.php')
    ->add_fields( array(
        Field::make('text', 'main_header', 'Заголовок текста'),
        Field::make( 'complex', 'left_column', 'Текст левой колонки' )
            ->add_fields( 'header', 'Заголовок', array(
                Field::make( 'text', 'column_header', 'Заголовок' ),
            ))
            ->add_fields( 'text', 'Текст', array(
                Field::make( 'textarea', 'column_text', 'Текст' ),
            )),

        Field::make( 'complex', 'right_column', 'Текст правой колонки' )
            ->add_fields( 'header', 'Заголовок', array(
                Field::make( 'text', 'column_header2', 'Заголовок' ),
            ))
            ->add_fields( 'text', 'Текст', array(
                Field::make( 'textarea', 'column_text2', 'Текст' ),
            )),

        Field::make( 'media_gallery', 'media_gallery', __( 'Фото для блока с Instagram' ) )
            ->set_type('image'),
    ));

//шаблоны коммерческих заказов
Container::make( 'post_meta', 'Блоки на странице' )
    ->show_on_template('page-order.php')
    ->add_fields( array(
        Field::make('text', 'top_header', 'Заголовок верхнего текста'),
        Field::make('textarea', 'top_text', 'Текст верхнего раздела'),

        Field::make( 'media_gallery', 'media_gallery', __( 'Видео для блока с видео' ) )
            ->set_type('video'),

        Field::make( 'complex', 'right_column', 'Текст после видео' )
            ->add_fields( 'header', 'Заголовок', array(
                Field::make( 'text', 'column_header2', 'Заголовок' ),
            ))
            ->add_fields( 'text', 'Текст', array(
                Field::make( 'textarea', 'column_text2', 'Текст' ),
            )),
    ));

//страница contacts
Container::make( 'post_meta', 'Контент' )
    ->show_on_template('page-contact.php')
    ->add_fields(array(
        Field::make('text', 'crb_header', 'Заголовок текста'),
        Field::make('text', 'crb_text', 'Описание'),
        Field::make('image', 'crb_img', 'Изображение')
    ));
