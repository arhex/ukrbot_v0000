<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estore
 */

get_header(); ?>

<div class="category container-fluid">


    <div class="row justify-content-lg-center">

        <?php $parentid = get_queried_object_id();
        //print_r($parentid);
        $args = array(
            'hide_empty' => false,
            'taxonomy' => 'product_cat'
        );
        $terms = get_terms( $args );
       // print_r($terms);
        if ( $terms ) {
            foreach ( $terms as $term ) {
                //woocommerce_subcategory_thumbnail( $term );
                if ($term->parent ==0) { // если это не категория а подкатегория , то тут не выводить (пока так)
                    $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
                    $image = wp_get_attachment_image_url($thumbnail_id, 'full');
                    if ($image) {
                        echo '<a href="' . esc_url(get_term_link($term)) . '"> <img src=' . esc_url($image) . ' alt=""> </a>';
                    }
                }
            }



        } ?>



    </div>

</div>
    <div class="card1 container-fluid">
    <div class=" justify-content-between">
        <div class="row justify-content-between">
            <div class="col-6"><h4>Популярные марки автомобилей</h4></div>
            <button class=" btn-all btn btn-danger col-1">Все марки</button>
        </div>
    <div class="row justify-content-lg-center" >
        <?php
        $args = array(
            'hide_empty' => false,
            'taxonomy' => 'product_cat',
            'parent'             => 16,
        );
        $terms = get_terms( $args );
        if ( $terms ) {
            foreach ( $terms as $term ) {

                //woocommerce_subcategory_thumbnail( $term );
                 // если это не категория а подкатегория , то тут не выводить (пока так)
                    $thumbnail_id = get_woocommerce_term_meta($term->term_id, 'thumbnail_id', true);
                    $image = wp_get_attachment_image_url($thumbnail_id, 'full');
                    if ($image) {
                        $image_url = esc_url($image);
                        echo '<div class="card text-center" style="width: 19rem;"><a  href="'
                            . get_term_link($term) .
                            '"><img class="card-img-top" style="padding: 20px 100px 20px 100px"src="'
                            . $image_url.
                            '" alt="Card image cap" /></a><div class="card-body"><h5 class="card-title"><a href="'
                            .get_term_link($term) .
                            '" >'
                            .$term->name.
                            '</a></h5></div></div> ';



                        //echo '<a href="' . esc_url(get_term_link($term)) . '"> <img src=' . esc_url($image) . ' alt=""> </a>';

                }
            }



        }

        ?>
        </div>
        </div>
        </div>
<?php

get_footer();
