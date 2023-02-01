 <?php /**
* Add custom post type in theme
* Custom post type for Books
*/

function custom_post_type_enable_function(){
$labels = array(
'name' => _x('Books','Post type general name', 'wingspersonal'),
'singular_name' =>_x('book','Post type singular name', 'wingspersonal'),
'add_new' => _x('Add New Book','Add new books option','bookswingspersonal'),
'add_new_item' => __('Add New Book','wingspersonal'),
'edit_item' => __('Edit Book','wingspersonal'),
'new_item'=> __('New Book','wingspersonal'),
'view_item'=> __('View Book','wingspersonal'),
'view_items'=> __('View Book','wingspersonal'),
'search_items'=> __('Search Book','wingspersonal'),
'not_found'=> __('Book not found','wingspersonal'),
'not_found_in_trash'=> __('No books found in trash','wingspersonal'),
);
$args = [
'public' => true,
'labels' => $labels,
'description' => 'This is a custom post type for Books',
'exclude_from_search' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'show_in_rest' => true,
'menu_position' => null,
'menu_icon' => 'dashicons-book-alt',
'supports' => ['title'],
'taxonomies' => array('category', 'post_tag'), // this is IMPORTANT
'has_archive' => true,/**To show custom post type in default archive.php */
'hierarchical' => true,

];
register_post_type('books',$args) ;
};

add_action('init', 'custom_post_type_enable_function'); ?>