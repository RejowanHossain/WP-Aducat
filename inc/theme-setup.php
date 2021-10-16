<?php

function aducat_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array( 'post', 'banners' , 'services',  'testimonials' , 'courses', 'books' ) );
    load_theme_textdomain('aducat', get_template_directory_uri().'/languages');
    add_theme_support( 'custom-logo' );

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'aducat')
    ));
}
add_action('after_setup_theme', 'aducat_setup_theme');