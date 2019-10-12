<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Media options for 'audio/media/our team' pages
$basic_options_container = Container::make( 'theme_options', __( 'Сity band design настройки' ) )
    ->set_icon('dashicons-format-audio')
    ->add_tab('Наша команда', array(
        Field::make( 'complex', 'crb_team', 'Наша команда' )
            ->add_fields( 'person', 'Участник', array(
                Field::make( 'text', 'person-name', 'Имя участника' )
                    ->set_width(35),
                Field::make( 'text', 'person-work', 'Роль' )
                    ->set_width( 35 ),
                Field::make( 'image', 'file-song', 'Изображение' )
                    ->set_width( 30 )
            ) )
    ))
    ->add_tab('Музыка', array(
        Field::make( 'complex', 'audios', 'Аудиофайлы для раздела медиа' )
            ->add_fields( 'single_song', 'Аудиофайл', array(
                Field::make( 'text', 'name-song', 'Название песни' )
                    ->set_width( 70 ),
                Field::make( 'file', 'file-song', 'Файл' )
                    ->set_type( 'audio' )
                    ->set_width( 30 )
            ) )
    ))
    ->add_tab('Видео', array(
        Field::make( 'media_gallery', 'video_gallery', __( 'Видео для раздела медиа' ) )
            ->set_type('video'),
    ))
    ->add_tab('Фото', array(
        Field::make( 'media_gallery', 'audio_gallery', __( 'Фото для раздела медиа' ) )
            ->set_type('image'),
    ));
