<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta <?php bloginfo('charset'); ?>>
    <?php  
        $config = get_option( 'aducat_options' );

        $favicon =  $config['favicon']
    ?>
    <link rel="icon" href="<?php echo $favicon[ 'url' ]?>" type="image/jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class(  );?>>
    <!-- header starts -->
    <div id="header" class="header-bg">
        <div class="nav-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="logo">
                            <?php
                                $logo = $config['header_logo'];

                                if( $logo ){
                            ?>
                            <a href="<?php echo esc_url(site_url());?>">
                                <img src="<?php echo esc_url($logo['url']);?>" alt="logo">
                            </a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-8 col-sm-7 d-flex justify-content-end">
                        <div class="nav-wrapper">
                            <nav id="mobile-menu">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                    ));
                                ?>
                            </nav>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header ends -->