<?php

// aducat Custom Widgets

function aducat_widgets(){

    // Sidebar
    // register_sidebar(array(
    //     'name' => __('Main Sidebar','aducat'),
    //     'id' => 'main_sidebar',
    //     'description' => __('Main Sidebar for Blog Page', 'aducat'),
    //     'before_widget' => '<div class="single-sidebar">',
    //     'after_widget' => '</div>',
    //     'before_title' => '<h4>',
    //     'after_title' => '</h4>'
    // ));

    // Footer Sidebar 1
    register_sidebar(array(
        'name' => __('Footer Sidebar 1','aducat'),
        'id' => 'footer_sidebar1',
        'description' => __('Footer Widget 1 for Showing Widget', 'aducat'),
        'before_widget' => '<div class="footer_logo footer_social">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Footer Sidebar 2
    register_sidebar(array(
        'name' => __('Footer Sidebar 2','aducat'),
        'id' => 'footer_sidebar2',
        'description' => __('Footer Widget 2 for Showing Widget', 'aducat'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 3
    register_sidebar(array(
        'name' => __('Footer Sidebar 3','aducat'),
        'id' => 'footer_sidebar3',
        'description' => __('Footer Widget 3 for Showing Widget', 'aducat'),
        'before_widget' => '<div class="single-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer Sidebar 4
    register_sidebar(array(
        'name' => __('Footer Sidebar 4','aducat'),
        'id' => 'footer_sidebar4',
        'description' => __('Footer Widget 4 for Showing Widget', 'aducat'),
        'before_widget' => '<div class="single-footer contact-box">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Footer copyright
    register_sidebar(array(
        'name' => __('Footer Copyright','aducat'),
        'id' => 'copyright',
        'description' => __('Footer Widget copyright for Showing Widget', 'aducat'),
        
    ));

    // Footer social
    register_sidebar(array(
        'name' => __('Footer Social','aducat'),
        'id' => 'social',
        'description' => __('Footer Widget social for Showing Widget', 'aducat'),

    ));

    // Footer social
    register_sidebar(array(
        'name' => __('Sidebar Search','aducat'),
        'id' => 'search',
        'description' => __('Footer Widget social for Showing Widget', 'aducat'),

    ));
}
add_action('widgets_init', 'aducat_widgets');