<?php

/*
   Template Name: Courses
*/

get_header();

?>
<div class="course course-page">
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
                    'posts_per_page'    => -1,
              );

              $query = new WP_Query( $args );

              while( $query->have_posts() ){
                $query->the_post();

                $course_category = get_field( 'course_category' ); 
                $course_price = get_field( 'course_price' );

                // $course_title = get_field( 'course_title' ); 
                
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

            <?php } ?>

        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="button">
                    <a href="<?php the_permalink();?>"> <?php _e('View All');?> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>