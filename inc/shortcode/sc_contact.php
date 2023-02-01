 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_contact_function($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
        'background-color'    => 'skyblue',
        'font-size' =>  '10px',
        'font-weight' => 'bold',
        'font-family' => '',
        'font-style' => 'italic',
        'margin' => '',
        'padding' => '30px',
        'height' => '100%',
        'width' => '100%',
        'text-align' => 'center',
        'line-height' => '',
        'css' => '',
        
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <h2
     class="= <?php echo $atts['css'] ?>"
     style="background-color: <?php echo $atts['background-color']?>;padding: <?php echo $atts['padding'] ?>; width:
 <?php echo $atts['width'] ?>">
     <?php echo $content ?>
 </h2>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings Location',
    'base' => 'wings_contact',
    'category'  => 'Wings Personal',
     'icon' => 'vc_icon-vc-hoverbox',
     'description' => 'depricated',    
    'params' =>[
        [
            'param_name' => 'content',
            'type' => 'textarea',
            'heading' => 'Address',
        ],
        [
            'param_name' => 'background-color',
            'type' => 'colorpicker',
            'heading' => 'Background Color',
        ],
         [
            'type' => 'css_editor',
            'heading' => 'Css',
            'param_name' => 'css',
         ]
    ],
    
 ]);