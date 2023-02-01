 <?php 
 /**
 * Register Custom Post Type
 * Post Type[Slider]
 * callback()custom_post_type_slider
 */
 function custom_post_type_slider(){
 $labels = array(
 'name' => _x('Slider','Post type general name', 'wingspersonal'),
 'singular_name' =>_x('slider','Post type singular name', 'wingspersonal'),
 'add_new' => _x('Add New slides','Add new booksslider option','bookswingspersonal'),
 'add_new_item' => __('Add New slides','wingspersonal'),
 'edit_item' => __('Edit slides','wingspersonal'),
 'new_item'=> __('New slides','wingspersonal'),
 'view_item'=> __('View slides','wingspersonal'),
 'view_items'=> __('View slides','wingspersonal'),
 'not_found'=> __('slider not found','wingspersonal'),
 'not_found_in_trash'=> __('No slider found in trash','wingspersonal'),
 );
 $args = [
 'public' => true,
 'labels' => $labels,
 'description' => 'This is a custom post type for Slider',
 'exclude_from_search' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_nav_menus' => true,
 'show_in_admin_bar' => true,
 'show_in_rest' => true,
 'menu_position' => null,
 'menu_icon' => 'dashicons-cover-image',
 'supports' => ['title','thumbnail'],
 'taxonomies' => array(), // this is IMPORTANT
 'has_archive' => false,/**To show custom post type in default archive.php */
 'hierarchical' => true,

 ];
 register_post_type('slider',$args) ;
 };

 add_action('init', 'custom_post_type_slider');
 ?>