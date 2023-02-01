 <?php 

/**
* Set the theme default content width
*/
if(! isset($content_width)){
$content_width = 800;
}


/**
* Set up theme defaults and register theme supports for various wordpress features
* This function will hooked up into the after_setup_theme
*
*/
if(! function_exists('wings_personal_theme_setup')):


function wings_personal_theme_setup(){

    /**
    * add posat thumbnails support
    */
add_theme_support('post-thumbnails');
/**
* Make theme available for translation
* translation file can be found in the /languages/directory
*/
load_theme_textdomain('wingspersonal',get_template_directory().'/languages');

/**
* add default comments and post to head by rss feed
*/
add_theme_support('automatic-feed-link');

/**
* Make theme available to change custom background
*/
add_theme_support('custom-background');

/**
* Make theme available to change custom header
*/
add_theme_support('custom-header');

/**
* To change logo dynamically
*/
add_theme_support('custom-logo');

/**
* Theme menu dynamic support
*/
add_theme_support('menus');

/**
* add theme dynamic widget support
*/
add_theme_support('widgets');

/** HTML5 support **/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

/**
* to dynamic theme title and description
*/
add_theme_support('title-tag');


/**
* Theme post formater support
*/
$post_formats =['audio', 'video', 'gallery','aside'];
add_theme_support('post-formats',$post_formats);


/**
* register theme nav menus
* @primary to set the main navigation
* @secondary to set the footer navigation
*/
register_nav_menus([
'primary' => __('Main Menu','wingspersonal'),
'secondary' => __('Footer Menu','wingspersonal'),
]);

};
endif;
add_action('after_setup_theme','wings_personal_theme_setup');



/**
 * Add custom post type in theme
 * Custom post type for Books
 * 
*/

require_once 'inc/customposttype/award.php';
require_once 'inc/customposttype/books.php';
require_once 'inc/customposttype/qoutes.php';
require_once 'inc/customposttype/slider.php';



/**
 * Register a Sidebar For Blog Post
*/
function register_sidebar_function(){
    /**Register Blog sidebar*/
    register_sidebar([
    'id' => 'right_sidebar',
    'name' => 'Right Sidebar',
    'description' => 'Sidebar item will be displayed',
    'before_widget' => '<div class="post-widget">',
    'after_widget' => '</div>',
    'before_title' => ' <h2 class="post-title">',
    'after_title' => '</h2>',
    'show_in_rest' => '',
    ]);

    /**Register Footer Widgets*/
       register_sidebar([
       'id' => 'footer_sidebar',
       'name' => 'Footer Widgets',
       'description' => 'Footer item will be displayed',
       'before_title' => '',
       'after_title' => '',
       'before_widget' => '<div class="col-12 col-md-4">',
       'after_widget' => '</div>',
       'before_sidebar' => '',
       'after_sidebar' => '',
       'show_in_rest' => '',
       ]);

       /**
        * Register Custom Widgets
       */
        register_widget('wings_latest_post_widget');
        register_widget('wings_footer_about_widget');
        register_widget('wings_footer_address_widget');
        register_widget('wings_footer_quick_links_widget');



       
};
add_action('widgets_init','register_sidebar_function');







 
/*****************************************************************************************************************/
 /**
  * Enqueue the theme css and javascript files
  */
 
 function wings_group_css_js_enqueue(){
 /**
 * Theme css file enqueue here
 */
 wp_enqueue_style('wings_animate_css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
 wp_enqueue_style('wings_owlCarousel_css', get_template_directory_uri().'/assets/lib/owlCarousel/owl.carousel.min.css');
 wp_enqueue_style('wings_owlCarousel_animate_css',get_template_directory_uri().'/assets/lib/owlCarousel/animate.css');
 wp_enqueue_style('wings_lightbox_css',get_template_directory_uri().'/assets/lib/lightbox/lightbox.min.css');
 wp_enqueue_style('wings_uikit_css',get_template_directory_uri().'/assets/lib/uikit/uikit.min.css');
 wp_enqueue_style('wings_css_css',get_template_directory_uri().'/assets/css/style.css');
 wp_enqueue_style('wings_bootstrap_css','https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
 wp_enqueue_style('wings_fontawesome_css',get_template_directory_uri().'/assets/lib/fontawesome/css/fontawesome.min.css');
 wp_enqueue_style('wings_fontawesome_all_css',get_template_directory_uri().'/assets/lib/fontawesome/css/all.min.css');
 wp_enqueue_style('wings_main_css',get_stylesheet_uri());

 /**
 * Theme scripts file enqueue here
 */
 wp_enqueue_script('jquery');
 wp_enqueue_script('wings_owlcarousel_js',get_template_directory_uri().'/assets/lib/owlCarousel/owl.carousel.min.js',[],'true','true');
 wp_enqueue_script('wings_lightbox_js',get_template_directory_uri().'/assets/lib/lightbox/lightbox.min.js',['wings_owlcarousel_js'],'true','true');
 wp_enqueue_script('wings_paralaxjs_js',get_template_directory_uri().'/assets/lib/paralaxjs/parallax.min.js',['wings_owlcarousel_js','wings_lightbox_js'],'true','true');
 wp_enqueue_script('wings_uikit_js',get_template_directory_uri().'/assets/lib/uikit/uikit.min.js',['wings_owlcarousel_js','wings_lightbox_js','wings_paralaxjs_js'],'true','true');
 wp_enqueue_script('wings_bootstrap_js','https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js',['wings_lightbox_js','wings_paralaxjs_js','wings_uikit_js'],'true','true');
 wp_enqueue_script('wings_functions_js',get_template_directory_uri().'/assets/js/functions.js',['wings_lightbox_js','wings_paralaxjs_js','wings_uikit_js','wings_bootstrap_js'],'true','true');
 wp_enqueue_script('wings_app_js',get_template_directory_uri().'/assets/js/app.js',['wings_lightbox_js','wings_paralaxjs_js','wings_uikit_js','wings_bootstrap_js','wings_functions_js'],'true','true');
 wp_enqueue_script('wings_script_js',get_template_directory_uri().'/assets/js/script.js',['wings_lightbox_js','wings_paralaxjs_js','wings_uikit_js','wings_bootstrap_js','wings_functions_js','wings_app_js'],'true','true');
 wp_enqueue_script('wings_fontawsome_js',get_template_directory_uri().'/assets/lib/fontawsome/fontawesome.min.js',['wings_lightbox_js','wings_paralaxjs_js','wings_uikit_js','wings_bootstrap_js','wings_functions_js','wings_app_js','wings_script_js'],'true','true');
 wp_enqueue_script('wings_fontawsome_all_js',get_template_directory_uri().'/assets/lib/fontawsome/all.min.js',['wings_lightbox_js','wings_paralaxjs_js','wings_uikit_js','wings_bootstrap_js','wings_functions_js','wings_app_js','wings_script_js','wings_fontawsome_js'],'true','true');
  wp_enqueue_script('_js','https://code.jquery.com/jquery-3.6.3.min.js');

 
 }

 add_action('wp_enqueue_scripts','wings_group_css_js_enqueue');


/**
 * Enqueue scripts For custom code in admin pages
*/

function wings_admin_js_enqueue(){
    wp_enqueue_script('wings_admin_js',get_template_directory_uri().'/assets/js/admin.js');
    wp_enqueue_style('admin_css_wings',get_template_directory_uri().'/assets/css/admin.css');
}

add_action('admin_enqueue_scripts','wings_admin_js_enqueue');


 /********************************************************************************************************************/
 
 
function wings_shortcode(){
 
    add_shortcode('wings_contact','wings_contact_function');
    add_shortcode('wings_featured_post','wings_shortcode_featured_post');
    add_shortcode('wings_social_massage','wings_shortcode_social_massage');
    add_shortcode('wings_workshop','wings_shortcode_workshop');
    add_shortcode('wings_heading','wings_shortcode_section_heading');
    add_shortcode('wings_separator','wings_shortcode_separator');
    add_shortcode('wings_latest_post','wings_shortcode_latest_post');
    add_shortcode('wings_qoute_slider','wings_shortcode_quote_slider');
    add_shortcode('wings_award_slider','wings_shortcode_award_slider');
    add_shortcode('wings_about_text_block','wings_shortcode_about_text_block');
    add_shortcode('wings_about_news_post','wings_shortcode_news_post');
    add_shortcode('wings_author_books','wings_shortcode_author_books');
    add_shortcode('wings_video_box','wings_shortcode_video_box');
    add_shortcode('wings_facebook_like_box','wings_shortcode_facebook_like_box');
    add_shortcode('wings_social_link_box','wings_shortcode_social_link_box');
    add_shortcode('wings_news_block','wings_shortcode_news_page_block');
    add_shortcode('wings_book_page','wings_shortcode_book_page_block');
    add_shortcode('wings_award_page','wings_shortcode_award_page_block');
    add_shortcode('wings_about_page','wings_shortcode_about_page_block');
    add_shortcode('wings_about_page_text','wings_shortcode_about_page_text_block');
    add_shortcode('wings_address_map','wings_shortcode_address_map_block');
              
 };


 add_action('init','wings_shortcode');



/**
 * Required Shortcode File
*/

require_once 'inc/shortcode/sc_contact.php';
require_once 'inc/shortcode/vs_featuredpost.php';
require_once 'inc/shortcode/vs_massage.php';
require_once 'inc/shortcode/vs_workshop.php';
require_once 'inc/shortcode/vs_heading.php';
require_once 'inc/shortcode/vs_separator.php';
require_once 'inc/shortcode/vs_letestpost.php';
require_once 'inc/shortcode/vs_quoteslider.php';
require_once 'inc/shortcode/vs_awardslider.php';
require_once 'inc/shortcode/vs_textblock.php';
require_once 'inc/shortcode/vs_newspost.php';
require_once 'inc/shortcode/vs_books.php';
require_once 'inc/shortcode/vs_videobox.php';
require_once 'inc/shortcode/vs_fblikebox.php';
require_once 'inc/shortcode/vs_sociallink.php';
require_once 'inc/shortcode/vs_newsblock.php';
require_once 'inc/shortcode/vs_bookpage.php';
require_once 'inc/shortcode/vs_awardpage.php';
require_once 'inc/shortcode/vs_about.php';
require_once 'inc/shortcode/vs_about_text_block.php';
require_once 'inc/shortcode/vs_addressmap.php';















 /**
 * Require the widget file
 */
 require_once 'inc/widgets/latestpost.php';
 require_once 'inc/widgets/about.php';
 require_once 'inc/widgets/address.php';
 require_once 'inc/widgets/quicklink.php';



 /**
 * Bootstrap Walker Menu
 */

 require_once 'bs4navwalker.php';

 /**
 * Require CMB2 Framework
 */
 require_once 'libs/cmb2/init.php';
 require_once 'libs/cmb2/config.php';

 /**
 * Required Redux Framework
 */
 require_once 'libs/redux/ReduxCore/framework.php';
 require_once 'libs/redux/sample/config.php';