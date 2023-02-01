   <div class="post">
       <div class="post-title">
           <a href="<?php the_permalink() ?>">
               <h2>
                   <?php if(the_title()=== true):  ?>

                   <?php the_title()  ?>

                   <?php endif  ?>

               </h2>
           </a>
       </div>
       <div class="post-details">
           <ul class="d-flex">
               <li class="d-flex">
                   <a href="#"><i class="fa-solid  fa-folder-open"></i><?php the_category() ?></a>
               </li>
               <li>
                   <a href="#"><i class="fa-solid fa-calendar-days"></i> <?php the_time('F d, Y')  ?></a>
               </li>
               <li>
                   <a href="<?php the_permalink()?> "><i class="fa-solid fa-user"></i> <?php the_author() ?></a>
               </li>
           </ul>
       </div>

       <?php if( has_post_thumbnail()):  ?>
       <div class=" post-media">
           <?php the_post_thumbnail() ?>
       </div>
       <?php endif  ?>

       <div class="post-content">
           <?php if(! is_single()):  ?>
           <?php echo wp_trim_words(get_the_content(),100,'...')  ?>
           <a href="<?php the_permalink() ?>">..read more</a>
           <br>
           <hr />
           <?php else: ?>
           <?php  the_content(); ?>
           <br>
           <hr />
           <?php comments_popup_link('No Comments','One Comments','% Comments');?>
           <hr>
           <?php comments_template('/comments.php')  ?>
           <?php endif ?>
       </div>

   </div>