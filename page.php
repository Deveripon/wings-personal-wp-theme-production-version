 <?php get_header()  ?>
 <!-- blogpost section -->

 <?php if(get_post_meta(get_the_ID(),'sidebar_align',true)=='right'): ?>

 <section class="blog-post-section">
     <div class=" row">
         <div class="col-12 col-lg-8">
             <div class="post-wrapper">

                 <?php if(have_posts()){

                        while(have_posts()):the_post();
                        
                        the_post_thumbnail();

                        the_content();
                  
                     endwhile;
                     wp_reset_postdata();

                     } ?>


             </div>
         </div>
         <div class="col-lg-4">
             <?php get_sidebar() ?>
         </div>
         <br>
     </div>

 </section>
 <?php elseif(get_post_meta(get_the_ID(),'sidebar_align',true)=='left'): ?>
 <section class="blog-post-section">
     <div class="row">
         <div class="col-lg-4">
             <?php get_sidebar() ?>
         </div>
         <div class="col-12 col-lg-8">
             <div class="post-wrapper">

                 <?php if(have_posts()){

                        while(have_posts()):the_post();
                        
                        the_post_thumbnail();

                        the_content();
                  
                     endwhile;
                     wp_reset_postdata();

                     } ?>


             </div>
         </div>

         <br>
     </div>


 </section>
 <?php elseif(get_post_meta(get_the_ID(),'sidebar_align',true)=='full'): ?>
 <section class="blog-post-section">
     <div class="row">

         <div class="col-12 ">
             <div class="post-wrapper">

                 <?php if(have_posts()){

                        while(have_posts()):the_post();
                        
                        the_post_thumbnail();

                        the_content();
                  
                     endwhile;
                     wp_reset_postdata();

                     } ?>


             </div>
         </div>

         <br>
     </div>

 </section>
 <?php endif;  ?>

 <!-- blogpost section -->



 <!-- Footer Section -->
 <?php  get_footer() ?>
 <!-- Footer Section -->