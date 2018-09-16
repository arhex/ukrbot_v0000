<?php
// Берем QJuery из гугла ставим его ы убираем старый JQuery
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
    // отменяем зарегистрированный jQuery
    // вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}



add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    load_template(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'ast_register_custom_fields');

function ast_register_custom_fields()
{
    require get_template_directory() . '/includes/custom-fields-options/metabox.php';
    require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}

/* подключаю настройки темы*/
require get_template_directory() . '/includes/theme-settings.php';

// подключение области виджетов
require get_template_directory() . '/includes/widget-areas.php';


// подключение скриптов и стилей
require get_template_directory() . '/includes/enqueue-script-style.php';


// подключаю хелпер (вспомогательные функции)

require get_template_directory() . '/includes/helpers.php';

require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/includes/woocommerce.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';

}
