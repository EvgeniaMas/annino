<?php
/**
  Template Name: Главная
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
<section class="container">
  <h1 class="main_title">МБУ «МОЛОДЕЖНЫЙ <br class="phone_break"> КУЛЬТУРНО-ДОСУГОВЫЙ КОМПЛЕКС <br class="phone_break main_break"> МО АННИНСКОЕ ГОРОДСКОЕ ПОСЕЛЕНИЕ»</h1>
  </div>
   <div class="main_banner_container container-fluid">
    <div class="container">
     <div class="col-md-12">
      <div class="col-md-4 col-sm-4 col-xs-12 vertical_position">
        <div class="main_banner">
          <p class="main_banner_text">У каждого человека есть свой дом. У каждого человека есть близкие. У каждого человека есть место, где его всегда ждут. <br class="main_break"> Мы  искренне  говорим, что мы вас ждем и всегда рады видеть в нашем молодежном  культурно- досуговом комплексе.</p>
          <a href="<?php echo site_url('/о-комплексе'); ?>" class="main_about_complex">О комплексе</a>
         </div>
      </div> 
      <div class="col-md-8 col-sm-8 col-xs-12 vertical_position">
      <div class="animation_block">
   <img class="main_bg" src="<?php echo get_theme_file_uri('/img/main_bg.svg') ?>" alt="Молодежный культурно-досуговый комплекс"> 
   <div id="mobile_backs">
      <img  class="main_bg_mobile" src="<?php echo get_theme_file_uri('/img/main_bg_mobile.svg')?>" alt="">   
    </div> 
      <img class="cloud cloud1 animated" src="<?php echo get_theme_file_uri('/img/cloud1.svg') ?>" alt="Облако">
     <img class="cloud cloud2 animated" src="<?php echo get_theme_file_uri('/img/cloud2.svg') ?>" alt="Облако">
     <img class="cloud cloud3 animated" src="<?php echo get_theme_file_uri('/img/cloud3.svg') ?>" alt="Облако">
     <img class="cloud cloud4 animated" src="<?php echo get_theme_file_uri('/img/cloud4.svg') ?>" alt="Облако">
     <img class="cloud cloud5 animated" src="<?php echo get_theme_file_uri('/img/cloud5.svg') ?>" alt="Облако"> 
      </div>
     </div>
    </div>
   </div>
  </div>
<?php 
$homepagePosts = new WP_Query(array(
  'posts_per_page' => 3,
  'post_type' => 'post',
  'order' => 'DESC'
));
?>
<div class="container main_slider_mobile vertical_slider">
   <div id="carousel_news" class="carousel slide" data-ride="carousel" data-interval="4000">
<div class="carousel-inner"> 
<?php 
$count = 0;
while ($homepagePosts->have_posts()) {
$homepagePosts->the_post();
if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
    <?php 
    get_template_part( 'template-parts/slider', get_post_format() );
    ?>
    </div>
    <?php 
   $count++;
  } 
   wp_reset_postdata();
  ?>   
   </div><!-- carousel-inner -->
     <div class="slider_controller main"> 
          <ol class="carousel-indicators main">
           <li data-target="#carousel_news" data-slide-to="0" class="active"></li>
           <li data-target="#carousel_news" data-slide-to="1"></li>
           <li data-target="#carousel_news" data-slide-to="2"></li>           
         </ol>
       </div> <!-- slider_controller -->
       </div><!-- carousel_swipe -->
</div><!-- main_slider_mobile  -->
<div class="main_news desktop">
   <div class="container news_template">
<?php 
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
  <a class="main_more_news main_page" href="<?php echo site_url('/новости'); ?>">Смотреть все новости</a>
  </div>       
</div> 
<div class="container-fluid main_contact_block">
<div class="container">
<?php if ( have_posts() ) :
the_post();?> 
<?php the_content(); ?>
<?php endif; ?>
     <a href ="<?php echo site_url('/о-комплексе'); ?>#complex_vacancy" class="main_vacancy">Вакансии
     <svg class="arrow_svg" xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10">
          <polyline class="site_arrow" fill="none" stroke="#23286B" stroke-width="2" points="2 2 8 2 8 8" transform="rotate(45 3 .172)"/>
        </svg>
      </a>
 </div> 
</section> 


<?php get_footer();
?>
<script src="<?php echo get_theme_file_uri('js/slider_align.js') ?>" ></script> 
<script src="<?php echo get_theme_file_uri('js/jquery.touchSwipe.min.js') ?>" ></script>
<script src="<?php echo get_theme_file_uri('js/swipes.js') ?>" ></script> 