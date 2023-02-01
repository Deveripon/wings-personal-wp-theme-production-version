 <?php 

 function wings_shortcode_featured_post($attr,$content){
   $atts = shortcode_atts([
    'background-image' => '',
    'section_css' =>'',
    
   ],$attr)
?>

 <?php ob_start(); ?>


 <!-- Out put will show here -->
 <section class="featured-post">
     <div class="container-sm">
         <div class="row">
             <div class="col-12">

                 <?php 
                $featured_post = new WP_Query([
                     'post_type' => 'post' ,
                     'posts_per_page' => 1,
                    'category_name' => 'featured', 
        
                ])
                ?>


                 <?php if($featured_post->have_posts()):  ?>
                 <?php while($featured_post->have_posts()):$featured_post->the_post()  ?>

                 <div class="post">
                     <div class="row">
                         <div class="col-12 col-md-6">
                             <div class="card-img post-image">
                                 <?php the_post_thumbnail()  ?>
                             </div>
                         </div>
                         <div class="col-12 col-md-6">
                             <div class="post-content">
                                 <div class="post-title">
                                     <a href="<?php the_permalink() ?>">
                                         <h4>
                                             <?php the_title() ?>
                                         </h4>
                                     </a>
                                 </div>
                                 <div class="post-details">
                                     <ul class="d-flex">
                                         <li>
                                             <a href="#">
                                                 <i class="fa-solid fa-user" aria-hidden="true"></i></a>
                                         </li>
                                         <li><a href="#"> <?php the_author()  ?></a></li>
                                         <li>
                                             <a href="#"><i class="fa-solid fa-calendar" aria-hidden="true"></i></a>
                                         </li>
                                         <li><a href="#"> <?php the_time('F d, Y')  ?></a></li>
                                     </ul>
                                 </div>

                                 <div class="post-description">
                                     <p>
                                         <?php echo wp_trim_words(get_the_content(), 100,'...'); ?>
                                     </p>
                                     <a href="<?php the_permalink() ?>">..read more <i
                                             class="fa-solid fa-caret-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

                 <?php endwhile;  ?>
                 <?php endif; ?>


             </div>
         </div>
     </div>
 </section>
 <!-- Out put will show here -->






 <?php return ob_get_clean(); ?>

 <?php

 };
 vc_map([
 'name' => 'Wings Featured Post',
 'base' => 'wings_featured_post',
 'category' => 'Wings Personal',
 "icon" => "vc_icon-vc-hoverbox",
 'description'=> 'Feacherd Category Post will be featured',
 ]);