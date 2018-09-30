<?php
/**
 * Created by PhpStorm.
 * User: arhex
 * Date: 14.09.2018
 * Time: 10:17
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action('woocommerce_before_main_content','estore_add_title', 10);
function estore_add_title () {
    ?>
    <div class="card1 container-fluid">
    <div class="row justify-content-between">
        <div class="col-6"><h4>Популярные марки автомобилей</h4></div>
        <button class=" btn-all btn btn-danger col-1">Все марки</button>
    </div>
    <?php woocommerce_output_content_wrapper ();
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action('woocommerce_after_main_content','estore_content_close', 10);
function estore_content_close () {
    ?>

    </div>
    <?php    woocommerce_output_content_wrapper_end ();
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


