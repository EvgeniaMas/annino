<?php
/**
 * Template part for displaying staff.
 * * 
 */
?> 
  <?php  
 if($image){ 
?> 

<div class="staff masking"> 
   <img class="staff worker_photo" src="<?php echo esc_url($image['url']); ?>"> 
</div>  
  <?php 
    }
else  {?> 
<div class="staff masking"> 
 <img class="defalt" src="<?php echo get_theme_file_uri('/img/default.svg')?>"  alt="">
 </div> 
<?php
 } 
?>
<div class="staff_data_container">
<div class="staff worker_name"><?php the_title();?></div>
<p class="staff worker_position"> <?php the_field('staff_position'); ?></p>
</div>