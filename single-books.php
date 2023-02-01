 <?php get_header()  ?>
 <!-- blogpost section -->
 <?php if(is_single()): ?>
 <section class="blog-post-section mt-5">
     <div class="container">
         <div class="row">
             <div class="col-12 col-lg-8">
                 <div class="row book-wrapper">
                     <div class="col-12 col-md-6 mb-4">
                         <div class="book-image">
                             <img width="100%"
                                 src="<?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>"
                                 alt="" />
                         </div>
                     </div>
                     <div class="col-12 col-md-6 mb-4">
                         <div class="book-content">
                             <h2 class="book-title text-start">
                                 <?php the_title()  ?>
                             </h2>
                             <p class="book-description">
                                 <?php echo get_post_meta(get_the_ID(),'book_desc',true) ;  ?>
                             </p>
                             <table class="table table-borderless table-responsive">
                                 <tr>
                                     <td><strong>Publisher</strong></td>
                                     <td> <?php echo get_post_meta(get_the_ID(),'publisher_name',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>First Publish</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'published_date',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>ISBN</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'isbn_number',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>Language</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'language',true);  ?></td>
                                 </tr>
                                 <tr>
                                     <td><strong>Pages</strong></td>
                                     <td><?php echo get_post_meta(get_the_ID(),'page_quantity',true);  ?></td>
                                 </tr>
                             </table>
                             <a class="book-download-link"
                                 target="_blank" download=""
                                 href="<?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>">Download
                                 As
                                 Pdf</a>
                         </div>
                     </div>
                     <div class="col-12 my-5">
                         <!-- 
   //////////////////////Show Releted News ////////////////////////////
   ///////////////////////////////////////////////////////////////////////////////////////-->
                         <?php
$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 5,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
    echo ' <div class="section-title book-releted-news">Releted News</div>';
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
                         <?php get_template_part('template-parts/blogposts/blog');  ?>
                         <?php }
        wp_reset_postdata();
    
}
?>
                         <!-- 
   //////////////////////Show Releted News ////////////////////////////
   ///////////////////////////////////////////////////////////////////////////////////////-->
                     </div>
                 </div>

             </div>
             <div class="col-lg-4">
                 <?php get_sidebar() ?>
             </div>
             <!-- pagination section -->
             <?php the_posts_pagination()  ?>
             <!-- pagination section -->
             <br>
             <br>
         </div>

     </div>

 </section>
 <?php endif; ?>
 <!-- blogpost section -->



 <!-- Footer Section -->
 <?php  get_footer() ?>
 <!-- Footer Section -->