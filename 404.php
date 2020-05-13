<?php
/*
Template Name:404
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
<div class="wrapper not_found">
 <?php get_header();?>
    <div class="container">
    	<p class="no_page">Страница не найдена</p>
        <a class="no_page_link" href="<?php echo site_url() ?>">Вернуться на главную страницу</a>
     </div>
</div>
  <?php get_footer();

?>








