<?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_separator(){
   
//Set Shortcode ATTRIBUTE


    ob_start();  

?>
<!-- Shortcode Output Start -->
<div class="saparator">
    <div class="saparate"></div>
</div>

<!-- Shortcode Output End -->
<?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Section Separator',
    'base' => 'wings_separator',
    'category'  => 'Wings Personal',
     'icon' => 'vc_icon-vc-hoverbox',
     'description' => 'Section Separator will be placed on section title',
    
 ]);
  ?>