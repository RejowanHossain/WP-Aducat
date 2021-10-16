<?php

// aducat activation with tgm
require_once get_template_directory().'/aducat-tgm/class-tgm-plugin-activation.php';

function aducat_activation(){
    $plugins = array(
        array(
            'name' => __( 'Advanced Custom Fields', 'aducat' ),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => __( 'Codestar Framework', 'aducat' ),
            'slug' => 'codestar-framework',
            'source'    => '/Codestar/codestar-framework/archive/refs/heads/master.zip',
            'required' => true
        ),
        array(
            'name' => __( 'Contact Form 7', 'aducat' ),
            'slug' => 'contact-form-7',
            'required' => true
        ),
        array(
            'name' => __( 'aducat Custom Posts', 'aducat' ),
            'slug' => 'aducat-custom-post',
            'source'    => '/RejowanHossain/cpt/archive/refs/heads/main.zip',
            'required' => true
        ),
    );

    $config = array(
        'id' => 'aducat_plugins_activation',
        'menu' => 'aducat_plugins_activation',
        'parent_slug' => 'themes.php',
        'has_notices' => true,
    );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'aducat_activation' );