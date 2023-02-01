 <?php 
/**
 * Call Shortcode Callback function
 *
 * @param [attr] $attr
 * @param [content] $content
 * @return void
 */

 function wings_shortcode_book_page_block($attr,$content){
   
//Set Shortcode ATTRIBUTE
  $atts = shortcode_atts([
    
    'title' =>'',         
    ],$attr);

    ob_start();  

?>
 <!-- Shortcode Output Start -->

 <section class="booklist-section">
     <div class="container">
         <div class="row">
             <div class="">
                 <div class="section-title">
                     <?php echo $atts['title']  ?>
                 </div>
                 <div class="row mt-5">

                     <?php
                     $book =  new WP_Query([
                        'post_type' => 'books',
                        'post_per_page' => 9,
                    ])  ?>

                     <?php if($book -> have_posts()): ?>
                     <?php while($book -> have_posts()):$book->the_post()  ?>
                     <div class="col-6 col-md-4">
                         <div class="book m-2">
                             <div class="card border-0" style="width: 14rem">
                                 <a href=" <?php the_permalink() ?>">
                                     <img
                                         class="card-img"
                                         style="cursor: pointer"
                                         src=" <?php echo get_post_meta(get_the_ID(),'book_cover_page',true); ?>"
                                         alt="" /></a>
                                 <div class="card-body">
                                     <a href="./singlebook.html">
                                         <h3 class="card-title book-title"> <?php the_title()  ?></h3>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?php endwhile  ?>
                     <?php endif  ?>
                     <?php wp_reset_query()  ?>

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

    'name' => 'Wings Custom Book Page Block',
    'base' => 'wings_book_page',
    'category'  => 'Wings Personal',
    'icon' => 'vc_icon-vc-hoverbox',
    'description' => 'Custom Book Page Block Will Show',
    'params' =>[
        [
        'param_name' => 'title',
        'type' => 'textfield',
        'heading' => 'Add Title',
        ],
        
       
    ],
    
 ]);