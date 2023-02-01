 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_about_page_block($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
  'profile_photo' => '',
  'title' => '',
  'subtitle' => '',
  'description' => '',    
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="about-mukhles my-5">
     <div class="container">

         <div class="row mb-5">
             <div class="col-md-4 uk-animation-slide-left">
                 <div class="author_featured_img">
                     <img src=" <?php echo wp_get_attachment_url($atts['profile_photo']) ?>" alt="">

                 </div>
             </div>
             <div class="col-md-8">
                 <div class="section-title ">
                     <h3> <?php echo $atts['title'] ?></h3>
                     <span style="font-weight: 400;"> <?php echo $atts['subtitle'] ?></span>
                 </div>
                 <div class="content">
                     <?php echo $atts['description']  ?>
                 </div>

             </div>

         </div>
     </div>
 </section>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings About Block With Image',
    'base' => 'wings_about_page',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'About Info with Image will show',
    'params' =>[
        [
            'param_name' => 'profile_photo',
            'type' => 'attach_image',
            'heading'   => 'Upload Profile Image',
        ],
        [
            'param_name' => 'title',
            'type' => 'textfield',
            'heading' => 'Add Title',
        ],
        [
        'param_name' => 'subtitle',
        'type' => 'textfield',
        'heading' => 'Add subtitle',
        ],
        [
        'param_name' => 'description',
        'type' => 'textarea_html',
        'heading' => 'Add subtitle',
        ],
    ]
    
 ]);