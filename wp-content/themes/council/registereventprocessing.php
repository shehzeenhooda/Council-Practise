<?php
/* Template Name: Register event Processing */
 if(is_user_logged_in()==false){ wp_redirect(get_home_url().'/login'); }
get_header(); ?>

<div id="primary">
    <div id="content" role="main">
      <?php
if (isset($_POST['event_submit'])) {
  //var_dump($_POST);
$post_information = array(
    'post_title' => $_POST['event_name'],
    'post_content' => $_POST['event_description'],
    'post_type' => 'events',
    'post_status' => 'publish'
);

$my_id = wp_insert_post( $post_information );
var_dump($_POST['event_date']);
add_post_meta( $my_id, 'event_date', $_POST['event_date'], true );
add_post_meta( $my_id, 'event_time', $_POST['event_time'], true );
add_post_meta( $my_id, 'event_area', $_POST['event_area'], true );
add_post_meta( $my_id, 'event_city', $_POST['event_city'], true );
add_post_meta( $my_id, 'event_description', $_POST['event_description'], true );
$url = get_home_url(); ?>
<div tabindex="1"><b>THANK YOU</b></div>
<?php } ?>
</div>
</div>



 <?php get_footer();
?>
