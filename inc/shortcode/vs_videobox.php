 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_video_box($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'video_link' =>'',
   
        
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->
 <section class="workshop">
     <div class="container-sm">
         <div class="row">
             <div class="workshop-gallery mt-5">
                 <?php echo $content;  ?>
             </div>

         </div>

     </div>
 </section>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings Video Box',
    'base' => 'wings_video_box',
    'category'  => 'Wings Personal',
     'icon' => 'vc_icon-vc-hoverbox',
     'description'=> 'youtube video link will be given to show videos',
    'params' =>[
        [
        'param_name' => 'content',
        'type' => 'textfield',
        'heading' => 'Add Video Link',
        'description' => 'link must be a iframe code',
        ]   
       
    ],
    
 ]);