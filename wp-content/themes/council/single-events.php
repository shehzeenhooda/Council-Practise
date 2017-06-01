<?php //all pages load by this page
 get_header();
 $mypost = array( 'post_type' => 'events', );
     if ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="f-primary-b b-title-b-hr f-title-b-hr">
            <?php echo get_the_title();  ?>
        </div>
        <div class="row b-shortcode-example">
            <div class="col-md-12">
                <div class="b-tagline_title f-tagline_title f-primary-l">Descirption:</div>
                <div class="f-tagline_description b-tagline_description">
                    <?php echo get_the_content();  ?>
                </div>

                <div class="b-tagline_title f-tagline_title f-primary-l">Time:</div>
                <div class="f-tagline_description b-tagline_description">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'event_time', true ) );  ?>
                </div>
                <div class="b-tagline_title f-tagline_title f-primary-l">Date:</div>
                <div class="f-tagline_description b-tagline_description">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'event_date', true ) );  ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php endif; ?>

        <?php get_footer(); ?>
