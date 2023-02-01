 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_social_link_box($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    'facebook' =>'',
    'twitter' =>'',
    'linkedin' =>'',
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
                         <h4><?php echo $atts['title']?></h4>
                         <div class="social-box d-flex gap-2">
                             <div class="facebook">
                                 <a href="<?php echo $atts['facebook']?>"><i
                                         class="fa-brands fa-facebook-f"></i></a>
                             </div>
                             <div class="twitter">
                                 <a style="background-color:#00acee" href="<?php echo $atts['twitter']?>"><i
                                         class="fa-brands fa-twitter"></i></a>
                             </div>
                             <div class="linkedin">
                                 <a style="background-color:#0072b1" href="<?php echo $atts['linkedin']?>"><i
                                         class="fa-brands fa-linkedin-in"></i></a>
                             </div>
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

    'name' => 'Wings Social Links',
    'base' => 'wings_social_link_box',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'all social links will be given',
    'params' =>[
        [
        'param_name' => 'title',
        'type' => 'textfield',
        'heading' => 'Add Title',
        ],
        [
        'param_name' => 'facebook',
        'type' => 'textfield',
        'heading' => 'Add Facebook Link',
        ],       
         [
        'param_name' => 'twitter',
        'type' => 'textfield',
        'heading' => 'Add Twitter Link',
        ], 
         [
         'param_name' => 'linkedin',
         'type' => 'textfield',
         'heading' => 'Add Linkedin Link',
         ],
             
       
    ],
    
 ]);