 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_author_books($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([       
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="books-publication">
     <div class="container-sm">
         <div class="row">
             <div class="col-12">
                 <div class="books-list">
                     <div class="row">
                         <?php $books = new WP_Query([
                            'post_type' => 'books',
                            'posts_per_page' =>12
                        ]) ?>
                         <?php if($books->have_posts()): ?>
                         <?php while($books->have_posts()):$books->the_post() ?>
                         <div class="col-12 col-md-6 col-lg-3 mb-3">
                             <div class="book shadow-lg">
                                 <div class="book-title">
                                     <a href="#">
                                         <h4> <?php the_title()  ?></h4>
                                     </a>
                                 </div>
                                 <div class="book-image">
                                     <img height="150px"
                                         src="<?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>"
                                         alt="" />
                                 </div>
                                 <hr />
                                 <a class="see-details" href="<?php the_permalink()?>"><i
                                         class="fa-solid fa-caret-right"></i>See Details</a>
                             </div>
                         </div>
                         <?php endwhile; ?>
                         <?php wp_reset_query() ?>
                         <?php endif; ?>
                     </div>
                 </div>
                 <div class="all-link-btn text-center">
                     <a href="<?php echo site_url('/books')?>" class="all-blog-link all-link">See All Books</a>
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

    'name' => 'Wings Book Box',
    'base' => 'wings_author_books',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'home page book section will show',
    
 ]);