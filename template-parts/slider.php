<?php
/**
 * Template part for displaying posts.
 * * 
 */
?> 
<div class="outer">
 <div class="news_container all_news"> 
   <a class="link_to_single_news" href="<?php echo get_permalink(); ?>">  
      <div class="main_news_photo">
        <?php the_post_thumbnail('simplic_smallfeatured'); ?>       
      </div><!-- main_news_photo -->
      </a>    
       <div class="news_container_content">        
        <p class="main_news_date inner">НОВОСТЬ — <?php the_time('j'); ?><span class="invisible_space"></span><?php the_time('F'); ?><span class="invisible_space"></span><?php the_time('Y'); ?></span></p>       
        <a class="link_to_single_news" href="<?php echo get_permalink(); ?>">  
        <p class="main_news_title"><?php the_title();?></p> 
        <div class="main_news_text"><?php the_excerpt();?>  </div>
        </a>
       </div><!-- news_container_content -->  
     </div><!-- news_container all_news -->
 </div>
