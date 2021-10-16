<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'aducat_options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title'      => __('Aducat Options' , 'aducat'),
    'menu_slug'       => 'aducat-options',
    'framework_title' => 'Aducat Options Panel'
  ) );

  //
  // Create header section
  CSF::createSection( $prefix, array(
    'id'     => 'header_options',
    'title'  => 'Header Options',
    'icon'   => 'fas fa-address-card',
  ) );


   // logo
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Logo' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_logo',
        'title'   => __('Upload Logo', 'aducat'),
        'type'    => 'media',
      ),
      array(
        'id'      => 'favicon',
        'title'   => __('Upload Favicon', 'aducat'),
        'type'    => 'media',
      ),
    ),

  ) );

  // Create Service title
  CSF::createSection( $prefix, array(
    'id'     => 'service_options',
    'title'  => __('Service Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );

    // service section title
  CSF::createSection( $prefix, array(
    'parent' => 'service_options',
    'title'  => __('Service Section Title' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'service_sec_title',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
      
    ),

  ) );


    // Create about section
  CSF::createSection( $prefix, array(
    'id'     => 'about_options',
    'title'  => __('About Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );


  // about meta one title
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Meta One' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_sec_title',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_sec_icons',
        'title'   => __( 'Icons Set One', 'aducat' ),
        'type'    => 'group',
        'button_title' => 'Add New Icons',
        'fields'  => array(
          array(
            'id'    => 'abt-icon',
            'type'  => 'icon',
            'title' => __('About Icons', 'aducat'),
          ),
        ),
      ),
      array(
        'id'      => 'abt_sec_description',
        'title'   => __( 'Description', 'aducat' ),
        'type'    => 'textarea',
      ),
      
    ),
  ) );

   // about meta two title
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Meta Two' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_sec_title_two',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_sec_icons_two',
        'title'   => __( 'Icons Set Two', 'aducat' ),
        'type'    => 'group',
        'button_title' => 'Add New Icons',
        'fields'  => array(
          array(
            'id'    => 'abt-icon_two',
            'type'  => 'icon',
            'title' => __('About Icons Two', 'aducat'),
          ),
        ),
      ),
      array(
        'id'      => 'abt_sec_description_two',
        'title'   => __( 'Description', 'aducat' ),
        'type'    => 'textarea',
      ),
      
    ),
  ) );

  // image
   CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Image' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
     array(
        'id'      => 'abt_img',
        'title'   => __('Upload Image', 'aducat'),
        'type'    => 'media',
      ),

    ),
) );

    

  // about right content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About right content' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_content_title',
        'title'   => __( 'Content Title', 'aducat' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_content_desc',
        'title'   => __( 'Content Description', 'aducat' ),
        'type'    => 'textarea',
      ),
      array(
        'id'      => 'abt_content_btn',
        'title'   => __( 'Content Button Link', 'aducat' ),
        'type'    => 'text',
      ),
      
    ),

  ) );


  
  // Create Category options
  CSF::createSection( $prefix, array(
    'id'     => 'category_options',
    'title'  => __('Category Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );

    //  Create Category title
  CSF::createSection( $prefix, array(
    'parent' => 'category_options',
    'title'  => __('Category Section Title' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'categories_sec_title',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
      
    ),

  ) );


    // Create course option 
  CSF::createSection( $prefix, array(
    'id'     => 'course_options',
    'title'  => __('Course Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );

    // course option title
  CSF::createSection( $prefix, array(
    'parent' => 'course_options',
    'title'  => __('Course Section Title' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'course_sec_title',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
    
    ),

  ) );


  // Create books option 
  CSF::createSection( $prefix, array(
    'id'     => 'books_options',
    'title'  => __('Books Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );

    // books option title
  CSF::createSection( $prefix, array(
    'parent' => 'books_options',
    'title'  => __('Books Section Title' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'books_sec_title',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
    
    ),

  ) );

  // about right content
  // CSF::createSection( $prefix, array(
  //   'parent' => 'about_options',
  //   'title'  => __('About Right content' , 'aducat'),
  //   'icon'   => 'fas fa-arrow-right',
  //   'fields' => array(
  //     array(
  //       'id'      => 'abt_right_features',
  //       'title'   => __( 'Content Title', 'aducat' ),
  //       'type'    => 'group',
  //       'button_title' => __( 'Add New Feature', 'aducat' ),
  //       'fields'  => array( 
  //         array(
  //           'id'      => 'features_title',
  //           'title'   => __('About Features Title', 'aducat'),
  //           'type'    => 'text',
  //         ),
  //         array(
  //           'id'      => 'features_icon',
  //           'title'   => __('About Features Icon', 'aducat'),
  //           'type'    => 'icon',
  //         ),
  //         array(
  //           'id'      => 'features_desc',
  //           'title'   => __('About Description Title', 'aducat'),
  //           'type'    => 'textarea',
  //         ),
  //       ),
  //     ),
      
  //   ),

  // ) );



  

  // Create newsletter option 
  CSF::createSection( $prefix, array(
    'id'     => 'newsletter_options',
    'title'  => __('Newsletter Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );

    // newsletter option  title
  CSF::createSection( $prefix, array(
    'parent' => 'newsletter_options',
    'title'  => __('Newsletter Section Title' , 'aducat'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'newsletter_sec_title',
        'title'   => __( 'Title', 'aducat' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'newsletter_sec_description',
        'title'   => __( 'Description', 'aducat' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );


    // Create testimonial title
  CSF::createSection( $prefix, array(
    'id'     => 'testimonial_options',
    'title'  => __('Testimonial Options', 'aducat'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team testimonial title
  // CSF::createSection( $prefix, array(
  //   'parent' => 'testimonial_options',
  //   'title'  => __('Testimonial Section Title' , 'aducat'),
  //   'icon'   => 'fas fa-arrow-right',
  //   'fields' => array(
  //     array(
  //       'id'      => 'testimonial_sec_subtitle',
  //       'title'   => __( 'Subtitle', 'aducat' ),
  //       'type'    => 'text',
  //     ),
  //     array(
  //       'id'      => 'testimonial_sec_title',
  //       'title'   => __( 'Title', 'aducat' ),
  //       'type'    => 'text',
  //     ),
  //     array(
  //       'id'      => 'testimonial_sec_description',
  //       'title'   => __( 'Description', 'aducat' ),
  //       'type'    => 'textarea',
  //     ),
      
  //   ),

  // ) );



  // Create counter options
  // CSF::createSection( $prefix, array(
  //   'id' => 'counter_options',
  //   'title'  => __('Counter Options' , 'aducat'),
  //    'icon'   => 'fas fa-address-card',
  //   'fields' => array(
  //     array(
  //       'id'      => 'counter_lists',
  //       'title'   => __( 'Counter List', 'aducat' ),
  //       'type'    => 'group',
  //       'button_title' => 'Add New Counter',
  //       'fields' => array(
  //         array(
  //           'id'      => 'counter_icon',
  //           'title'   => __( 'Counter Icon', 'aducat' ),
  //           'type'    => 'icon',
  //         ),
  //         array(
  //           'id'      => 'counter_number',
  //           'title'   => __( 'Counter Number', 'aducat' ),
  //           'type'    => 'number',
  //         ),
  //         array(
  //           'id'      => 'counter_title',
  //           'title'   => __( 'Counter Title', 'aducat' ),
  //           'type'    => 'text',
  //         ),
  //       ),

  //     ),
      
  //   ),

  // ) );


  
  // CTA options
  // CSF::createSection( $prefix, array(
  //   'id' => 'cta_options',
  //   'title'  => __('CTA Options' , 'aducat'),
  //   'icon'   => 'fas fa-address-card',
  //   'fields' => array(
  //       array(
  //         'id' => 'cta_switch',
  //         'type' => 'switcher',
  //         'title'   => __( 'Show CTA?', 'aducat' ),
  //         'default' => true,
  //       ),
  //       array(
  //         'id'      => 'cta_title',
  //         'title'   => __( 'CTA Title', 'aducat' ),
  //         'type'    => 'text',
  //         'default' => __( 'Best Solution For Your Business', 'aducat' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_subtitle',
  //         'title'   => __( 'CTA Subtitle', 'aducat' ),
  //         'type'    => 'textarea',
  //         'default' => __( 'The Can Be Used On Larger Scale Projectss As Well As Small Scale Projectss', 'aducat' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_btn_text',
  //         'title'   => __( 'CTA Button Text', 'aducat' ),
  //         'type'    => 'text',
  //         'default' => __( 'Contact', 'aducat' ),
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //       array(
  //         'id'      => 'cta_btn_url',
  //         'title'   => __( 'CTA Button URL', 'aducat' ),
  //         'type'    => 'text',
  //         'default' => 'https://google.com',
  //         'dependency' => array( 'cta_switch', '==', 'true' ),
  //       ),
  //     ),

  // ) );


  // contact options
  // CSF::createSection( $prefix, array(
  //   'id' => 'contact_options',
  //   'title'  => __( 'Contact Options' , 'aducat'),
  //   'icon'   => 'fas fa-address-card',
  //   'fields' => array(
  //     array(
  //       'id'      => 'contact_info',
  //       'title'   => __( 'Contact Info', 'aducat' ),
  //       'type'    => 'group',
  //       'fields'  => array(
  //         array(
  //           'id'      => 'contact_info_title',
  //           'title'   => __( 'Contact Info Title', 'aducat' ),
  //           'type'    => 'text',
  //         ),
  //         array(
  //           'id'      => 'contact_info_icon',
  //           'title'   => __( 'Contact Info Icon', 'aducat' ),
  //           'type'    => 'icon',
  //         ),
  //         array(
  //           'id'      => 'contact_info_description',
  //           'title'   => __( 'Contact Info Description', 'aducat' ),
  //           'type'    => 'text',
  //         ),
  //       ),
  //     ),

  //     array(
  //         'id'      => 'contact_map',
  //         'title'   => __( 'Contact Map', 'aducat' ),
  //         'type'    => 'map',
  //     ),
  //   ),

  // ) );
  

  // footer options
  // CSF::createSection( $prefix, array(
  //   'id' => 'footer_options',
  //   'title'  => __('Footer Options' , 'aducat'),
  //   'icon'   => 'fas fa-rocket',
  //   'fields' => array(
  //     array(
  //       'id'      => 'footer_text',
  //       'title'   => __( 'Copyright Text', 'aducat' ),
  //       'type'    => 'text',
  //       'default' => __( '©All Rights Reserved 2020', 'aducat' ),
  //     ),
  //     array(
  //       'id'      => 'footer social',
  //       'title'   => __( 'Footer Social', 'aducat' ),
  //       'type'    => 'group',
  //       'button_title'  => __( 'Add New Link', 'aducat' ),
  //       'fields'  => array(
  //         array(
  //           'id'      => 'footer_social_icon',
  //           'title'   => __( 'Footer Social Icons', 'aducat' ),
  //           'type'    => 'text',
  //         ),
  //         array(
  //           'id'      => 'footer_social_url',
  //           'title'   => __( 'Footer Social Url', 'aducat' ),
  //           'type'    => 'text',
  //         ),
  //       ),
  //     ),
  //   ),

  // ) );




 


  

}