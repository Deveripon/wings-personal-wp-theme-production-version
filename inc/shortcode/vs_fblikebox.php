 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_facebook_like_box($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'likebox' =>'',
    'title' =>'',
          
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="social-media">
     <div class="container-sm">
         <div class="row">
             <div class="social-section">
                 <div class="row d-flex justify-content-center">
                     <div class="col-12 col-md-6 mb-3">
                         <div class="facebook-like-box">
                             <h4> <?php echo $atts['title'] ?></h4>
                             <?php echo $content;  ?>
                         </div>
                     </div>
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

    'name' => 'Wings Facebook Likebox',
    'base' => 'wings_facebook_like_box',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'Facebook Likebox Plugin API will render',
    'params' =>[
        [
        'param_name' => 'title',
        'type' => 'textfield',
        'heading' => 'Add Title',
        ],
        [
        'param_name' => 'content',
        'type' => 'textarea_html',
        'heading' => 'Add likebox code',
        ],       
             
       
    ],
    
 ]);