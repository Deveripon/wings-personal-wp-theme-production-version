 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_quote_slider(){
   
//Set Shortcode ATTRIBUTE

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="qoutes">
     <div class="container-sm">
         <div class="row">
             <div class="col-12 author-qoutes owl-carousel">

                 <?php  $qoutes = new WP_Query([
                'post_type' => 'qoutes',
                'posts_per_page' => 10,
            ])?>
                 <?php if($qoutes->have_posts()):  ?>
                 <?php while($qoutes->have_posts()):$qoutes->the_post() ?>
                 <div class="qoutes-item">
                     <h4>
                         <i class="fa-solid fa-quote-left"></i> <?php the_title()  ?><i
                             class="fa-solid fa-quote-right"></i>
                     </h4>
                 </div>
                 <?php endwhile;  ?>
                 <?php endif; ?>


             </div>
         </div>
         <!-- <div class="all-link-btn text-center">
					<a class="all-blog-link all-link">Read All Speech</a>
				</div> -->
     </div>
 </section>
 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings Author Quotes',
    'base' => 'wings_qoute_slider',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'author qoutes slider will show',
 ]);