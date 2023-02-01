 <?php 
 
 /**
 * Add custom post type in theme
 * Custom post type for Workshop Gallery
 */

 function author_qoutes_custom_post_type(){
 $labels = array(
 'name' => _x('Qoutes','Post type general name', 'wingspersonal'),
 'singular_name' =>_x('Qoutes','Post type singular name', 'wingspersonal'),
 'add_new' => _x('Add New Qoutes','Add new item option','bookswingspersonal'),
 'add_new_item' => __('Add New Qoutes','wingspersonal'),
 'edit_item' => __('Edit Qoutes','wingspersonal'),
 'new_item'=> __('New Qoutes','wingspersonal'),
 'view_item'=> __('View Qoutes','wingspersonal'),
 'view_items'=> __('View Qoutes','wingspersonal'),
 'search_items'=> __('Search Qoutes','wingspersonal'),
 'not_found'=> __('Qoutes not found','wingspersonal'),
 'not_found_in_trash'=> __('No Qoutes found in trash','wingspersonal'),
 );
 $args = [
 'public' => true,
 'labels' => $labels,
 'description' => 'This is a custom post type for Qoutes',
 'exclude_from_search' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_nav_menus' => true,
 'show_in_admin_bar' => true,
 'show_in_rest' => true,
 'menu_position' => null,
 'menu_icon' => 'dashicons-format-quote',
 'supports' => ['title',],
 'taxonomies' => array(), // this is IMPORTANT
 'has_archive' => false,/**To show custom post type in default archive.php */
 'hierarchical' => true,

 ];
 register_post_type('qoutes',$args) ;
 };

 add_action('init', 'author_qoutes_custom_post_type');

 
 ?>