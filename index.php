<?php get_header();?>
<!-- hero starts -->
<div class="hero hero-bg">
    <div class="container">
        <div class="row">
            <div class="single-slider">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">

                        <?php 
                            $args = array(
                              'post_type' => 'banners',
                            );

                            $query = new WP_Query( $args );

                            while( $query->have_posts() ){
                              $query->the_post();

                              $btn_text = get_field( 'button_text' );
                              $btn_link = get_field( 'button_link' );
                        ?>

                        <div class="hero-content">
                            <h2><?php the_title();?></h2>
                            <p> <?php the_content();?>
                            </p>
                            <div class="button">
                                <a href=" <?php echo $btn_link?> "> <?php echo esc_html($btn_text);?> </a>
                            </div>
                        </div>

                        <?php 
                          } 
                          wp_reset_postdata();
                        ?>

                    </div>

                    <div class="col-lg-6 d-flex align-items-center justify-content-end">
                        <div class="hero-image">
                            <img src="<?php echo get_template_directory_uri();?>/images/coding.png" alt="code-icon"
                                class="coding">
                            <?php 
                              $args = array(
                                'post_type' => 'banners',
                              );

                              $query = new WP_Query( $args );

                              while( $query->have_posts() ){
                                $query->the_post();
                            ?>
                            <?php the_post_thumbnail( );?>
                            <?php } wp_reset_postdata();?>
                            <div class="hero-meta">
                                <h4>13k+ Student</h4>
                                <img src="<?php echo get_template_directory_uri();?>/images/hero_students.png"
                                    alt="students">
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/pencil.png" alt="pencil-icon"
                                class="pencil">
                        </div>

                        <div class="hero_ellipse_icon">
                            <img class="ellipse1" src="<?php echo get_template_directory_uri();?>/images/ellipse1.png"
                                alt="">
                            <img class="ellipse2" src="<?php echo get_template_directory_uri();?>/images/ellipse11.png"
                                alt="">
                            <img class="ellipse3" src="<?php echo get_template_directory_uri();?>/images/ellipse3.png"
                                alt="">
                            <img class="ellipse4" src="<?php echo get_template_directory_uri();?>/images/ellipse4.png"
                                alt="">
                            <img class="ellipse7" src="<?php echo get_template_directory_uri();?>/images/ellipse7.png"
                                alt="">
                            <img class="ellipse8" src="<?php echo get_template_directory_uri();?>/images/ellipse10.png"
                                alt="">
                            <img class="ellipse6" src="<?php echo get_template_directory_uri();?>/images/ellipse9.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero ends -->

<!-- workflow starts -->
<div class="workflow">
    <div class="container">
        <?php 
            $config = get_option( 'aducat_options' );

            if( $config[ 'service_sec_title' ] ){
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3><?php echo esc_html(  $config[ 'service_sec_title' ] );?></h3>
                </div>
            </div>
        </div>

        <?php } ?>

        <div class="row">

            <?php 
              $args = array(
                'post_type' => 'services',
                'posts_per_page'    => 3,
                'orderby'           => 'menu_order',
                'order'             => 'ASC',
              );

              $query = new WP_Query( $args );

              while( $query->have_posts() ){
                $query->the_post();

                $service_icon = get_field( 'service_icon' );
          ?>

            <div class="col-lg-4 col-md-6">
                <div class="single-workflow">
                    <i class="<?php echo esc_html( $service_icon);?>"></i>
                    <h4><?php the_title();?></h4>
                    <p><?php the_content();?>
                    </p>
                </div>
            </div>

            <?php 
                } 
                wp_reset_postdata();
            ?>


        </div>
    </div>
</div>
<!-- workflow ends -->

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

<!-- category starts -->
<div class="category">
    <div class="container">
        <?php 
            $config = get_option( 'aducat_options' );

            if( $config[ 'categories_sec_title' ] ){
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title ">
                    <h3><?php echo esc_html( $config[ 'categories_sec_title' ] );?></h3>
                </div>
            </div>
        </div>

        <?php }?>

        <div class="row category-slider">
            <?php
                $args = array(
                    'post_type' => 'categories',
                    'posts_per_page'    => -1,
              );

              $query = new WP_Query( $args );

              while( $query->have_posts() ){
                $query->the_post();

                $category_img = get_field( 'category_icon' ); 
                $category_text = get_field( 'category_name' );

            ?>
            <div class="col-lg-12">
                <div class="single-category">
                    <img src="<?php echo esc_url($category_img['url'] );?>" alt="icon">
                    <h4><?php echo esc_html( $category_text );?></h4>
                </div>
            </div>
            <?php } wp_reset_postdata();?>
        </div>
    </div>
</div>
<!-- category ends -->

<!-- courses starts -->
<div class="course">
    <div class="container">
        <?php 
            $config = get_option( 'aducat_options' );

            if( $config[ 'course_sec_title' ] ){
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3><?php echo esc_html(  $config[ 'course_sec_title' ] );?></h3>
                </div>
            </div>
        </div>

        <?php } ?>

        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'courses',
                    'posts_per_page'    => 3,
              );

              $query = new WP_Query( $args );

              while( $query->have_posts() ){
                $query->the_post();

                $course_category = get_field( 'course_category' ); 
                $course_price = get_field( 'course_price' );
                
                $course_lesson_icon = get_field( 'course_lesson_icon' ); 
                $course_lesson_text = get_field( 'course_lesson_text' );

                $course_student_icon = get_field( 'course_student_icon' ); 
                $course_student_text = get_field( 'course_student_text' );

                $course_ratting = get_field( 'course_ratting' );
                $course_enroll = get_field( 'all_enroll' );

            ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-course">
                    <?php the_post_thumbnail();?>
                    <div class="course-meta">
                        <span class="tag"><?php echo esc_html( $course_category );?></span>
                        <span class="price">
                            $
                            <?php echo esc_html( $course_price );?>
                        </span>
                    </div>
                    <h4 class="course-title">
                        <?php the_title();?>
                    </h4>
                    <div class="course-lesson">
                        <span class="course-student-meta">
                            <i class="<?php echo esc_attr( $course_lesson_icon );?>"></i>
                            <?php echo esc_html( $course_lesson_text );?>
                        </span>
                        <span class="course-count-meta">
                            <i class="<?php echo esc_attr( $course_student_icon );?>"></i>
                            <?php echo esc_html( $course_student_text );?>
                        </span>
                    </div>
                    <div class="course-rating-container">
                        <span class="course-rating">
                            <?php echo esc_html( $course_ratting );?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            (<?php echo esc_html( $course_enroll );?>)
                        </span>
                        <a href="<?php the_permalink();?>"> <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>

            <?php } wp_reset_postdata();?>

        </div>

        <!-- <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="button">
                    <a href="<?php the_permalink();?>"> <?php _e('View All');?> </a>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- courses ends -->

<!-- best books starts -->
<div class="books">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?php 
                    $config = get_option( 'aducat_options' );

                    if( $config[ 'books_sec_title' ] ){
                ?>
                <div class="section-title responsive-center">
                    <h3><?php echo esc_html(  $config[ 'books_sec_title' ] );?></h3>
                </div>
                <?php } ?>
                <div class="book-wrapper">
                    <?php
                        $args = array(
                            'post_type' => 'books',
                            // 'posts_per_page'    => 3,
                        );

                        $query = new WP_Query( $args );

                        while( $query->have_posts() ){
                            $query->the_post();

                            $book_icon = get_field( 'book_icon' ); 
                            $book_numbers = get_field( 'book_numbers' );

                    ?>
                    <div class="single-book">
                        <div class="book-icon">
                            <i class="<?php echo esc_attr( $book_icon );?>"></i>
                        </div>
                        <span>
                            <?php echo esc_html( $book_numbers );?>+
                            <br>
                            <?php the_title();?>
                        </span>
                    </div>
                    <?php } wp_reset_postdata();?>
                </div>
                <div class="button-group">
                    <div class="button">
                        <a href="#"> Free Preview </a>
                    </div>
                    <div class="button ml-3">
                        <a href="#"> Download </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="book-image book-slider">
                    <?php
                        $args = array(
                            'post_type' => 'books',
                        );

                        $query = new WP_Query( $args );

                        while( $query->have_posts() ){
                            $query->the_post();
                    ?>
                    <?php the_post_thumbnail( );?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- best books ends -->

<!-- feedback starts -->
<div class="feedback">
    <div class="container">
        <div class="row">
            <?php
                $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page'    => 1,
                    'orderby'           => 'menu_order',
                    'order'             => 'ASC',
                );

                $query = new WP_Query($args);

                while( $query->have_posts() ){
                    $query->the_post();

                    $client_name = get_field( 'client_name' );
                    $client_designation = get_field( 'client_designation' );
                    $client_description = get_field( 'client_description' );
            ?>
            <div class="col-lg-6 col-md-6 mb-3">
                <div class="feedback-img">
                    <?php the_post_thumbnail();?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center">
                <div class="row">
                    <div class="section-title responsive-m-auto">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="feedback-text">
                        <p> <?php echo esc_html( $client_description );?> </p>
                        <h4 class="responsive-center"> <?php echo esc_html( $client_name );?> </h4>
                        <h5 class="responsive-center"><?php echo esc_html( $client_designation );?></h5>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- feedback ends -->

<!-- newsletter starts -->
<div class="newsletter">
    <div class="container">
        <?php 
                $config = get_option( 'aducat_options' );

                if( $config[ 'newsletter_sec_title' ] ){
         ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3><?php echo esc_html( $config[ 'newsletter_sec_title' ] );?></h3>
                    <p><?php echo esc_html( $config[ 'newsletter_sec_description' ] );?></p>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter-form">
                    <!-- <input class="newsletter-field" name="search" id="search-field" type="text"
                         placeholder="Type your email address">
                     <a href="#"> SUBSCRIBE </a> -->

                    <?php echo do_shortcode( '[contact-form-7 id="70" title="newsletter"]' )?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter ends -->

<?php get_footer();?>