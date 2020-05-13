<?php
/*
Template Name: Кружки
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
<div class="wrapper clubs">
 <?php get_header();?>
<svg class="clipper">
  <defs>
    <clipPath id="clipping">
      <path d="M253.1512,141.9591c-.0537,4.2236-.0181,9.5119-.1584,15.309s-.4566,12.103-1.214,18.362a90.7819,90.7819,0,0,1-3.8611,18.08,39.7971,39.7971,0,0,1-8.0995,14.4635,62.5281,62.5281,0,0,1-13.8914,10.7914,112.2611,112.2611,0,0,1-19.6352,9.0185,153.7222,153.7222,0,0,1-24.0724,6.31,172.593,172.593,0,0,1-27.2028,2.6657,70.0586,70.0586,0,0,1-38.4331-10.0826c-10.6592-6.4732-19.2648-15.5275-26.111-25.5691a134.9272,134.9272,0,0,1-15.5554-31.4932,143.5349,143.5349,0,0,1-6.7664-27.855c-2.5974-20.0451.0422-36.0051,5.9155-48.67a69.8175,69.8175,0,0,1,25.318-28.8978,104.1343,104.1343,0,0,1,32.7013-13.864A121.8864,121.8864,0,0,1,160.15,46.9591c4.1765,0,14.7776.289,14.7776.289s11.5925.8313,17.7517,1.9159A92.6837,92.6837,0,0,1,211.1223,54.28a62.1587,62.1587,0,0,1,16.85,9.89,54.2124,54.2124,0,0,1,11.2141,13.1539,79.4241,79.4241,0,0,1,7.96,17.6672,122.2118,122.2118,0,0,1,4.6678,21.7039A181.8077,181.8077,0,0,1,253.1512,141.9591Z" transform="translate(-67.1512 -46.9591)"/>  
    </clipPath>
  </defs>
</svg>
 
<div class="container activity_page_container">
<h2 class="activity_title">Кружки</h2>
  <div class="button_block">
    <span class="club_title"><img class="club_icon" src="<?php echo get_theme_file_uri('/img/activity/development.svg') ?> " alt="Иконка"><span>Развитие</span> </span>
    <span class="club_title"><img class="club_icon" src="<?php echo get_theme_file_uri('/img/activity/music.svg') ?> " alt="Иконка"><span>Музыка</span> </span>
    <span class="club_title"><img class="club_icon" src="<?php echo get_theme_file_uri('/img/activity/dance.svg') ?> " alt="Иконка"><span>Танцы</span> </span>
    <span class="club_title last"><img class="club_icon" src="<?php echo get_theme_file_uri('/img/activity/draw.svg') ?>" alt="Иконка"><span>Изо</span> </span>
   </div>

<div class="container clubs_inner_content"> 
  <div id="age_selected">Дети от 3 лет</div>
 <div class="col-md-12 vertical-tab-container clubs">
  
  <div id="age_selection">Выбрать возраст
    <svg class="age_select_arrow arrow_svg" xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7">
    <polyline class="site_arrow"  fill="none" stroke="#23286B" stroke-width="2" points="152.243 2 158.243 2 158.243 8" transform="scale(1 -1) rotate(-45 73 183.066)"/>
   </svg>

  </div>
    <div id="age_tab" class="col-lg-2 col-md-3 col-sm-2 col-xs-12 vertical-tab-menu">
    <div class="list-group clubs_age_menu">
     <a id="first_age_tab" href="#" class="list-group-item active text-center activity_clubs ">
      Дети от 3 лет
     </a>
      <a href="#" class="list-group-item text-center activity_clubs">
      Дети от 4 лет
      </a>
      <a href="#" class="list-group-item text-center activity_clubs">
      Дети от 7 лет
      </a>
      <a href="#" class="list-group-item text-center activity_clubs">
      Дети от 8 лет
      </a>
      <a href="#" class="list-group-item text-center activity_clubs">
      Дети от 9 лет
      </a>
      <a href="#" class="list-group-item text-center activity_clubs">
      Дети от 10 лет
      </a>
      <a href="#" class="list-group-item text-center activity_clubs">
      Для взрослых
      </a>
     </div><!-- /.list-group -->
    </div><!-- /.vertical-tab-menu -->


 <div class="col-lg-10 col-md-9 vertical-tab">
    <div class="vertical-tab-content active text-center for_clubs">     
<?php 
 $age = 'three';
include(locate_template('template-parts/club.php'));   ?> 
   </div><!-- tab --> 
 <div class="vertical-tab-content text-center for_clubs">
<?php 
 $age = 'four';
include(locate_template('template-parts/club.php'));   ?> 
 </div>
  <div class="vertical-tab-content text-center for_clubs">
<?php 
 $age = 'seven';
include(locate_template('template-parts/club.php'));   ?> 
 </div>
   <div class="vertical-tab-content text-center for_clubs">
<?php 
 $age = 'eight';
include(locate_template('template-parts/club.php'));   ?> 
 </div>
   <div class="vertical-tab-content text-center for_clubs">
<?php 
 $age = 'nine';
include(locate_template('template-parts/club.php'));   ?> 
 </div>
   <div class="vertical-tab-content text-center for_clubs">
 <?php 
 $age = 'ten';
include(locate_template('template-parts/club.php'));   ?> 
 </div>
    <div class="vertical-tab-content text-center for_clubs">
           <?php 
 $age = 'adult';
include(locate_template('template-parts/club.php'));   ?> 
 </div>
 </div><!-- /.vertical-tab -->
 </div><!-- /.vertical-tab-container -->
</div><!-- /.row -->
</div> <!-- container -->

 <div class="container link_container"> 
  <a href="<?php echo site_url('/документы');?>#doc_schedule" class="club_schedule">Расписание занятий</a>
</div>
</div> 
</div> <!-- wrapper -->
  <?php get_footer();

?>