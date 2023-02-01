 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_award_page_block($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'title' =>'',         
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="booklist-section award-section">
     <div class="container">
         <div class="row">
             <div class="col-12 col-lg-9">
                 <div class="section-title">
                     <?php echo $atts['title']  ?>
                 </div>
                 <div
                     class="row d-flex justify-content-center mt-5 align-content-center">


                     <?php $awards = new WP_Query([
                        'post_type' => 'award',
                        'posts_per_page' =>12,
                    ]) ?>

                     <?php if($awards->have_posts()):  ?>
                     <?php while($awards->have_posts()):$awards->the_post() ?>
                     <div class="col-12 col-sm-6 col-md-4 award">
                         <div class="card">
                             <img
                                 src="<?php the_post_thumbnail_url() ?>"
                                 alt="award"
                                 class="card-img" />
                             <div class="overlay">
                                 <a class="read-more mt-3" href="<?php the_permalink() ?>">
                                     <i class="fa-solid fa-caret-right"></i>View Details</a>
                             </div>
                         </div>
                     </div>
                     <?php endwhile; ?>
                     <?php wp_reset_query()  ?>
                     <?php endif  ?>

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

    'name' => 'Wings Custom Award Page Block',
    'base' => 'wings_award_page',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'Custom Award Page Block Will Show',
    'params' =>[
        [
        'param_name' => 'title',
        'type' => 'textfield',
        'heading' => 'Add Title',
        ],
        
       
    ],
    
 ]);