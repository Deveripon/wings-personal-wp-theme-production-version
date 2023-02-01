 <?php get_header()  ?>
 <!-- blogpost section -->
 <section class="blog-post-section mt-5">
     <div class="container">
         <div class="row">
             <div class="col-12 col-lg-8">
                 <div class="post-wrapper">

                     <?php if(have_posts()){

                        while(have_posts()):the_post();
            
                            get_template_part('template-parts/blogposts/blog');
                         endwhile;
                         wp_reset_postdata();

                     } ?>
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
 <!-- blogpost section -->



 <!-- Footer Section -->
 <?php  get_footer() ?>
 <!-- Footer Section -->