<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;


// Add second options page under 'Basic Options'
Container::make('theme_options', 'Настройки темы')
        ->set_icon ('dashicons-carrot')
    ->add_tab( 'Шапка', array(
        Field::make( 'image', 'est_header_logo', 'Логотип' ) ->set_width(30),
        Field::make( 'text', 'crb_last_name', 'Last Name' ),
        Field::make( 'text', 'crb_position', 'Position' ),
    ))
    ->add_tab('Подвал', array(
        Field::make( 'text', 'est_footer_copy', 'Kopirate' ) -> set_default_value('Копирайт'),
        Field::make( 'text', 'crb_phone', 'Phone_Number' ) -> set_default_value('+372 621 3419'),
        Field::make( 'text', 'crb_email', 'Email' ) -> set_default_value('info@autovaruosad.ee'),
        Field::make( 'text', 'crb_www', 'WWW' ) -> set_default_value('www.autovaruosad.ee'),
    ));
