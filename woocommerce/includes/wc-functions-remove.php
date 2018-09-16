<?php
if (! defined('ABSPATH')){
    exit();
}

//add_filter( 'woocommerce_enqueue_styles', 'dequeue_styles',1 );
//function dequeue_styles( $enqueue_styles ) {

//    unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
//    unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
//    unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
//    return $enqueue_styles;
//}





add_filter( 'woocommerce_enqueue_styles', '__return_empty_array',1 );