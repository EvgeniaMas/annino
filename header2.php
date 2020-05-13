<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
      <!-- Yandex.Metrika counter -->
      <script type="text/javascript" >
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
      ym(62189164, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
      });
      </script>
      <noscript><div><img src="https://mc.yandex.ru/watch/62189164" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
      <!-- /Yandex.Metrika counter -->
  </head>
  <body> 
<div class="wrapper"> 
<header>
  <div class="container-fluid">
   <div class="navigation_mobile">
    <div class="container">
      <a class="logo" href="<?php echo site_url() ?>">
         <img class="annino_brand_mobile" src="<?php echo get_theme_file_uri('/img/logo.svg') ?>" alt="Лого">               
      </a>
    <div class="mobile_menu_icon">
       <img class="menu_closed clicked" src="<?php echo get_theme_file_uri('/img/menu_closed.svg') ?>" alt="Меню"> 
       <img class="menu_opened" src="<?php echo get_theme_file_uri('/img/menu_opened.svg') ?>" alt="Меню">    
    </div>   
    
   </div><!-- container -->
      <div class="mobile_menu_container">
        <img class="mobile_menu_bg" src="<?php echo get_theme_file_uri('/img/mobile_menu_bg.svg') ?>  " alt="">
        <div class="container">
          <ul class="mobile_menu">
            <li ><a <?php if (get_the_ID() == 5073){ echo 'class="active"';} ?> href="<?php echo site_url() ?>">Главная </a></li>
            <li><a <?php if (get_the_ID() == 5013) {echo 'class="active"';} ?> href="<?php echo site_url('/о-комплексе'); ?>">О комплексе</a></li> 
            <li> <a class="news_mobile_link" href="<?php echo site_url('/новости'); ?>">Новости</a> </li>                
            <li><a <?php if (get_the_ID() == 5058) {echo 'class="active"';} ?> href="<?php echo site_url('/кружки'); ?>">Кружки</a></li>
            <li><a <?php if (get_the_ID() == 5034) {echo 'class="active"';} ?>  href="<?php echo site_url('/библиотеки'); ?>">Библиотека</a></li> 
             <li><a <?php if (get_the_ID() == 5253) {echo 'class="active"';} ?>  href="<?php echo site_url('/документы'); ?>">Документация</a></li>
            <li><a <?php if (get_the_ID() == 5052) {echo 'class="active"';} ?> href="<?php echo site_url('/сотрудники'); ?>">Сотрудники</a></li>                
            <li><a <?php if (get_the_ID() == 1583) {echo 'class="active"';} ?>  href="<?php echo site_url('/опрос'); ?>">Опрос</a></li>
            <li><a <?php if (get_the_ID() == 5044) {echo 'class="active"';} ?>  href="<?php echo site_url('/контакты'); ?>">Контакты</a></li>
          </ul> 
        </div>        
          <ul id="blind">        
            <?php
          if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>        
            <?php dynamic_sidebar( 'custom-header-widget' ); ?>
         <?php endif; ?>  
       </ul> 
       </div><!-- container -->
   </div><!-- mobile_menu_container -->
</div><!-- container-fluid navigation_mobile -->
  <div class="desktop_navigation">
    <div class="container">
     <nav class="navigation"> 
        <ul class="top_menu">
          <a class="logo" href="<?php echo site_url() ?>">
              <img class="annino_brand" src="<?php echo get_theme_file_uri('/img/logo.svg') ?>" alt="Лого">         
            </a>        
            <li><a <?php if (get_the_ID() == 5073) { 
              echo 'class="active"';
            } ?> href="<?php echo site_url() ?>">Главная</a></li>
            <li><a <?php if (get_the_ID() == 5013) {echo 'class="active"';} ?> href="<?php echo site_url('/о-комплексе'); ?>">О комплексе</a></li> 
            <li> <a class="news_menu_link" href="<?php echo site_url('/новости'); ?>">Новости</a> </li>                
            <li><a <?php if (get_the_ID() == 5058) {echo 'class="active"';} ?> href="<?php echo site_url('/кружки'); ?>">Кружки</a></li>
            <li><a <?php if (get_the_ID() == 5034) {echo 'class="active"';} ?>  href="<?php echo site_url('/библиотеки'); ?>">Библиотека</a></li> 

            <?php
          if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
         <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
        <?php dynamic_sidebar( 'custom-header-widget' ); ?>
         </div>
        <?php endif; ?>
        </ul>   
     </nav>
  </div><!-- container -->
  <div class="container-fluid navigation_bottom">
    <div class="container tras">
      <ul class="bottom_menu">  
            <li><a <?php if (get_the_ID() == 5253) {echo 'class="active"';} ?>  href="<?php echo site_url('/документы'); ?>">Документация</a></li>
            <li><a <?php if (get_the_ID() == 5052) {echo 'class="active"';} ?> href="<?php echo site_url('/сотрудники'); ?>">Сотрудники</a></li>           
            <li><a <?php if (get_the_ID() == 1583) {echo 'class="active"';} ?>  href="<?php echo site_url('/опрос'); ?>">Опрос</a></li>
            <li><a <?php if (get_the_ID() == '5044') {echo 'class="active"';} ?>  href="<?php echo site_url('/контакты'); ?>">Контакты</a></li>        
      </ul>
    </div><!-- container -->
  </div><!-- container-fluid navigation_bottom -->
</div><!-- container-fluid navigation -->
</header>
