 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_about_page_text_block($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    'icon' =>'',
    'title' =>'',
    'description' => '',
    ],$attr);

    ob_start();  



?>
 <!-- Shortcode Output Start -->
 <section class="about-mukhles">
     <div class="container">
         <div class="row">
             <div class="col-12">

                 <div class="passage">
                     <h3><i class="fa-solid <?php echo $atts['icon']?>"></i> <?php echo $atts['title']?>
                     </h3>
                     <div class="content">
                         <?php echo $atts['description'] ?>
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

    'name' => 'Wings About Page Text Block',
    'base' => 'wings_about_page_text',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'Text Block With Icon Will Show',
    'params' =>[
    [
    'param_name' => 'icon',
    'type' => 'textfield',
    'heading' => 'Add Font awsome icon slug',
    ],
    [
    'param_name' => 'title',
    'type' => 'textfield',
    'heading' => 'Add Title',
    ],
     [
     'param_name' => 'description',
     'type' => 'textarea_html',
     'heading' => 'Add description',
     ]
    ],
    
 ]);