<?php
/**
 * The main news file.
 *
 */

get_header(); ?>
<div class="container">
<h1 class="news_all_title">НОВОСТИ МБУ МОЛОДЕЖНОГО <br class="news_all_ipad_break">
КУЛЬТУРНО — ДОСУГОВОГО КОМПЛЕКСА</h1>
<div class="all_news_navigation">
  <span class=" news">НОВОСТИ</span> 
  <?php dynamic_sidebar( 'sidebar-1' ); ?></span>
</div>
</div>
	<div class="container">	
	 <div class="col-md-12 news_template vertical_slider all_news_page">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
              <div class="col-lg-4 col-md-6 col-sm-6 news_template vertical_slider content_all_news">
				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>
			</div>
			<?php endwhile; ?>
			<div class="pag_container container all_news">
			<?php icynets_simplic_the_posts_navigation(); ?>
		</div>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>	
	</div>
</div>
<?php get_footer(); ?>
