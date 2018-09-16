<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
if (! defined('ABSPATH')){
    exit();
}

Container::make( 'post_meta', 'Custom Data' )
    ->show_on_post_type( 'page' )
    ->show_on_template('templates/main-page.php')
    ->add_fields ( array(
        Field::make('image', crb_photo),
        )
    );