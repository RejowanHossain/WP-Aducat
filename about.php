<?php

/*
   Template Name: About
*/
get_header();
?>

<!-- about starts -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">

                <div class="about-rating">
                    <?php 
                        $config = get_option( 'aducat_options' );

                        if( $config[ 'abt_sec_title' ] ){
                    ?>
                    <h4><?php echo esc_html($config[ 'abt_sec_title' ]);?></h4>
                    <div class="stars">
                        <?php
                            $about_icons = $config['abt_sec_icons'];
                            foreach( $about_icons as $about_icon){
                        ?>

                        <i class="<?php echo esc_attr( $about_icon['abt-icon'] );?>"></i>

                        <?php }?>
                    </div>
                    <span><?php echo esc_html($config[ 'abt_sec_description' ]);?></span>
                    <?php } ?>
                </div>

                <div class="about-img">
                    <?php 
                        $config = get_option( 'aducat_options' );

                        $abt_img = $config['abt_img'];
                        if( $abt_img ){
                    ?>
                    <img src="<?php echo esc_url($abt_img['url']);?>" alt="man">
                    <?php }?>
                </div>

                <div class="about-course">
                    <?php 
                        $config = get_option( 'aducat_options' );

                        if( $config[ 'abt_sec_title_two' ] ){
                    ?>
                    <h4><?php echo esc_html($config[ 'abt_sec_title_two' ]);?></h4>
                    <div class="stars">
                        <?php
                            $about_icons_two = $config['abt_sec_icons_two'];
                            foreach( $about_icons_two as $about_icon_two){
                        ?>

                        <i class="<?php echo esc_attr( $about_icon_two['abt-icon_two'] );?>"></i>

                        <?php }?>
                    </div>
                    <span><?php echo esc_html($config[ 'abt_sec_description_two' ]);?></span>
                    <?php } ?>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <?php
                    $config = get_option( 'aducat_options' );      

                    if( $config[ 'abt_content_title' ] ){
                ?>
                <div class="about-text">
                    <h3><?php echo esc_html( $config[ 'abt_content_title' ] )?></h3>
                    <p><?php echo esc_html( $config[ 'abt_content_desc' ] )?></p>
                    <div class="button">
                        <a href="<?php echo esc_url( $config[ 'abt_content_btn' ] )?>"><?php _e('Read More')?> </a>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- about ends -->
<?php get_footer();?>