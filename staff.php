<?php
/*
  Template Name: Сотрудники
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
<svg class="clipper">
  <defs>
    <clipPath id="clipping">
      <path d="M253.1512,141.9591c-.0537,4.2236-.0181,9.5119-.1584,15.309s-.4566,12.103-1.214,18.362a90.7819,90.7819,0,0,1-3.8611,18.08,39.7971,39.7971,0,0,1-8.0995,14.4635,62.5281,62.5281,0,0,1-13.8914,10.7914,112.2611,112.2611,0,0,1-19.6352,9.0185,153.7222,153.7222,0,0,1-24.0724,6.31,172.593,172.593,0,0,1-27.2028,2.6657,70.0586,70.0586,0,0,1-38.4331-10.0826c-10.6592-6.4732-19.2648-15.5275-26.111-25.5691a134.9272,134.9272,0,0,1-15.5554-31.4932,143.5349,143.5349,0,0,1-6.7664-27.855c-2.5974-20.0451.0422-36.0051,5.9155-48.67a69.8175,69.8175,0,0,1,25.318-28.8978,104.1343,104.1343,0,0,1,32.7013-13.864A121.8864,121.8864,0,0,1,160.15,46.9591c4.1765,0,14.7776.289,14.7776.289s11.5925.8313,17.7517,1.9159A92.6837,92.6837,0,0,1,211.1223,54.28a62.1587,62.1587,0,0,1,16.85,9.89,54.2124,54.2124,0,0,1,11.2141,13.1539,79.4241,79.4241,0,0,1,7.96,17.6672,122.2118,122.2118,0,0,1,4.6678,21.7039A181.8077,181.8077,0,0,1,253.1512,141.9591Z" transform="translate(-67.1512 -46.9591)"/>  
    </clipPath>
  </defs>
</svg>
<div class="container_fluid limit">
<div class="container staff">
  <h2 class="staff_title">Давайте познакомимся!</h2>
   <div class="col-md-12 staff_block ">
       <img class="staff_first_block_bg desktop" src="<?php echo get_theme_file_uri('/img/staff/staff_bg1.png') ?> " alt="МДК">
       <div class="staff_first_block_bg mobile"> 
          <img src="<?php echo get_theme_file_uri('/img/staff/staff_bg_mobile.svg') ?> " alt="МДК">   
       </div>
       <img class="animation staff animation1 rotate" src="<?php echo get_theme_file_uri('/img/staff/staff_anim1.svg') ?> " alt="МДК">
       <img class="animation staff animation2 rotate" src="<?php echo get_theme_file_uri('/img/staff/staff_anim2.svg') ?>  " alt="МДК">
   <div class="col-lg-7 col-md-8 col-sm-8 staff_first_contant">
      <h3 class="staff_subtitle">В нашем молодежном культурно-досуговом комплексе работают 29 клубных формирований!</h3>
    </div>
    <div class="col-md-7 col-sm-7 staff_first_contant">
       <p class="staff_text">Из них 22 творческих коллектива, кружков и студий, 6 любительских объединений и народный самодеятельный ансамбль «Новоселье». В наш общий дом приходят заниматься творчеством, петь, танцевать, рисовать 509 участников клубных формирований детей, молодежи и взрослых. И для всех находится дело по интересам!</p>
    </div>
   <div class="col-md-11 col-sm-11 col-xs-12 staff_first_contant">
    <p class="staff_desc">В МБУ «МКДК» работают умные, профессиональные, доброжелательные и неравнодушные сотрудники. <br>Давайте познакомимся!</p>
   </div>
   </div>
  </div>
<!-- </div> -->
<div class="container staff staff_blocks_interval">

<?php 
          $staffpagePosts = new WP_Query(array(          
            'post_type' => 'staff',
            'posts_per_page' => 300,
            'order' => 'DESC'
          ));
?>

  <p class="slider_title">Кто создает чистоту и уют?</p>
<!--  <div class="row"> -->
   <div class="col-xs-11 col-md-11 col-centered">
   <div id="carousel" class="carousel slide staff_slider" data-ride="carousel" data-type="multi" data-interval="4000">
  <div class="carousel-inner ">
<?php 
$count = 0;
while ($staffpagePosts->have_posts()) {
$staffpagePosts->the_post();
$manager= get_field('staff_category');

if( $manager == 'clean'){
$image = get_field('worker_photo');
the_post_thumbnail_url( 'thumbnail' );

if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
   
     <div class="carousel-col"> 
       <?php include(locate_template('template-parts/staff-template.php'));?>  

     </div>

    </div>
    <?php 
   $count++;
  } 
}  
  ?>   
   </div><!-- carousel-inner -->
    <!-- Controls -->
        <div class="left carousel-control desktop_control">
          <a href="#carousel" role="button" data-slide="next">
            <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
               <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
           </svg>    
            <span class="sr-only">Previous</span>
          </a>
        </div>

        <div class="right carousel-control desktop_control">
          <a href="#carousel" role="button" data-slide="prev">
             <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
              <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="1085 3.728 1103 3.728 1103 21.728" transform="rotate(45 546.293 -1306.14)"/>
          </svg>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- right carousel-control desktop_control -->
      </div><!-- inner -->
    </div> <!-- carousel -->
   </div> <!-- col -->



<div class="container staff staff_blocks_interval">
  <p class="slider_title">Кто владеет важной информацией, хранит и делится ею?</p>
 <!--   <div class="row"> -->
   <div class="col-xs-11 col-md-11 col-centered">
   <div id="carousel2" class="carousel slide staff_slider" data-ride="carousel" data-type="multi" data-interval="5500">
  <div class="carousel-inner ">
<?php 
$count = 0;
while ($staffpagePosts->have_posts()) {
$staffpagePosts->the_post();
$manager= get_field('staff_category');
 $image = get_field('worker_photo'); 
if( $manager == 'holder'){
if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
   
     <div class="carousel-col"> 
       <?php include(locate_template('template-parts/staff-template.php'));?>  

     </div>

    </div>
    <?php 
   $count++;
  } 
}  
  ?>   
   </div><!-- carousel-inner -->
    <!-- Controls -->
        <div class="left carousel-control desktop_control">
          <a href="#carousel2" role="button" data-slide="next">
            <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
               <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
           </svg>    
            <span class="sr-only">Next </span>
          </a>
        </div>

        <div class="right carousel-control desktop_control">
          <a href="#carousel2" role="button" data-slide="prev">
             <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
              <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="1085 3.728 1103 3.728 1103 21.728" transform="rotate(45 546.293 -1306.14)"/>
          </svg>
            <span class="sr-only">Previous</span>
          </a>
        </div><!-- right carousel-control desktop_control -->
      </div><!-- inner -->
    </div> <!-- carousel -->
   </div> <!-- col -->
<!-- </div> --> <!-- row -->
<div class="container-fluid staff_second_block ">
<div class="staff_second_block_bg">
  <img src="<?php echo get_theme_file_uri('/img/staff/staff_bg2.svg') ?>" alt="МДК">
</div>
<div class="staff_second_block_ipad">
<img  src="<?php echo get_theme_file_uri('/img/staff/staff2_bg_ipad.svg') ?>" alt="МДК"> 
</div> 
   
      <img class="animation staff animation3 rotate" src="<?php echo get_theme_file_uri('/img/staff/staff_anim3.svg') ?>" alt="МДК">
       <img class="animation staff animation4 rotate" src="<?php echo get_theme_file_uri('/img/staff/staff_anim4.svg') ?>" alt="МДК">
    <div class="container staff_second_block_content staff_blocks_interval">
       <p class="slider_title">Кто помогает перемещаться во времени и пространстве?</p>
         <?php 
     while ($staffpagePosts->have_posts()) {
     $staffpagePosts->the_post();
     $driver = get_field('staff_category');
      if( $driver == 'driver'){
         $image = get_field('worker_photo'); ?>

         <?php include(locate_template('template-parts/staff-template.php'));?> 

      <?php     
     }
   } 
   wp_reset_postdata();
  ?>
   </div>
</div>


<div class="container staff library_staff_section">
  <p class="slider_title">Кто является хранителем знаний?<br class="phone_break staff"> Наши библиотекари!</p>

  <div class="desktop_library ">
  <div class="col-md-10 col-md-offset-1">

   <?php 
     while ($staffpagePosts->have_posts()) {
$staffpagePosts->the_post();
 $image = get_field('worker_photo'); 
$lib = get_field('staff_category');
if( $lib == 'novo' || $lib == 'annino'){  ?>
     <div class="col-md-4">     
       <?php include(locate_template('template-parts/staff-template.php'));?>  
  
      </div>
   <?php 
    }
 } 
   wp_reset_postdata();
  ?>


    
  </div>
  </div>
</div>






<div class="container staff library_mobile_slider staff_blocks_interval">  
<!--  <div class="row"> -->
   <div class="col-xs-11 col-md-11 col-centered">
   <div id="carousel_lib" class="carousel slide staff_slider" data-ride="carousel" data-type="multi" data-interval="7000">
  <div class="carousel-inner ">
<?php 
$count = 0;
while ($staffpagePosts->have_posts()) {
$staffpagePosts->the_post();
$manager= get_field('staff_category');
 $image = get_field('worker_photo'); 
if( $manager == 'novo' || $manager == 'annino'){
if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
   
     <div class="carousel-col"> 
       <?php include(locate_template('template-parts/staff-template.php'));?>  

     </div>

    </div>
    <?php 
   $count++;
  } 
}  
  ?>   
   </div><!-- carousel-inner -->
    <!-- Controls -->
        <div class="left carousel-control desktop_control">
          <a href="#carousel_lib" role="button" data-slide="next">
            <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
               <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
           </svg>    
            <span class="sr-only">Previous</span>
          </a>
        </div>

        <div class="right carousel-control desktop_control">
          <a href="#carousel_lib" role="button" data-slide="prev">
             <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
              <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="1085 3.728 1103 3.728 1103 21.728" transform="rotate(45 546.293 -1306.14)"/>
          </svg>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- right carousel-control desktop_control -->
       </div><!-- inner -->
    </div> <!-- carousel -->
   </div> <!-- col -->
<!-- </div> --> <!-- row -->
<div class="container-fluid double_blocks">
<img class="animation staff animation5 rotate" src="<?php echo get_theme_file_uri('/img/staff/staff_anim5.svg') ?>" alt="МДК">
<div class="container staff staff_third_block staff_blocks_interval">
  <p class="slider_title">Кто помогает думать, мыслить и творить? <br class="phone_break staff ">
Руководители студий, кружков, коллективов, любительских объединений</p>
<!-- <div class="row"> -->
   <div class="col-xs-11 col-md-11 col-centered">
   <div id="carousel3" class="carousel slide staff_slider" data-ride="carousel" data-type="multi" data-interval="4000">
  <div class="carousel-inner ">
<?php 
$count = 0;
while ($staffpagePosts->have_posts()) {
$staffpagePosts->the_post();
$manager= get_field('staff_category');
 $image = get_field('worker_photo'); 
if( $manager == 'club'){
if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
   
     <div class="carousel-col"> 
       <?php include(locate_template('template-parts/staff-template.php'));?>  

     </div>

    </div>
    <?php 
   $count++;
  } 
}  
  ?>   
   </div><!-- carousel-inner -->
    <!-- Controls -->
        <div class="left carousel-control desktop_control">
          <a href="#carousel3" role="button" data-slide="next">
            <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
               <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
           </svg>    
            <span class="sr-only">Previous</span>
          </a>
        </div>

        <div class="right carousel-control desktop_control">
          <a href="#carousel3" role="button" data-slide="prev">
             <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
              <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="1085 3.728 1103 3.728 1103 21.728" transform="rotate(45 546.293 -1306.14)"/>
          </svg>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- right carousel-control desktop_control -->
       </div><!-- inner -->
    </div> <!-- carousel -->
   </div> <!-- col -->
<!-- </div> --> <!-- row -->
<div class="container staff management staff_blocks_interval">
  <p class="slider_title">Кто помогает всем тем, кто создает уют, хранит знания,<br class="phone_break staff"> делится информацией, творит и развивает?</p>
  <!--   <div class="row"> -->
    <div class="col-xs-11 col-md-11 col-centered">
<div id="carousel4" class="carousel slide staff_slider" data-ride="carousel" data-type="multi" data-interval="5500">
  <div id="manager_slides" class="carousel-inner ">
<?php 
$count = 0;
while ($staffpagePosts->have_posts()) {
$staffpagePosts->the_post();
$manager= get_field('staff_category');
 $image = get_field('worker_photo'); 
if( $manager == 'manager'){
if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
   
     <div class="carousel-col"> 
       <?php include(locate_template('template-parts/staff-template.php'));?>  

     </div>

    </div>
    <?php 
   $count++;
  } 
}  
  ?>   
   </div><!-- carousel-inner -->
    <!-- Controls -->
        <div class="left carousel-control desktop_control">
          <a href="#carousel4" role="button" data-slide="next">
            <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
               <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
           </svg>    
            <span class="sr-only">Previous</span>
          </a>
        </div>

        <div class="right carousel-control desktop_control">
          <a href="#carousel4" role="button" data-slide="prev">
             <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
              <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="1085 3.728 1103 3.728 1103 21.728" transform="rotate(45 546.293 -1306.14)"/>
          </svg>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- right carousel-control desktop_control -->
       
       </div><!-- inner -->
    </div> <!-- carousel -->
   </div> <!-- col -->
 </div> <!-- limit -->

<?php get_footer();
?>
<script src="<?php echo get_theme_file_uri('js/slider.js') ?>" ></script> 
<script src="<?php echo get_theme_file_uri('js/jquery.touchSwipe.min.js') ?>" ></script>
<script src="<?php echo get_theme_file_uri('js/swipes.js') ?>" ></script> 