<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function prefix_change_category_cpt_posts_per_page( $query ) {

    if ( $query->is_main_query() && ! is_admin() && is_category( 'worst-home-renovation-fails' ) ) {
        $query->set( 'posts_per_page', '1' );
    }
}
add_action( 'pre_get_posts', 'prefix_change_category_cpt_posts_per_page' );