 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_news_post($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([       
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="highlights-section">
     <div class="container-sm">
         <div class="row">
             <div class="col-12">
                 <div class="row news-area d-flex justify-content-center">

                     <?php 
                $news_post = new WP_Query([
                     'post_type' => 'post' ,
                     'posts_per_page' => 3,
                    'category_name' => 'News', 
        
                ])
                ?>
                     <?php if($news_post->have_posts()):  ?>
                     <?php while($news_post->have_posts()):$news_post->the_post() ?>
                     <div class="col-12 col-md-6 col-lg-4">
                         <div class="news-card">
                             <div class="card text-left">
                                 <div class="card-image">
                                     <img
                                         src="<?php echo the_post_thumbnail_url()?>"
                                         alt=""
                                         class=" card-img-top" />
                                 </div>
                                 <div class="card-body">
                                     <div class="details d-flex gap-sm-3">
                                         <div class="category d-flex gap-2">
                                             <i class="fa-solid fa-folder-open"></i>
                                             <p> <?php the_category()  ?></p>
                                         </div>
                                         <div class="time d-flex gap-2">
                                             <i class="fa-solid fa-calendar" aria-hidden="true"></i>
                                             <p> <?php the_time('F d, Y') ?></p>
                                         </div>
                                     </div>
                                     <p class="card-text">
                                         <?php echo wp_trim_words(get_the_content(),25,'...') ?>
                                     </p>
                                     <a class="read-more" href="<?php the_permalink()?>">Read more <i
                                             class="fa-solid fa-caret-right"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?php endwhile;
                        wp_reset_query();
                      ?>
                     <?php endif;  ?>
                 </div>
             </div>
         </div>
         <div class="all-link-btn text-center" style="margin-bottom: 0px">
             <a href="<?php the_permalink()?>news " class="all-blog-link all-link">Read
                 All
                 News</a>
         </div>
     </div>
 </section>

 <!-- Shortcode Output End -->
 <?php
    return ob_get_clean();
 }

 vc_map([

    'name' => 'Wings News',
    'base' => 'wings_about_news_post',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'news pages news post will show',
    
 ]);