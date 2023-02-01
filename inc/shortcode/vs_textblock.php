 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_about_text_block($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'title' =>'',         
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="about-section">
     <div class="container-sm">
         <div class="row about-items">
             <div class="col-12 col-sm-6 mb-3">
                 <div class="card text-start shadow-lg">
                     <div class="card-body">
                         <h4 class="card-title"> <?php echo $atts['title'] ?></h4>
                         <p class="card-text">
                             <?php echo $content; ?>
                         </p>
                     </div>
                     <hr />
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

    'name' => 'Wings About Text Block',
    'base' => 'wings_about_text_block',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'about text block text will be rander',
    'params' =>[
        [
        'param_name' => 'title',
        'type' => 'textfield',
        'heading' => 'Add Title',
        ],
        [
            'param_name' => 'content',
            'type' => 'textarea_html',
            'heading' => ' Add Description',
        ],
        
       
    ],
    
 ]);