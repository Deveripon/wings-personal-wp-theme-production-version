 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_section_heading($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'heading' =>'',
    'color' =>'',
        
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->
 <div class="section-heading">
     <h2 class="title" style="color:<?php echo $atts['color'] ?>"><?php echo $atts['heading'] ?></h2>
 </div>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Section Heading',
    'base' => 'wings_heading',
    'category'  => 'Wings Personal',
     'icon' => 'vc_icon-vc-hoverbox',
     'description' => 'section custom heading will show',
    'params' =>[
        [
        'param_name' => 'heading',
        'type' => 'textfield',
        'heading' => 'Add Section Header Text',
        ], [
        'param_name' => 'color',
        'type' => 'colorpicker',
        'heading' => 'Header Text color',
        ]   
       
    ],
    
 ]);