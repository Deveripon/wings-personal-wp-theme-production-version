 <?php  
 class wings_footer_about_widget extends WP_Widget{

    public function __construct(){
      parent::__construct('wings_footer_about_widget','Wings About',[
        'description'   => 'About info will be available here',
      ]);
    }   
    
    public function form($instance){
     
       $logotext = ! empty($instance['logotext']) ? $instance['logotext'] :''; 
       $logolink = ! empty($instance['logolink']) ? $instance['logolink'] : '';
       $address = ! empty($instance['address']) ? $instance['address'] :''; 
       $email = ! empty($instance['email']) ? $instance['email'] :''; 
       $website = ! empty($instance['website']) ? $instance['website'] : '';

        
 ?>

 <p>
     <img style="width:100%" id="logopreview" src="" alt="">
 </p>

 <p>
     <button style="padding: 11px; border: 1px dashed #ccc; width:100%" id="uploadlogo">Upload Logo</button>
     <style>
     button#uploadlogo:hover {
         background-color: #fff;
     }
     </style>
 </p>
 <p>
     <input type="hidden" class="widefat logolink" id="<?php echo $this->get_field_id('logolink') ?>"
         name="<?php echo $this-> get_field_name('logolink') ?>" value="<?php echo esc_attr($logolink) ?>">
 </p>

 <label style="display:none" for="<?php echo $this-> get_field_id('logotext') ?>">Logo Text</label>
 <input type="hidden" class="widefat" id="<?php echo $this->get_field_id('logotext') ?>"
     name="<?php echo $this-> get_field_name('logotext') ?>" value="<?php echo esc_attr($logotext) ?>">
 </p>

 <p>
     <label for="<?php echo $this->get_field_id('address')?>">Address</label>
     <textarea class="widefat" name="<?php echo $this->get_field_name('address') ?>"
         id="<?php echo $this->get_field_id('address')?>"><?php echo esc_attr($address)?></textarea>
 </p>
 <p>
     <label for="<?php echo $this-> get_field_id('email') ?>">Email</label>
     <input type="text" class="widefat" id="<?php echo $this->get_field_id('email') ?>"
         name="<?php echo $this->get_field_name('email') ?>" value="<?php echo esc_attr($email) ?>">
 </p>
 <p>
     <label for="<?php echo $this-> get_field_id('website') ?>">Website</label>
     <input type="text" class="widefat" id="<?php echo $this->get_field_id('website') ?>"
         name="<?php echo $this->get_field_name('website')  ?>" value="<?php echo esc_attr($website) ?>">
 </p>





 <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['logotext'] = strip_tags($new_instance['logotext']);
        $instance['logolink'] = strip_tags($new_instance['logolink']);
        $instance['address'] = strip_tags($new_instance['address']);
        $instance['email'] = strip_tags($new_instance['email']);
        $instance['website'] = strip_tags($new_instance['website']);
        return $instance;
    }



    
    public function widget($args, $instance)
    {

        $logotext = $instance['logotext'];
        $logolink = $instance['logolink'];
        $address = $instance['address'];
        $email = $instance['email']; 
        $website = $instance['website']; 
        
 ?>
 <?php echo $args['before_widget'] ?>
 <div class=" footer-logo">
     <a href="#">
         <h3><?php echo esc_attr($logotext) ?></h3>
         <img style="width:250px" src="<?php echo esc_attr($logolink) ?>" alt="">
     </a>
 </div>
 <div class="address mt-2">
     <p>
         <i class="fa-solid fa-location-dot"></i><?php echo esc_attr($address) ?>
     </p>
     <p><i class="fa-solid fa-envelope"></i> <?php echo esc_attr($email) ?></p>
     <p><i class="fa-solid fa-globe"></i> <?php echo esc_attr($website) ?></p>
 </div>
 <?php echo $args['after_widget'] ?>
 <?php 
 }




 }