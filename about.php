<?php
/*
Template Name: О проекте
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
<section class="container-fluid"> 
   <div class="container complex_main_container"> 
    <img class="complex_animation1 rotate " src="<?php echo get_theme_file_uri('/img/komplex/complex_anim1.svg') ?>    " alt="Иконка">
  <img class=" complex_animation2 rotate" src="<?php echo get_theme_file_uri('/img/komplex/complex_anim2.svg') ?>" alt="Иконка">
  <div class="complex_main_container_content">
       <h1 class="complex_title">МБУ «МОЛОДЕЖНЫЙ <br class="complex_phone_break"> КУЛЬТУРНО-ДОСУГОВЫЙ КОМПЛЕКС <br class="complex_desktop_break title"> МО АННИНСКОЕ ГОРОДСКОЕ ПОСЕЛЕНИЕ»</h1>
       <h3 class="complex_subtitle">«МКДК» — это творческий коллектив талантливых,<br class="complex_ipad_break">  профессиональных <br class="complex_desktop_break">людей, посвятивших жизнь любимому делу</h3>    
    <div class="col-md-12 tasks_container ">

      <img class="complex_bg" src="<?php echo get_theme_file_uri('/img/komplex/complex.png') ?>    " alt="МБУ Аннино">

    <div class="col-lg-6 col-md-12 col-sm-12">
      <p class="complex_text ">Это огромный опыт, это ответственный подход к работе, это стремление к наивысшему результату и безусловное качество.  В команде работают настоящие профессионалы своего дела: хореографы, преподаватели вокала, преподаватель изо, преподаватель цирковой студии, педагоги раннего развития. Это своего рода волшебство, которому мы даем жизнь.</p>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
         <p class="complex_text down_text">С каждым годом мы расширяемся, открываем новые студии, открываем новые направления. Мы приглашаем Вас в удивительный мир. Здесь звучат аплодисменты, здесь яркий свет прожекторов, здесь льется музыка и все движется в ритме танца. </p>
    </div>
  </div><!-- 12col -->
</div>
</div>
<div class="container">
  <p class="complex_tasks_title">Основные задачи МБУ «МКДК»</p>
</div>
 <div class="mobile_slider vertical_slider">
  <div id="carousel_mobile" class="carousel slide" data-ride="carousel" data-interval="4000">
  <div class="carousel-inner complex_tasks_items">
    <div class="item active"> 
        <div class="col-md-12 tasks_mob_container">
          
         <p class="complex_task_text"> Организации досуга и   отдыха жителей поселка</p>
   </div>
    </div>
    <div class="item">
        <div class="col-md-12 tasks_mob_container">
      <p class="complex_task_text"> Поддержка любительского художественного творчества</p>
    </div>
  </div>
    <div class="item">
        <div class="col-md-12 tasks_mob_container">
       <p class="complex_task_text"> Поддержка самодеятельной творческой инициативы и социально-культурной активности населения</p>
     </div>
    </div>
     <div class="item">
        <div class="col-md-12 tasks_mob_container">
      <p class="complex_task_text"> Удовлетворение общественных потребностей в сохранении и развитии традиционной культуры</p>
    </div>
    </div>
  </div>
  <!-- Элементы управления -->
  <div class="slider_controller">         
          <ol class="carousel-indicators">
           <li data-target="#carousel_mobile" data-slide-to="0" class="active"></li>
           <li data-target="#carousel_mobile" data-slide-to="1"></li>
           <li data-target="#carousel_mobile" data-slide-to="2"></li>
           <li data-target="#carousel_mobile" data-slide-to="3"></li>           
         </ol>          
      </div>
   </div>
</div>
<div class="desktop_data">
  <div class="container">
  <div class="col-md-12 ">
    <div class="col-md-6 col-sm-6">
          <div class="col-lg-1 col-md-2 vertical_position_complex">

            <img class="cube" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка"></div>
          <div class="col-lg-8 col-md-10 vertical_position2_complex">
             <p class="complex_task_text"> Организации досуга и <br class="complex_desktop_break">отдыха жителей поселка</p>
         </div>
    </div>
    <div class="col-md-6 col-sm-6">
         <div class="col-lg-1 col-md-2 vertical_position_complex">
          <img class="cube cube_two" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка"></div>
          <div class="col-lg-8 col-md-10 vertical_position2_complex">
          <p class="complex_task_text"> Поддержка любительского художественного творчества</p>
         </div>
    </div>
  </div><!-- 12col -->
    <div class="col-md-12 targets_container">
    <div class="col-md-6 col-sm-6">
          <div class="col-lg-1 col-md-2vertical_position_complex">
            <img class="cube cube_three" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка"></div>
          <div class="col-lg-8 col-md-10 vertical_position2_complex">
          <p class="complex_task_text"> Поддержка самодеятельной творческой инициативы и социально-культурной активности населения</p>
         </div>
    </div>
    <div class="col-md-6 col-sm-6">
         <div class="col-lg-1 col-md-2 vertical_position_complex">
          <img class="cube cube_four" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
        </div>
          <div class="col-lg-8 col-md-10 vertical_position2_complex">
          <p class="complex_task_text"> Удовлетворение общественных потребностей в сохранении и развитии традиционной культуры</p>
         </div>
    </div>
  </div><!-- 12col -->
</div>
</div>
<div class="container">
<p class="complex_target_title">Основные виды деятельности МБУ «МКДК»</p>
</div>
<div class="mobile_slider target_slider vertical_slider">
    <div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="5500">
     <div class="carousel-inner complex_target_items">
       <div class="item active">
          <div class="target_slider_container"> 
            <div>
           <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon1.svg') ?>" alt="Иконка">
          <p class="complex_target_text"> Организация деятельности кружков, творческих коллективов, студий декоративно-прикладного, изобразительного творчества</p>
        </div> 
        </div>   
    </div>
    <div class="item">
      <div class="target_slider_container">
        <div>
        <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon2.svg') ?>" alt="Иконка">
          <p class="complex_target_text"> Организация работы любительских объединений, клубов по интересам</p>
        </div>
        </div>         
    </div>
    <div class="item">
      <div class="target_slider_container">
        <div>
          <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon3.svg') ?>" alt="Иконка"> 
          <p class="complex_target_text"> Организация и проведение различных культурно-досуговых мероприятий</p> 
        </div>
        </div>             
    </div>
     <div class="item">
      <div class="target_slider_container">
        <div>
         <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon4.svg') ?>" alt="Иконка"> 
          <p class="complex_target_text"> Художественное оформление культурно-досуговых мероприятий</p>
        </div>
        </div>         
    </div>
  </div>
  <!-- Элементы управления -->
  <div class="slider_controller">          
          <ol class="carousel-indicators">
           <li data-target="#carousel1" data-slide-to="0" class="active"></li>
           <li data-target="#carousel1" data-slide-to="1"></li>
           <li data-target="#carousel1" data-slide-to="2"></li>
           <li data-target="#carousel1" data-slide-to="3"></li>           
         </ol>          
      </div>
   </div>
 </div>
<div class="desktop_data desktop_data_target">
  <div class="container">
  <div class="col-md-12 flex_container">
    <div class="col-md-6 col-sm-6">
          <div class="col-lg-1 col-md-2 vertical_position_complex">
            <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon1.svg') ?>" alt="Иконка">            
          </div>
          <div class="col-lg-8 col-md-8 vertical_position2_complex">
          <p class="complex_task_text"> Организация деятельности кружков, творческих коллективов, студий декоративно-прикладного, изобразительного творчества</p>
         </div>
    </div>

    <div class="col-md-6 col-sm-6">
         <div class="col-lg-1 col-md-2 vertical_position_complex">
         <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon2.svg') ?>" alt="Иконка">
        </div>
          <div class="col-lg-8 col-md-8 vertical_position2_complex">
          <p class="complex_task_text"> Организация работы любительских объединений, клубов по интересам</p>
         </div>
    </div>
  </div><!-- 12col -->
    <div class="col-md-12 complex_target_container flex_container">
    <div class="col-md-6 col-sm-6">
          <div class="col-lg-1 col-md-2 vertical_position_complex">
          <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon3.svg') ?>" alt="Иконка">
          </div>
          <div class="col-lg-8 col-md-8 vertical_position2_complex">
          <p class="complex_task_text"> Организация и проведение различных культурно-досуговых мероприятий</p>
         </div>
    </div>
    <div class="col-md-6 col-sm-6">
         <div class="col-lg-1 col-md-2 vertical_position_complex">
         <img class="complex_target_icon" src="<?php echo get_theme_file_uri('/img/komplex/komplex_icon4.svg') ?>" alt="Иконка">
        </div>
          <div class="col-lg-8 col-md-8 vertical_position2_complex">
          <p class="complex_task_text"> Художественное оформление культурно-досуговых мероприятий</p>
         </div>
    </div>
  </div><!-- 12col -->
  </div>
 </div> <!-- container -->
 </div>
</section>
<div class="container-fluid complex_contact_block">
<div class="container">
  <div id="complex_vacancy" class="col-md-12">
<?php if ( have_posts() ) :
the_post();?> 
<?php the_content(); ?>
<?php endif; ?>
    </div>
   </div>
 </div> 
</section>  

  <?php get_footer();

?>
<script src="<?php echo get_theme_file_uri('js/jquery.touchSwipe.min.js') ?>" ></script>
<script src="<?php echo get_theme_file_uri('js/swipes.js') ?>" ></script> 