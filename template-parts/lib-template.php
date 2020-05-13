<?php
/**
 * Template part for displaying staff.
 * * 
 */
?> 
<?php  
 if($image){ 
?>
<div class="library masking">  
    <img id="clipped" class="library worker_photo" src="<?php echo esc_url($image['url']); ?>">  
   
</div>
 <?php 
   }
  else{?>
  	<div class="library masking">
       <img id="clipped" class="library worker_photo" src="<?php echo get_theme_file_uri('/img/default.svg')?>"  alt="">
   </div>
   <?php }
  ?>


<div class="library_data_container"> 
  <div class="library worker_name"><?php the_title();?></div>
  <p class="library worker_position"> <?php the_field('staff_position'); ?></p>
</div> 
 