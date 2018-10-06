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

//remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action('woocommerce_after_main_content','estore_content_close', 10);
function estore_content_close () {
    ?>

    </div>
    <?php    woocommerce_output_content_wrapper_end ();
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// заключаем карточку товара в карточку ))
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
add_action('woocommerce_before_shop_loop_item','estore_before_shop', 10);
function estore_before_shop (){
  ?>
    <div class="card" style="width: 18rem; margin-left: 5px; margin-right: 5px">
<?php
    woocommerce_template_loop_product_link_open();
}


/**подключаем фотку путем изменения функции woocommerce_get_product_thumbnail в файле wc-template-functions.php
 убираем надпись - распродажа*/

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
// меняем разметку ценника
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action('woocommerce_after_shop_loop_item_title','estore_template_loop_price', 10);
function estore_template_loop_price (){
    ?>
    <div class="card-footer ">
        <div class="row justify-content-between">
            <p style="color: red; font-weight: bold;">
                 <?php woocommerce_template_loop_price(); ?>
            </p>
          <?php woocommerce_template_loop_add_to_cart()  ?>
        </div>
    </div>
 <?php
}
//меняем надпись добавить корзину на иконку корзинки
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +
// вместо надписи добавить в корзину вставляем картинку + необходимо отключить html-фильтр  в фильтре
// add_to_cart_text() файла add-to-cart.php
function woo_custom_single_add_to_cart_text() {
    return __( '<img src="'.get_template_directory_uri() . '/assets/image/cart-icon.jpg'.'">', 'woocommerce' );
}
// просто удаляем хук добавки в коризуну и вставляем его в estore_template_loop_price ()(вверху - 53 строка) что бы цена и и "добавить в корзину " были на одном уровне
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


// изменяэм разметку в названии товара + необходимо удалить h2 тег в функции woocommerce_template_loop_product_title() в файле wc-template-functions.php

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title','estore_template_loop_product_title', 10);

function estore_template_loop_product_title (){
    ?>
    <div class="card-body">
        <p class="card-text" style="color: #0f0f0f">
             <?php woocommerce_template_loop_product_title();?>
        </p>
    </div>
<?php
}