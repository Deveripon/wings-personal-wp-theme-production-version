 <?php 
 
 
 /**
 * Add custom post type in theme
 * Custom post type for Workshop Gallery
 */

 function custom_post_type_enable_award(){

 $labels = array(
 'name' => _x('Awards','Post type general name', 'wingspersonal'),
 'singular_name' =>_x('award','Post type singular name', 'wingspersonal'),
 'add_new' => _x('Add New award','Add new books option','bookswingspersonal'),
 'add_new_item' => __('Add New award','wingspersonal'),
 'edit_item' => __('Edit award','wingspersonal'),
 'new_item'=> __('New award','wingspersonal'),
 'view_item'=> __('View award','wingspersonal'),
 'view_items'=> __('View award','wingspersonal'),
 'search_items'=> __('Search award','wingspersonal'),
 'not_found'=> __('award not found','wingspersonal'),
 'not_found_in_trash'=> __('No award found in trash','wingspersonal'),
 );
 $args = [

 'public' => true,
 'labels' => $labels,
 'description' => 'This is a custom post type for award',
 'exclude_from_search' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_nav_menus' => true,
 'show_in_admin_bar' => true,
 'show_in_rest' => true,
 'menu_position' => null,
 'menu_icon' => 'dashicons-awards',
 'supports' => ['title','editor','thumbnail'],
 'taxonomies' => array('category', 'post_tag'), // this is IMPORTANT
 'has_archive' => true, /**To show custom post type in default archive.php */
 'hierarchical' => false,
 'query_var' => true,
 'rewrite' => array('slug' => 'awards', 'with_front' => true),
 'capability_type' => 'post',

 ];
 register_post_type('award',$args) ;
 flush_rewrite_rules();
 };

 add_action('init', 'custom_post_type_enable_award');

 
 ?>