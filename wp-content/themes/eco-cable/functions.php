<?php

// Menus

function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );


// Images sizes

add_image_size('logo', 200, 200, false);


// ACF

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}