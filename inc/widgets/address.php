 <?php  

 class wings_footer_address_widget extends WP_Widget{
    

    public function __construct(){
        parent::__construct('wings_footer_address_widget','Wings Adress',[
            'description' =>  'Office address will be available',
            'classname' => 'custom-widget',
        ]);
    }
 
    
 public function form($instance){

 $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
 $officetitle1 = ! empty($instance['officetitle1']) ? $instance['officetitle1']:'';
 $officeadd1 = ! empty($instance['officeadd1']) ? $instance['officeadd1']:'';
 $officetitle2 = ! empty($instance['officetitle2']) ? $instance['officetitle2']:'';
 $officeadd2 = ! empty($instance['officeadd2']) ? $instance['officeadd2']:'';
 $officetitle3 = ! empty($instance['officetitle3']) ? $instance['officetitle3']:'';
 $officeadd3 = !empty($instance['officeadd3']) ? $instance['officeadd3']:'';
 

 ?>
 <p>
     <label for="<?php echo $this->get_field_id('title')?>">Title</label>
     <input type="text" class="widefat" name="<?php echo $this->get_field_name('title')?>"
         id="<?php echo $this->get_field_id('title')?>"
         value=" <?php echo esc_attr( $title ); ?>">
 </p>
 <p>
     <label for=" <?php echo $this->get_field_id('officetitle1')?>">Office Title</label>
     <input type="text" class="widefat" name="<?php echo $this->get_field_name('officetitle1')?>"
         id="<?php echo $this->get_field_id('officetitle1')?>" value="<?php echo esc_attr($officetitle1)?>">
 </p>
 <p>
     <label for="<?php echo $this->get_field_id('officeadd1')?>">Office Address</label>
     <textarea type="text" class="widefat" name="<?php echo $this->get_field_name('officeadd1') ?>"
         id="<?php echo $this->get_field_id('officeadd1')?>"><?php echo esc_attr($officeadd1)?></textarea>
 </p>
 <hr>
 <p>
     <label for="<?php echo $this->get_field_id('officetitle2')?>">Office Title 2</label>
     <input type="text" class="widefat" name="<?php echo $this->get_field_name('officetitle2') ?>"
         id="<?php echo $this->get_field_id('officetitle2')?>" value="<?php echo esc_attr($officetitle2)?>">
 </p>
 <p>
     <label for="<?php echo $this->get_field_id('officeadd2')?>">Office Address 2</label>
     <textarea type="text" class="widefat" name="<?php echo $this->get_field_name('officeadd2') ?>"
         id="<?php echo $this->get_field_id('officeadd2')?>"><?php echo esc_attr($officeadd2)?></textarea>
 </p>
 <hr>
 <p>
     <label for="<?php echo $this->get_field_id('officetitle3')?>">Office Title 3</label>
     <input type="text" class="widefat" name="<?php echo $this->get_field_name('officetitle3') ?>"
         id="<?php echo $this->get_field_id('officetitle3')?>" value="<?php echo esc_attr($officetitle3)?>">
 </p>
 <p>
     <label for="<?php echo $this->get_field_id('officeadd3')?>">Office Address 3</label>
     <textarea type="text" class="widefat" name="<?php echo $this->get_field_name('officeadd3') ?>"
         id="<?php echo $this->get_field_id('officeadd3')?>"><?php echo esc_attr($officeadd3) ?></textarea>
 </p>
 <hr>

 <?php
 }

public function update($new_instance, $old_instance)
{
    $instance = $old_instance;

    $instance['title'] = strip_tags($new_instance['title']);
    $instance['officetitle1'] = strip_tags($new_instance['officetitle1']);
    $instance['officeadd1'] = strip_tags($new_instance['officeadd1']);
    $instance['officetitle2'] = strip_tags($new_instance['officetitle2']);
    $instance['officeadd2'] = strip_tags($new_instance['officeadd2']);
    $instance['officetitle3'] = strip_tags($new_instance['officetitle3']);
    $instance['officeadd3'] = strip_tags($new_instance['officeadd3']);
    return $instance;
}

   
    public function widget($args, $instance)
    {
        $title = $instance[ 'title' ];
        $officetitle1 = $instance[ 'officetitle1'];
        $officeadd1 = $instance[ 'officeadd1' ];
        $officetitle2 = $instance[ 'officetitle2'];
        $officeadd2 = $instance[ 'officeadd2' ];
        $officetitle3 = $instance[ 'officetitle3'];
        $officeadd3 = $instance[ 'officeadd3' ];
         
  
       
    ?>

 <?php echo $args['before_widget']  ?>
 <div class="quick-links office-address">
     <h3><?php echo esc_attr($title)?></h3>
     <div class="saparator">
         <div class="saparate"></div>
     </div>
 </div>
 <div class="links address-list">
     <div class="list-item">
         <label for="#"> <?php if(esc_attr($officetitle1)== true){echo esc_attr($officetitle1);}else{}?></label>
         <p>
             <?php if(esc_attr($officeadd1)== true){echo esc_attr($officeadd1);}else{} ?>
         </p>
     </div>
 </div>
 <div class="links address-list">
     <div class="list-item">
         <label for="#"> <?php if(esc_attr($officetitle2)== true){echo esc_attr($officetitle2);}else{}?></label>
         <p>
             <?php if(esc_attr($officeadd2)== true){echo esc_attr($officeadd2);}else{} ?>
         </p>
     </div>
 </div>
 <div class="links address-list">
     <div class="list-item">
         <label for="#"> <?php if(esc_attr($officetitle3)== true){echo esc_attr($officetitle3);}else{}?></label>
         <p>
             <?php if(esc_attr($officeadd3)== true){echo esc_attr($officeadd3);}else{} ?>
         </p>
     </div>
 </div>
 <?php echo $args['after_widget']  ?>


 <?php
    }
   

 }