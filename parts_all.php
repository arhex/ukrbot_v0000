<?php
/*
Template Name: Parts_ALL Template

*/

get_header(); ?>

    <div class="card1 container-fluid">
        <div class=" justify-content-between">
            <div class="row justify-content-between">
                <div class="col-6"><h4>Все марки автомобилей</h4></div>
            </div>
        </div>
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
<?php

get_footer();
