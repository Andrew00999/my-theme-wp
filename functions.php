<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'footer_scripts' );
add_action( 'after_setup_theme', 'my_register_func' );
add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets(){
  register_sidebar([
    'name' => 'right sidebar',
    'id' => 'right_sidebar',
    'description' => 'описание нашего сайдбара',
    'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
  ]);
}

function my_register_func() {
  register_nav_menu( 'top', 'top menu' );
  register_nav_menu( 'bottom', 'footer menu' );
}


function style_theme() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'default-style', get_template_directory_uri() . '/assets/css/default.css' );
  wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/assets/css/layout.css' );
  wp_enqueue_style( 'media-style', get_template_directory_uri() . '/assets/css/media-queries.css' );
}


function footer_scripts() {
  wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
  wp_enqueue_script('double_tap', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
  wp_enqueue_script('flexible', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
  wp_enqueue_script('modern', get_template_directory_uri() . '/assets/js/modernizr.js');
  wp_enqueue_script('jquery');
}


?>


