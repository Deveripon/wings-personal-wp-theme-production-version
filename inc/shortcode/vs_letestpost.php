 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_latest_post($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'title' =>'',
    'subtitle' =>'',          
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="blog-post-section">
     <div class="container-sm">
         <div class="row justify-content-between">


             <?php $post_item = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 4,
                 'orderby' => 'rand',
                 'order' => 'DESC',
                'offset'    => 0,
                    
            ])  ?>

             <?php if($post_item->have_posts()):  ?>
             <?php while($post_item->have_posts()):$post_item->the_post()  ?>
             <!-- blog-post -->
             <?php if(has_post_thumbnail()): ?>
             <div class="col-12 col-lg-6 mb-3">
                 <div class="blogpost card shadow-lg">
                     <!-- 	blog-post overlay -->
                     <div class="post-overlay">
                         <div class="description">
                             <a href="<?php the_permalink()?>">
                                 <h4>
                                     <?php the_title() ?><span>...</span>
                                 </h4>
                             </a>
                             <div class="post-details">
                                 <ul class="d-flex">
                                     <li>
                                         <a href="#">
                                             <i class="fa-solid fa-user" aria-hidden="true"></i></a>
                                     </li>
                                     <li><a href="#"> <?php the_author() ?></a></li>
                                     <li>
                                         <a href="#"><i class="fa-solid fa-calendar" aria-hidden="true"></i></a>
                                     </li>
                                     <li><a href="#"> <?php the_time('F d, Y ') ?></a></li>
                                 </ul>
                             </div>
                             <a class="read-more mt-3" href="<?php the_permalink() ?>">
                                 <i class="fa-solid fa-caret-right"></i>Read More</a>
                         </div>
                     </div>
                     <!-- 	blog-post overlay -->
                     <div class="row">
                         <div class="col-6 post-media">
                             <?php the_post_thumbnail() ?>
                         </div>
                         <div class="col-6 post-content">
                             <h2>
                                 <?php the_title()  ?>
                             </h2>
                             <div class="post-details">
                                 <ul class="d-flex">
                                     <li>
                                         <a href="#">
                                             <i class="fa-solid fa-user" aria-hidden="true"></i></a>
                                     </li>
                                     <li><a href="#"> <?php the_author() ?></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <?php endif;  ?>
             <?php endwhile; ?>
             <?php wp_reset_postdata() ?>
             <?php endif;  ?>
         </div>
         <div class="all-link-btn text-center">
             <a href="<?php echo site_url('/blog'); ?>" class="all-blog-link all-link">Read All Blogs</a>
         </div>
     </div>
 </section>
 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings Latest Post',
    'base' => 'wings_latest_post',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'Home page latest post section will show',
    
 ]);