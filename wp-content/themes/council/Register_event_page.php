<?php
    /**
    * Template Name: Register event Page
    */
    if(is_user_logged_in()==false){ wp_redirect(get_home_url().'/login');}
?>

    <?php get_header(); ?>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
              <div class="container">

                <div class="b-form-row f-primary-l f-title-big c-secondary">Register An Event</div>
                <hr class="b-hr" />
                <form id="event_form" name="event_form" method="post" action="<?php echo get_home_url(); ?>/registereventprocessing">
                <div class="row b-form-inline b-form-horizontal">
                    <div class="col-xs-6">

                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="event_name">Event Name</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="event_name" id="event_name" class="form-control" />
                            </div>
                        </div>

                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="event_date">Event Date</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" class="form-control datepicker" name="event_date" id="event_date" class="form-control" />
                            </div>
                        </div>

                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="event_time">Event Time</label>
                            <div class="b-form-horizontal__input">
                              <input type="time" name="event_time" id="event_time" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="event_area">Event Area</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="event_area" id="event_area" class="form-control" />
                            </div>
                        </div>
                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="event_city">Event City</label>
                            <div class="b-form-horizontal__input">
                                <input type="text" name="event_city" id="event_city" class="form-control" />
                            </div>
                        </div>

                        <div class="b-form-row">
                            <label class="b-form-horizontal__label" for="event_description">Event Description</label>
                            <div class="b-form-horizontal__input">
                                <textarea class="form-control" name="event_description" id="event_description" placeholder="Message" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="b-form-row">
                          <div class="b-form-horizontal__input">
                            <input type="submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b" value="Register Event" tabindex="5" id="event_submit" name="event_submit" class="thread-button" />

        <input type="hidden" name="insert_post" value="post" />

        <?php wp_nonce_field( 'event_form' ); ?>
</div>
                      </div>
                    </div>
                </div>
<br><br>
</form>
</div>
            </main>
        </div>
        <?php get_footer(); ?>
