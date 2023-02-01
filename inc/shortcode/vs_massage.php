 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_social_massage($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'title' =>'',
    'subtitle' =>'',          
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="covid-alert-section">
     <div class="container-sm alert-section pt-3">
         <div class="row">
             <div class="col-12">
                 <div class="covid-alert">
                     <h4> <?php echo $atts['title'] ?></h4>
                     <h5> <?php echo $atts['subtitle']?></h5>

                     <p id="social-massage" style="margin-left:0px !important"> <?php echo $content  ?></p>

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

    'name' => 'Wings Text Block',
    'base' => 'wings_social_massage',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description'  => 'Custom massage for people will show',
    'params' =>[
        [
        'param_name' => 'title',
        'type' => 'textfield',
        'heading' => 'Add Title',
        ],
         [
         'param_name' => 'subtitle',
         'type' => 'textfield',
         'heading' => 'Add Subtitle',
         ],
        [
            'param_name' => 'content',
            'type' => 'textarea_html',
            'heading' => ' Add Your Massage Text',
        ],
        
       
    ],
    
 ]);