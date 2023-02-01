       <?php global $devripon;  ?>
       <section
           class="page-bredcrumbs" style="
          background-image:
          url( <?php echo $devripon['breadcrumbs']['url']   ?>);">

           <div class="overlay">
               <div class="container">
                   <div class="row">
                       <div class="page-identifier">

                           <?php if(is_home())://is_home() means its blog page or not ?>
                           <h2 class="page-title">All Blogs</h2>
                           <p>
                               <a href=" <?php echo site_url()  ?>">Home</a> <span>/</span>
                               <span><a href="<?php echo site_url('/blog'); ?>">Blogs</a></span>
                           </p>


                           <?php elseif(is_front_page())://is_front_page means its home page  ?>
                           <h2 class="page-title"> <?php the_title()  ?></h2>
                           <p>
                               <a href=" <?php echo site_url()  ?>">Home</a>
                           </p>

                           <?php elseif(is_post_type_archive()) : ?>

                           <h2 class="page-title"> <?php post_type_archive_title()?></h2>
                           <p>
                               <a href=" <?php echo site_url()  ?>">Home</a> <span>/</span>
                               <span><a href="<?php site_url(); ?>"><?php post_type_archive_title()?></a></span>
                           </p>
                           <?php else:  ?>
                           <h2 class="page-title"> <?php the_title()?></h2>
                           <p>
                               <a href=" <?php echo site_url()  ?>">Home</a> <span>/</span>
                               <span><a href="<?php site_url(); ?>"><?php the_title()?></a></span>
                           </p>

                           <?php endif ?>


                       </div>
                   </div>
               </div>
           </div>
       </section>

       <?php
      //  if ( is_front_page() && is_home() ) {
          // Default homepage
       // } elseif ( is_front_page() ) {
          // static homepage
      //  } elseif ( is_home() ) {
          // blog page
      //  } else {
          //everyting else
      //  }  ?>