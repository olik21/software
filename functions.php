<?php

add_theme_support('nav-menus'); 

if ( function_exists('register_nav_menus')){
	 register_nav_menus( 
	 	array( 
	 		'main' => 'Main Nav',
	 		'footer-menu' => 'footer-menu'
	 		 )
	  );
 }

add_theme_support( 'post-thumbnails', array( 'post' ) );

 
 
 add_action( ‘wp_enqueue_scripts’, ‘enqueue_font_awesome’ );

function enqueue_font_awesome() {

            wp_enqueue_style( ‘font-awesome’, '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

}
/** limit return words in post on page Blog */

function excerpt_word_limit($length) {
	return 25;
}
add_filter('excerpt_length', 'excerpt_word_limit');

/** change end post  on page Blog */

function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**** paginations  ***/

