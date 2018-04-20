<?php
/*

*************************************************************************************

Plugin Name: Mis funciones
Description: Archivo de funciones adicionales personalizadas.
Plugin URI: http://www.danielnabil.com/blog/que-es-archivo-functions-php-temas-wordpress/
Version: 1.1
License: GPL
Author: Daniel Nabil
Author URI: http://www.danielnabil.com/

*************************************************************************************/


// Pegar a partir de aquí las funciones y código que queramos añadir.

add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 825, 510, true );

function register_my_menu(){
	register_nav_menu('top-menu',_('Menú header'));
	register_nav_menu('bottom-menu',_('Menú footer'));
}

add_action('init', 'register_my_menu');

/*Adicionar javascripts*/
add_action('wp_enqueue_scripts','carga_js_afn');

function carga_js_afn(){
	wp_register_script('scripts',get_template_directory_uri() . '/vendor/jquery/jquery.min.js',array('jquery'),'1',true);
	wp_enqueue_script('scripts');
	wp_register_script('bootstrap_js',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js',array('jquery'),'1',true);
	wp_enqueue_script('bootstrap_js');
	wp_register_script('bootstrap_val',get_template_directory_uri() . '/js/jqBootstrapValidation.js',array('jquery'),'1',true);
	wp_enqueue_script('bootstrap_val');
	wp_register_script('contact_me',get_template_directory_uri() . '/js/contact_me.js',array('jquery'),'1',true);
	wp_enqueue_script('contact_me');
	wp_register_script('blog',get_template_directory_uri() . '/js/clean-blog.min.js',array('jquery'),'1',true);
	wp_enqueue_script('blog');
	wp_register_script('afnc',get_template_directory_uri() . '/js/afnc.js',array('jquery'),'1',true);
	wp_enqueue_script('afnc');
	wp_register_script('sss',get_template_directory_uri() . '/js/sss.min.js',array('jquery'),'1',true);
	wp_enqueue_script('sss');
	wp_register_script('ssss',get_template_directory_uri() . '/js/ssss.js',array('jquery'),'1',true);
	wp_enqueue_script('ssss');
}

/*Adicionar CSS*/
add_action('wp_print_styles','carga_css_afn');

function carga_css_afn(){
	wp_enqueue_style('bootstrap', get_bloginfo('template_url').'/vendor/bootstrap/css/bootstrap.min.css', false, false, 'screen');
	wp_enqueue_style('icomoon', get_bloginfo('template_url').'/css/icomoon.css', false, false, 'screen');
	/*wp_enqueue_style('fonts', get_bloginfo('template_url').'/vendor/font-awesome/css/font-awesome.min.css','bootstrap');*/
	wp_enqueue_style('style', get_bloginfo('stylesheet_url'), 'bootstrap');
}

/*Modificar el tamaño del excerpt*/
function longitud_excerpt($length) {
    return 15;
}
add_filter('excerpt_length', 'longitud_excerpt');

function endeos_widgets_init(){
	register_sidebar( array(
		'name'          => __( 'Widget of services' ),
		'id'            => 'sidebar-services',
		'description'   => __( 'this widget is for all services' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'register_sidebar');

/*Adicionar fuente LATO
add_action('wp_print_styles', 'load_fonts');

function load_fonts() {
	wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Lato');
	wp_enqueue_style( 'et-googleFonts');
}*/

/*
function on__style(){
    wp_enqueue_style('style-theme', get_bloginfo('stylesheet_url'), false, false, 'screen');
    wp_enqueue_style('960', get_bloginfo('template_url').'/_inc/css/960.css','style-theme');
    wp_enqueue_style('jquery-ui', get_bloginfo('template_url').'/_inc/css/jquery-ui.custom/ jquery-ui.custom.css','style-theme');
}
add_action('wp_print_styles', 'on__style');*/
