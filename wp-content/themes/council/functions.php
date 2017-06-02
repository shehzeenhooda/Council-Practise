<?php add_action( 'init', 'create_event' );

  function create_event() {
      register_post_type( 'events',
          array(
              'labels' => array(
                  'name' => 'Events',
                  'singular_name' => 'event',
                  'add_new' => 'Add New',
                  'add_new_item' => 'Add New event',
                  'edit' => 'Edit',
                  'edit_item' => 'Edit event',
                  'new_item' => 'New event',
                  'view' => 'View',
                  'view_item' => 'View event',
                  'search_items' => 'Search events',
                  'not_found' => 'No events found',
                  'not_found_in_trash' => 'No events found in Trash'
              ),

              'public' => true,
              'menu_position' => 15,
              'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
              'taxonomies' => array( '' ),
              'has_archive' => false
          )
      );
  }
    add_action( 'admin_init', 'event_meta_types' );
  function event_meta_types() {
   add_meta_box( 'event_meta_box',
       'event Details',
       'display_event_meta_box',
       'events', 'normal', 'high'
   );
}
function display_event_meta_box( $event ) {
   // Retrieve current name of the Director and Movie Rating based on review ID
   $event_time = esc_html( get_post_meta( $event->ID, 'event_time', true ) );
   $event_date = esc_html( get_post_meta( $event->ID, 'event_date', true ) );
   $event_area = esc_html( get_post_meta( $event->ID, '$event_area', true ) );
   $event_city = esc_html( get_post_meta( $event->ID, '$event_city', true ) );
   $event_description = esc_html( get_post_meta( $event->ID, '$event_description', true ) );

   echo '<pre>';
   print_r(plugin_dir_path( __FILE__ ));

     echo  '</pre>';
   ?>
   <table>
       <tr>
           <td style="width: 100%">Time</td>
           <td><input type="time" size="80" name="event_time" value="<?php echo $event_time; ?>" /></td>
       </tr>
       <tr>
             <td style="width: 100%">Date</td>
             <td><input type="date" size="80" name="event_date" value="<?php echo $event_date; ?>" /></td>
       </tr>
       <tr>
             <td style="width: 100%">Area</td>
             <td><input type="text" size="80" name="event_area" value="<?php echo $event_area; ?>" /></td>
       </tr>
       <tr>
             <td style="width: 100%">City</td>
             <td><input type="text" size="80" name="event_city" value="<?php echo $event_city; ?>" /></td>
       </tr>
       <tr>
             <td style="width: 100%">Description</td>
             <td><textarea id="event_description" placeholder="Message" style="width:100%;" rows="5"><?php echo $event_description; ?></textarea></td>
       </tr>
   </table>
   <?php
}

add_action( 'save_post', 'add_event_fields', 10, 2 );
function add_event_fields( $event_id, $event ) {
   // Check post type for movie reviews
   if ( $event->post_type == 'events' ) {
       // Store data in post meta table if present in post data
       if ( isset( $_POST['event_time'] ) && $_POST['event_time'] != '' ) {
           update_post_meta( $event_id, 'event_time', $_POST['event_time'] );
       }
       if ( isset( $_POST['event_date'] ) && $_POST['event_date'] != '' ) {
           update_post_meta(  $event_id, 'event_date', $_POST['event_date'] );
       }
       if ( isset( $_POST['event_area'] ) && $_POST['event_area'] != '' ) {
           update_post_meta(  $event_id, 'event_area', $_POST['event_area'] );
       }
       if ( isset( $_POST['event_city'] ) && $_POST['event_city'] != '' ) {
           update_post_meta(  $event_id, 'event_city', $_POST['event_city'] );
       }
       if ( isset( $_POST['event_description'] ) && $_POST['event_description'] != '' ) {
           update_post_meta(  $event_id, 'event_description', $_POST['event_description'] );
       }
   }
 }
 add_filter( 'wpmem_login_form', 'my_login_form_filter', 10, 2 );

function my_login_form_filter( $form, $action )
{
  $string = 'button-lg';
   $substr = 'buttons';

      $newstring = str_replace($substr, $string, $form);
      $newstring = str_replace("Existing Users Log In","Login User",$newstring);

    return   $newstring;
}

?>
