 <?php 
  class wings_footer_quick_links_widget extends WP_Widget{
    
    public function __construct(){
        $widget_opt = [
            'classname' => 'custom-widget',
            'description' => 'Site Quick Links will go here',
        ];
        parent::__construct('wings_footer_quick_links_widget','Wings Quick Links',$widget_opt);
        
    }
    
 public function form($instance)
 {
    $title = ! empty($instance['title']) ? $instance['title'] :'';
    
    ?>
 <p>
     <label for="<?php echo $this->get_field_name('title') ?>">Title</label>
     <input type="text" class="widefat" id="<?php echo $this->get_field_id('title') ?>"
         name="<?php echo $this->get_field_name('title') ?>" value="<?php echo esc_attr($title) ?>">
 </p>

 <?php
 }

 public function update($new_instance, $old_instance)
 {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    return $instance;
 }

 public function widget($args, $instance)
 {
$title = $instance['title'];
 ?>
 <?php echo $args['before_widget'] ?>
 <div class="quick-links">
     <h3><?php if(esc_attr($title)==true){echo esc_attr($title);}else{}; ?></h3>
     <div class="saparator">
         <div class="saparate"></div>
     </div>
 </div>
 <div class="links">

     <?php wp_nav_menu([
        'theme_location' => 'secondary',
     ]) ?>
 </div>
 <?php echo $args['after_widget'] ?>

 <?php

 }

   











 }