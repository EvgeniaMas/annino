<?php
/*
Template Name: Страница по умолчанию
*/
?>
<!DOCTYPE html>
<html class="sites_pages" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/img/logo.svg') ?>">
     <?php wp_head(); ?>
  </head>
<body>
<?php get_header();?>
<?php if ( have_posts() ) :
the_post();?> 
<?php the_content(); ?>
<?php endif; ?>
<?php get_footer();
?>