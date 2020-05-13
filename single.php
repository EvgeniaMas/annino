<?php
/**
 * The template for displaying all single posts.
 *
 * 
 */

get_header(); ?>
<div class="container">

<a class="all_news_link" href="<?php echo site_url('/новости'); ?>">
    <svg class="arrow_svg arrow_news" xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10">
      <polyline class="site_arrow" fill="none" stroke="#23286B" stroke-width="2" points="2 2 8 2 8 8" transform="rotate(45 3 .172)"/>
     </svg>НОВОСТИ
    </a>
</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endwhile; // End of the loop. ?>

</div>
<div class="container">
<a class="main_more_news single_link" href="<?php echo site_url('/новости'); ?>">Смотреть все новости</a>

</div>



<div class="container-fluid single_news_line">
<div class="main_news desktop">
   <div class="container news_template">
<?php 
$homepagePosts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'order' => 'DESC'
          ));

while ($homepagePosts->have_posts()) {
$homepagePosts->the_post();
?>
<div class="col-lg-4 col-md-6 col-sm-6 two_column_page">
<?php 
   get_template_part( 'template-parts/content', get_post_format() );
?>
</div>
<?php
  } 
  wp_reset_postdata();
?>
     </div> <!-- container -->
  </div> <!-- main -->

</div>
<?php get_footer(); ?>
