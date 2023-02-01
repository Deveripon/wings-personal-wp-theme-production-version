		 <?php get_header()  ?>
		 <section class="award-section mt-5">
		     <div class="container">
		         <div class="row">
		             <div class="col-lg-9">
		                 <div class="row">
		                     <div class="col-8 award-image">
		                         <img src="<?php the_post_thumbnail_url() ?> " alt="" />
		                     </div>
		                     <div class=" col-12 mt-1">
		                         <div class="award-news">
		                             <div class="news-title">
		                                 <h3>
		                                     <?php the_title() ?>
		                                 </h3>
		                             </div>
		                             <div class="news-text">
		                                 <p>
		                                     <?php the_content()  ?>
		                                 </p>

		                             </div>
		                         </div>
		                     </div>
		                     <div class="col-12 my-5">
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
		                     </div>
		                 </div>
		             </div>

		             <div class="col-lg-3">
		                 <?php get_sidebar()  ?>
		             </div>
		         </div>
		     </div>
		 </section>
		 <?php get_footer() ?>