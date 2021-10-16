<?php

function aducat_css_js_enqueue(){

    // CSS Load
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fa5', get_template_directory_uri().'assets/css/all.min.css', array(), '5.13.0', 'all' );

    wp_enqueue_style('meanmenu', get_template_directory_uri().'/assets/css/meanmenu.css', array(), '1.0', 'all' );
    wp_enqueue_style('fontawesome-css', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('slick', get_template_directory_uri().'/assets/css/slick.css', array(), '1.0', 'all' );
    
    wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all' );
    
    wp_enqueue_style('style-css', get_stylesheet_uri());



    // JS Load

    
    wp_enqueue_script('font-awesome-js', get_template_directory_uri().'/assets/js/all.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('meanmnu-js', get_template_directory_uri().'/assets/js/jquery.meanmenu.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('faws', get_template_directory_uri().'/assets/js/fontawesome.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/app.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','aducat_css_js_enqueue');