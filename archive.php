<?php
/**
 * The template for displaying archive pages.
 */

get_header(); ?>

<div class="container">
<?php
 the_archive_title( '<h1 class="news_all_title">', '</h1>');
?>
</div>
	<div class="container all_news_page">	
		<?php if ( have_posts() ) : ?>			

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-6 two_column_page news_template vertical_slider">

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

</div><!-- #primary -->
<?php get_footer(); ?>
