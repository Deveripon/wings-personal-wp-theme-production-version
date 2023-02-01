 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_address_map_block($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'title' =>'',
    'location' =>'',                   
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->
 <section class="contact-us-section">
     <div class="container">
         <div class="address-section shadow-lg">
             <div class="row">
                 <div class="col-12">
                     <div class="row">
                         <div class="col-6">
                             <div class="address text-start">
                                 <h4> <?php echo $atts['title'] ?></h4>
                                 <p>
                                     <?php echo $atts['location']  ?>
                                 </p>
                             </div>
                         </div>
                         <idiv class="col-6">
                             <?php echo $content;  ?>
                         </idiv>
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

    'name' => 'Wings Address Map',
    'base' => 'wings_address_map',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'Address With Map Location Show Here',
    'params' => [
        [
            'param_name' => 'title',
            'type' => 'textfield',
            'heading' => 'Add Title',
        ],
        
         [
         'param_name' => 'location',
         'type' => 'textarea',
         'heading' => 'Add Location',
         ],
         [
         'param_name' => 'content',
         'type' => 'textarea_html',
         'heading' => 'Add Map Location embedded Code',
         ],
    ]
    
 ]);