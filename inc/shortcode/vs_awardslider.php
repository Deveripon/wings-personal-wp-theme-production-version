 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_award_slider($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'all_params' =>'',
    'slide_image' =>'',
    'slide_heading_text' =>'',
    'slide_heading_color' =>'',
    'slide_desc_text' =>'',
    'slide_desc_color' =>'',
    'slide_background_color' =>'',
    
    
        
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->
 <section class="awards-achivement">
     <div class=" container-fluid">
         <div class="award_slider owl-carousel">
             <!-- /////////////////////////////////////////////////////// -->
             <!--   get all parameter value -->
             <?php $param_values =  $atts['all_params'];
                 //parse all parameter value into array
                                 $param_arr = vc_param_group_parse_atts( $param_values );
                                 //break the parameter values by foreach loop
                                 foreach ($param_arr as $item){  
                                   $image_id =   $item['slide_image'];
                                   $image_url_wings =  wp_get_attachment_url($image_id);
                                   ?>
             <div class="slide" style="background-color:<?php echo $item['slide_background_color']; ?>">
                 <div class=" row">
                     <div class="col-7">
                         <div class="slide-image">
                             <img src="<?php echo $image_url_wings ?>" alt="Slider Image">
                         </div>
                     </div>
                     <div class="col-5">
                         <div class="slide-content" style="padding: 20px">
                             <h4 style="color:<?php echo $item['slide_heading_color']; ?>">
                                 <?php echo $item['slide_heading_text'];  ?></h4>
                             <p style="color:<?php echo $item['slide_desc_color']; ?>">
                                 <?php   echo $item['slide_desc_text']; ?></p>
                         </div>
                     </div>
                 </div>
             </div>
             <?php
             }
             ?>
             <!-- /////////////////////////////////////////////////////// -->


         </div>
 </section>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings Image Slider',
    'base' => 'wings_award_slider',
    'category'  => 'Wings Personal',
     'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'All image slider including award slider will be rendered',
    'params' =>[
         [
            'param_name' => 'all_params',
            'type' => 'param_group',
            'params' =>[
                [
                   'param_name' => 'slide_image',
                   'type' => 'attach_image',
                   'heading' => 'Add Slide Image',
                ],
                [
                    'param_name' => 'slide_heading_text',
                    'type' => 'textfield',
                    'heading' => 'Add Slide Heading Text',
                ],
                [
                    'param_name' => 'slide_heading_color',
                    'type' => 'colorpicker',
                    'heading' => 'Add Slide Heading Text Color',
                ],
                [
                'param_name' => 'slide_desc_text',
                'type' => 'textarea',
                'heading' => 'Add Slide Description Text',
                ],
                [
                'param_name' => 'slide_desc_color',
                'type' => 'colorpicker',
                'heading' => 'Add Slide Description Text Color',
                ],
                [
                'param_name' => 'slide_background_color',
                'type' => 'colorpicker',
                'heading' => 'Add Slide Background Color',
                ],
                
            ]
         ]    
    ],
    
 ]);