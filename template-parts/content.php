<?php
/**
 * Template part for displaying posts.
 * * 
 */
?> 

 <div class="news_container all_news"> 
 <a class="link_to_single_news" href="<?php echo get_permalink(); ?>">
      
       <div class="main_news_photo">
       	<?php the_post_thumbnail('simplic_smallfeatured'); ?>       
      </div><!-- main_news_photo -->
       <div class="news_container_content">
        <p class="main_news_date inner">НОВОСТЬ — <?php the_time('j'); ?><span class="invisible_space"></span><?php the_time('F'); ?><span class="invisible_space"></span><?php the_time('Y'); ?></span></p>       

        <p class="main_news_title"><?php the_title();?></p> 
        <div class="main_news_text"><?php the_excerpt();?>	</div>

        <a class="main_news_link news_block" href="<?php echo get_permalink(); ?>">
      <?php esc_attr_e('Подробнее', 'icynets-simplic'); ?>
        <svg class="arrow_svg" xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10">
          <polyline class="site_arrow" fill="none" stroke="#23286B" stroke-width="2" points="2 2 8 2 8 8" transform="rotate(45 3 .172)"/>
        </svg>
    </a>
    </div><!-- news_container_content -->
    </a>
  </div><!-- news_container all_news -->
  