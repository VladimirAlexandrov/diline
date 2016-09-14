<?php 

//миниатюры записи
add_theme_support('post-thumbnails');


add_action( 'wp_enqueue_scripts', 'wpsites_register_load_script' );

function wpsites_register_load_script() {   
	/*регистрация и подключение*/
	wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/js/qwe.js' );
	wp_enqueue_script( 'jquery' );
}
?>