<?php
/*
Template Name: Custom Page Template

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
                <button class=" btn-all btn btn-danger col-1" onClick='location.href="http://localhost/wordpress/vsi-zapchasti/"'>Все марки</button>
            </div>
            <div class="row justify-content-lg-center" >
                <?php
                $args = array(
                    'hide_empty' => false,
                    'taxonomy' => 'product_cat',
                    'parent'             => 16,
                    'number'=>18,
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

    <div class="populargoods container-fluid">
        <div class="row">

            <h4>Популярные запчасти</h4>
        </div>
        <!-- Вторая карусель-------------------------------------------------------------------------------------------------->
        <div id="carouselExampleIndicators1" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="row justify-content-lg-center" >
                        <?php
                        /** Ниже через js - скрипт можно узнать разрешение екрана*/
                        $width = "<script>var windowWidth = screen.width; document.writeln(windowWidth); </script>";
                        $height = "<script>var windowHeight = screen.height; document.writeln(windowHeight); </script>";

                        //echo 'This screen is : '.$width.' x '.$height;
                        ?>
                        <div class="row_na_2">
                        <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured" orderby = "ID" ]'); ?>
                        </div>
                        <div class="row_na_2">
                        <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured" orderby = "author"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">

                    <div class="row justify-content-lg-center" >
                        <div class="row_na_2">
                        <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured" orderby = "title" ]'); ?>
                        </div>
                        <div class="row_na_2">
                        <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured" orderby = "date"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">

                    <div class="row justify-content-lg-center" >
                        <div class="row_na_2">
                        <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured" orderby = "modified"]'); ?>
                        </div>
                        <div class="row_na_2">
                        <?php echo do_shortcode('[products limit="3" columns="3" visibility="featured" orderby = "rand" ]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--
                <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev" >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->

            <div class="row justify-content-end">
                <button type = "button"  id="Prev2" class="btn nextprev "  ><i class="fa fa-chevron-left"  aria-hidden="true"></i> </button>
                <button type = "button"  id="Next2" class="btn nextprev " data-action="prev"><i class="fa fa-chevron-right"  aria-hidden="true"></i> </button>
            </div>
        </div>
    </div>

    <div class="row">

        <h4>Популярные товары</h4>
    </div>
    <!----------------------------Carousel #3 ----------------------------------------------------------------->
    <div id="carouselExampleIndicators2" class="carousel slide " data-interval="false"  data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="row justify-content-center" >
                    <div class="row_na_2">
                    <?php echo do_shortcode('[product_category category="Accessories" per_page="3" columns="3" orderby = "ID"]'); ?>
                    </div>
                    <div class="row_na_2">
                    <?php echo do_shortcode('[product_category category="Accessories" per_page="3" columns="3" orderby = "author"]'); ?>
                    </div>
                </div>
            </div>
            <div class="carousel-item">

                <div class="row justify-content-center" >
                    <div class="row_na_2">
                     <?php echo do_shortcode('[product_category category="Accessories" per_page="3" columns="3" orderby = "title" ]'); ?>
                    </div>
                    <div class="row_na_2">
                    <?php echo do_shortcode('[product_category category="Accessories" per_page="3" columns="3" orderby = "date"]'); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-end">
        <button type = "button"  id="Prev3" class="btn nextprev "  ><i class="fa fa-chevron-left"  aria-hidden="true"></i> </button>
        <button type = "button"  id="Next3" class="btn nextprev " data-action="prev"><i class="fa fa-chevron-right"  aria-hidden="true"></i> </button>
    </div>
    </div>

<?php

get_footer();
