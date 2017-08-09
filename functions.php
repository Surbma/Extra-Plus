<?php

function extra_plus_enqueues() {
	wp_enqueue_style( 'extra', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'extra-plus', get_stylesheet_directory_uri() . '/css/extra-plus.css' );
}
add_action( 'wp_enqueue_scripts', 'extra_plus_enqueues', 20 );

// Add 404 widget position
function extra_plus_widgets_init() {
	register_sidebar( array(
		'name' => 'Extra 404',
		'id' => 'extra-404',
		'before_widget' => '<div id="%1$s" class="et_404_widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>'
	) );
}
add_action( 'widgets_init', 'extra_plus_widgets_init' );
