 <?php 

 class wings_latest_post_widget extends WP_Widget{

    public function __construct(){
        parent::__construct('wings_latest_post_widget','Wings Latest Post',[
            'description' =>'latest post will display ',
        ]);
        
    }

    public function widget($args, $instance)
    {
 ?>

 <?php 
    $posts = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' =>4,
        'offset' => 3,
        'orderby' => 'rand',
        
    ])
 ?>

 <?php if($posts->have_posts()):?>
 <?php while($posts->have_posts()):$posts->the_post()  ?>
 <?php  echo $args['before_widget'] ?>
 <?php echo  $args['before_title'] ?>
 <?php the_title()  ?>
 <?php echo $args['after_title'] ?>
 <?php if(has_post_thumbnail()): ?>
 <div style="height: 200px" class="wid-post-media mb-2">
     <?php the_post_thumbnail()  ?>
 </div>
 <?php endif ?>

 <a class="read-more mt-3" href="<?php the_permalink()?>">
     <i class="fa-solid fa-caret-right"></i>Read More</a>
 <?php echo  $args['after_widget'] ?>
 <?php endwhile;  ?>
 <?php endif; ?>

 <?php
 }

 public function form($instance)
 {

 }


 }