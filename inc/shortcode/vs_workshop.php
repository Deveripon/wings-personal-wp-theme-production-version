 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_workshop($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'gallery_image' =>'',
   
        
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->
 <section class="workshop">
     <div class="container-sm">
         <div class="row">
             <div class="workshop-gallery mt-5">
                 <?php 
             
               $image_id =  $atts['gallery_image'];
                 $exploded =   explode(',',$image_id);
              ?>
                 <?php  foreach($exploded as $item){ 
                    $image_url = wp_get_attachment_url($item);
                    ?>
                 <img src="<?php echo $image_url ?>" alt="">

                 <?php  }

                 ?>

             </div>

         </div>

     </div>
 </section>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Image Gallery',
    'base' => 'wings_workshop',
    'category'  => 'Wings Personal',
     'icon' => 'vc_icon-vc-hoverbox',
     'description' => 'Image Gallery Will Show',
    'params' =>[
        [
        'param_name' => 'gallery_image',
        'type' => 'attach_images',
        'heading' => 'Add Gallery Image',
        ]   
       
    ],
    
 ]);