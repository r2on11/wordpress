<?php

function firsttheme_script_enqueue () {

    wp_enqueue_style('bootstrap', get_template_directory_uri () . '/css/bootstrap.min.css',array(),
    '1.0.0', 'all');
    wp_enqueue_style( 'sui-style', get_stylesheet_directory_uri() . '/css/semantic.min.css' );
    wp_enqueue_style('customstyle', get_template_directory_uri () . '/css/first.css',array(),
    '1.0.0', 'all');
    
   
    wp_enqueue_script( 'jQuery');
   

    wp_enqueue_script( 'customjs', get_template_directory_uri () . '/js/firsttheme.js',array(),
    '1.0.0', true);
  
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
    

}

add_action( 'wp_enqueue_scripts', 'firsttheme_script_enqueue');

function firsttheme_theme_setup () {
add_theme_support('menus'); //is better to put on function
register_nav_menu( 'primary', 'Primary Header Navigation' );
register_nav_menu( 'secondary', 'Footer Navigation');
}
add_action ('init', 'firsttheme_theme_setup'); //e specifikojna kur mu thirr dmth after
//psh after_setup_theme e ktu init pe lojme

add_theme_support ('html5',array('search-form'));