<?php
    /**
    * Template Name: Event listing page
    */
    if(is_user_logged_in()==false){ wp_redirect('http://council/login/');}
?>
<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<div class="f-primary-b b-title-b-hr f-title-b-hr">tables</div>
<div  class="row">
  <div>
    <div class="b-shortcode-example">
      <table  width="80%" class="b-table-primary f-table-primary f-center">
        <?php
        $mypost = array( 'post_type' => 'Events', );
        $loop = new WP_Query( $mypost );
        ?>

        <tr>
          <th>Event Title</th>
          <th>Event Date</th>
          <th>Event Time</th>
          <th>Description</th>
        </tr>
        <?php while ( $loop->have_posts() ) : $loop->the_post();?>

        <tr>
          <td><?php echo the_title(); ?></td>
          <td><?php echo esc_html( get_post_meta( get_the_ID(), 'event_date', true ) ); ?></td>
          <td><?php echo esc_html( get_post_meta( get_the_ID(), 'event_time', true ) ); ?></td>
          <td><div>
                              <a href="<?php echo get_bloginfo('url'); ?>/events/<?php echo the_title();?>"  style="text-align:center" class="b-btn f-btn b-btn-md b-btn-default f-primary-b">Description</a>
                          </div></td>
        </tr>
        <?php endwhile; ?>
      </table>
    </div>
  </div>
</main><!-- .site-main -->
</div><!-- .content-area -->

  <?php get_footer(); ?>
