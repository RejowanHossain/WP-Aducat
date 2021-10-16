<!-- footer starts -->
<footer class="footertwo-section">
    <div class="container">
        <div class="row">

            <!-- Start: logo -->
            <div class="col-lg-3 col-md-6 col-sm-6">

                <?php 
                    if( is_active_sidebar( 'footer_sidebar1' ) ){
                        dynamic_sidebar( 'footer_sidebar1' );
                    }
                ?>
            </div>
            <!-- End: logo -->

            <!-- Start: Quick Link -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="foo_widgetquick_lnk">
                    <h5><?php _e( 'Category' )?></h5>
                    <!-- <ul>
                        <li>
                            <a href="courses.html">Privacy &amp; Poilicy</a>
                        </li>
                        <li>
                            <a href="courses.html">Terms &amp; Condition</a>
                        </li>
                        <li>
                            <a href="courses.html">Customer Support</a>
                        </li>
                        <li>
                            <a href="courses.html">For Business </a>
                        </li>
                        <li>
                            <a href="courses.html">Support</a>
                        </li>
                    </ul> -->
                    <?php 
                        if( is_active_sidebar( 'footer_sidebar2' ) ){
                            dynamic_sidebar( 'footer_sidebar2' );
                        }
                    ?>
                </div>
            </div>
            <!-- End: Quick Link -->

            <!-- Start: Useful Link -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="foo_widgetuseful_lnk">
                    <h5><?php _e( 'Useful Links' )?></h5>
                    <?php 
                        if( is_active_sidebar( 'footer_sidebar3' ) ){
                            dynamic_sidebar( 'footer_sidebar3' );
                        }
                     ?>
                </div>
            </div>
            <!-- End: Social Link-->

            <!-- Start: Contact Form -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="foo_widget footer_contact_form">
                    <h5><?php _e( 'Send Message' )?></h5>
                    <?php echo do_shortcode( '[contact-form-7 id="69" title="Send Message"]' )?>
                </div>
            </div>
            <!-- End: Contact Form-->
        </div>
    </div>
    <!-- Start:Subfooter -->
    <div class="subfooter">
        <?php 
            if( is_active_sidebar( 'copyright' ) ){
                dynamic_sidebar( 'copyright' );
            }
        ?>
    </div>
    <!-- End:Subfooter -->
</footer>
<!-- footer ends -->

<?php wp_footer();?>
</body>

</html>