<?php
/**
 * Template part for displaying single posts.
 *
 */

?> 
<div class="container">
<p class="main_news_date single">НОВОСТЬ — <?php the_time('j'); ?><span class="invisible_space"></span><?php the_time('F'); ?><span class="invisible_space"></span><?php the_time('Y'); ?></span></p>
<div class="col-md-12 single_title_container">
  <div class="col-md-9"><h2 class="single_news news_title"><?php the_title();?> </h2></div>
 <div class="col-md-3">
 	<span class="phone_date_single"><p class="main_news_date titled">НОВОСТЬ — <?php the_time('j'); ?><span class="invisible_space"></span><?php the_time('F'); ?><span class="invisible_space"></span><?php the_time('Y'); ?></span></p>  </span>
 </div>
</div>  
   <div class="col-lg-8 col-md-9">
         <div class="single_news news_text"> <?php the_content(); ?>	</div>
      </div>

</div>






