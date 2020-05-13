<?php
/**
  Template Name: Библиотека
  

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

<div class="container-fluid">
  <div class="container">
	 <p class="library_title">БИБЛИОТЕКИ</p>
      <ul class="library nav nav-tabs ">
        <li class="active bunina_tabs">
              <a class="active_library library_tabs" data-toggle="tab" href="#bunina"><span>БИБЛИОТЕКА им.И.А.Бунина</span><br> (п.Аннино) </a>
         </li>
        <li>
            <a class=" library_tabs" data-toggle="tab" href="#novoselie"><span>БИБЛИОТЕКА</span><br> (г.п.Новоселье) </a>
       </li>
   </ul>
</div> <!-- container -->
<svg class="clipper">
  <defs>
    <clipPath id="clipping">
      <path d="M253.1512,141.9591c-.0537,4.2236-.0181,9.5119-.1584,15.309s-.4566,12.103-1.214,18.362a90.7819,90.7819,0,0,1-3.8611,18.08,39.7971,39.7971,0,0,1-8.0995,14.4635,62.5281,62.5281,0,0,1-13.8914,10.7914,112.2611,112.2611,0,0,1-19.6352,9.0185,153.7222,153.7222,0,0,1-24.0724,6.31,172.593,172.593,0,0,1-27.2028,2.6657,70.0586,70.0586,0,0,1-38.4331-10.0826c-10.6592-6.4732-19.2648-15.5275-26.111-25.5691a134.9272,134.9272,0,0,1-15.5554-31.4932,143.5349,143.5349,0,0,1-6.7664-27.855c-2.5974-20.0451.0422-36.0051,5.9155-48.67a69.8175,69.8175,0,0,1,25.318-28.8978,104.1343,104.1343,0,0,1,32.7013-13.864A121.8864,121.8864,0,0,1,160.15,46.9591c4.1765,0,14.7776.289,14.7776.289s11.5925.8313,17.7517,1.9159A92.6837,92.6837,0,0,1,211.1223,54.28a62.1587,62.1587,0,0,1,16.85,9.89,54.2124,54.2124,0,0,1,11.2141,13.1539,79.4241,79.4241,0,0,1,7.96,17.6672,122.2118,122.2118,0,0,1,4.6678,21.7039A181.8077,181.8077,0,0,1,253.1512,141.9591Z" transform="translate(-67.1512 -46.9591)"/>  
    </clipPath>
  </defs>
</svg>


<div class="tab-content">
   <div class="tab-pane active" id="bunina">
    <div class="container-fluid bunina_first">
    	    <img class="bunina_first_bg" src="<?php echo get_theme_file_uri('/img/library/bunina1_bg.svg') ?>" alt="Библиотека имени Бунина">
    	    <img class=" bunina_animation1 rotate" src="<?php echo get_theme_file_uri('/img/library/bunina_anim1.svg') ?> " alt="Иконка">
          <div class="container bunina_content">
            <h3 class="library_subtitle">О библиотеке</h3>
             <p class="library_description">Библиотека  им. И.А. Бунина (п. Аннино, ул. Весенняя) входит в состав Муниципального бюджетного учреждения «Молодёжный культурно-досуговый комплекс МО Аннинское городское поселение».</p>       
             <div class="col-md-12 animation_block libs_main">      
               <div class="col-lg-6 col-md-7">
                   <p class="library_text"> В феврале 2016 года библиотека открылась в новом, специально оборудованном помещении. По инициативе Зарубина Михаила Константиновича, заслуженного строителя Российской Федерации, руководителя ЗАО треста № 47 г. Санкт- Петербург, читателей библиотеки и поддержке администрации МО Аннинское городское поселение библиотеке.<br class="mobile_break"> 24 марта 2017 года  было присвоено имя великого русского писателя и поэта И. А. Бунина. </p>
                   <br class="library mobile_break"><br class="library mobile_break">
                   <p class="library_text">В современную библиотеку, удобную, удобную и современную с удовольствием приходят читатели разных возрастов. В новом помещении единое пространство разделено на зоны: конференц-зона, абонемент, детский уголок, компьютерная зона, информационно-консультативная зона. Зонирование позволяет более эффективно использовать пространство библиотеки. </p>
                </div><!-- col-md-6 -->
              </div><!-- 12col -->
          </div> <!-- container -->
       </div> <!-- fluid bunina-first -->
     <div class="container-fluid mobile_bg1_bunina">
       <div class="blue_bg">
        <img src="<?php echo get_theme_file_uri('/img/library/bunina_bg1_mobile.svg') ?> " alt="">
       </div><!-- blue_bg -->
      <div class="container bunina_content">
         <div class="col-md-12 library_sector2">
              <div class="col-md-6 part2 col-sm-6">
              <img class="bunina2_bg" src="<?php echo get_theme_file_uri('/img/library/bunina2.jpg') ?>  " alt="Библиотека Бунина">
            </div> <!-- col-md-6 -->
        <div class="col-md-6 part1 col-sm-6">
            <p class="bunina_sectors">Фонд библиотеки</p>
            <p class="library_text">Состоит из литературы разных направлений (художественной, познавательной, научной и отраслевой;  как  детской, так  юношеской, взрослой) и включает в себя кроме книжного, журнальный и газетный фонд. Все это размещено на хорошо продуманном пространстве, на стеллажах с раздвижными механизмами. </p>
         </div> <!-- col-md-6 -->
      </div><!-- 12col -->
    </div> <!-- container bunina_content -->
  </div><!-- container-fluid mobile_bg1_bunina -->
  <div class="container-fluid bunina_equipment">
  <div class="blue_bg_third">
   <img class="" src="<?php echo get_theme_file_uri('/img/library/bunina_bg2_mobile.svg') ?> " alt=""> 
  </div><!-- blue_bg_third -->
          <img class="library animation animation1 rotate" src="<?php echo get_theme_file_uri('/img/library/bunina_anim2.svg') ?> " alt="">
         <img class="library animation animation2 rotate" src="<?php echo get_theme_file_uri('/img/library/bunina_anim3.svg') ?>" alt="">
         <img class="library animation animation3 rotate" src="<?php echo get_theme_file_uri('/img/library/bunina_anim4.svg') ?>" alt=""> 
  <div class="container">
   <div class="col-md-12 library_sector3">
    <div class="col-lg-6 col-md-7">
      <p class="bunina_sectors equipment">Оснащение библиотеки</p>
      <p class="library_text">4 современных компьютера с доступом в Интернет, большой телевизор (плазма), медиапроектор с экраном, принтер МФУ. <br class="library mobile_break"> <br class="library mobile_break">
      В библиотеке установлена автоматизированная информационная интегрированная библиотечная система (АИБС «Мега Про» ) с  помощью которой создаётся электронный каталог, благодаря чему появятся новые возможности для пользователей и библиотекарей.
      <br class="library mobile_break"><br class="library mobile_break">
      Современные возможности новой библиотеки - это расширенные возможности читателей для более глубокого определения своего отношения к миру, событиям и фактам. Или  «Аналитический  взгляд  на события и факты».<br class="library mobile_break"><br class="mobile_break">
       <span class="hidden_on_mobile ipad">Развитие данной концепции возможно при работе библиотеки в следующих направлениях:</span> </p>
    </div> <!-- col-md-6 -->   
   </div><!-- 12col -->
  </div><!-- container -->
  </div> <!-- fluid -->
  <div class="container ">
     <!-- <div class="row"> -->
      <div class="col-md-12 vertical-tab-container library_tabs_container ">
       <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 vertical-tab-menu hidden_on_mobile ipad">
        <div class="list-group">
            <a href="#" class="list-group-item active text-center">
              Традиционные направления
            </a>
             <a href="#" class="list-group-item text-center">
             Работа библиотеки с читателями
             </a>
             <a href="#" class="list-group-item text-center">
             Услуги и ресурсы библиотеки
              </a>
         </div><!-- /.list-group -->
      </div><!-- /.vertical-tab-menu -->
     <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 vertical-tab hidden_on_mobile ipad">
        <div class="vertical-tab-content active text-center">
         <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>
                         " alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Организация и ведение справочно-библиографического аппарата, баз данных</p>
      </div>
     </div><!-- col-md-12 -->
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
             <p class="library_task_text"> Комплектование, учёт и <br class="mobile_break"> хранение книжного фонда</p>
         </div>  
       </div><!-- col-md-12 -->
        <div class="col-md-12"> 
          <div class="col-md-1 col-sm-3">
            <img class="rotated_icon" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
             <p class="library_task_text"> Компьютеризация информационно-библиографических процессов</p>
         </div> 
      </div>
   </div> <!-- col-md-12 -->
    <div class="vertical-tab-content text-center">
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
             <p class="library_task_text"> Мероприятия, интерактивные познавательные занятия, обзоры, выставки, конкурсы, викторины, встречи</p>
         </div>  
      </div><!-- col-md-12 -->
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Выездная работа с читателями<br class="mobile_break"> деревень (д. Иннолово)</p>
         </div>  
      </div><!-- col-md-12 -->
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img class="rotated_icon" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?> " alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Сотрудничество с писателями Санкт-Петербургского отделения союза писателей, членами Бунинского Общества СПб и Орловского Землячества</p>
         </div>  
     </div><!-- col-md-12 -->
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Организация и деятельность Клуба по интересам для детей и подростков «Интеллектуал»</p>
         </div>  
     </div><!-- col-md-12 -->
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Организация и деятельность Клуба любителей литературы «Аннинская Новь» (для молодежи и врослых)</p>
         </div>  
      </div><!-- col-md-12 -->
  </div> <!-- tab -->
  <div class="vertical-tab-content text-center">
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img  src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Выдача и приём литературы и информационных ресурсов</p>
         </div>  
      </div>
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Поиск информации<br class="mobile_break"> по каталогам</p>
         </div>  
      </div>
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img class="rotated_icon" src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Межбиблиотечный абонемент (МБА) -позволяет получать отсутствующую в фондах нашей библиотеки литературу из фонда районной библиотеки</p>
         </div>  
      </div>
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img  src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text"> Поиск информации в<br class="mobile_break"> сети Интернет</p>
         </div>  
       </div>
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text">Информирование о поступлениях<br class="mobile_break"> новой литературы</p>
         </div>  
     </div>
      <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img class="rotated_icon" src=" <?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
          <p class="library_task_text">Ксерокопирование документов<br class="mobile_break"> из фондов библиотек</p>
         </div>  
      </div>
         <div class="col-md-12">   
          <div class="col-md-1 col-sm-3">
            <img  src="<?php echo get_theme_file_uri('/img/komplex/complex_icon.svg') ?>" alt="Иконка">
          </div>
          <div class="col-md-9 col-sm-9">
            <p class="library_task_text">Сканирование документов; распечатка с носителей и отправка по электронной почте</p>
         </div>  
       </div><!-- col-md-12 -->
    </div><!-- /.vertical-tab -->
<!--     </div> -->
 </div><!-- /.vertical-tab-container -->
   <div class="clearfix"></div>
        <p class="library_workers"> Работают в библиотеке профессиональные,<br class="library mobile_break"> приветливые и терпеливые сотрудники:</p>
        <div class="container vertical_slider">
        <div id="carousel7" class="carousel slide" data-ride="carousel" data-interval="8000">
           <div class="carousel-inner">
      <?php 
          $staffpagePosts = new WP_Query(array(
             'posts_per_page' => 300,
            'post_type' => 'staff',
            'order' => 'ASC'
          ));

   $count = 0;
   while ($staffpagePosts->have_posts()) {
   $staffpagePosts->the_post();
    $annino = get_field('staff_category');
      if( $annino == 'annino'){ 
     $image = get_field('worker_photo'); 
      if($count==0 ) :  ?>
    <div class="item active">
  <?php else : ?>
   <div class="item">
  <?php endif; ?>
        <?php include(locate_template('template-parts/lib-template.php'));?>
    </div> <!-- item -->
    <?php 
   $count++;
   } 
  }
  ?>   
</div><!-- carousel-inner -->
  <div class="slider_controller bunina_controller">
        <div class="left carousel-control">
           <a href="#carousel7" role="button" data-slide="next">
               <svg class="staff arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
               <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
           </svg>
            <span class="sr-only">Previous</span>
          </a>
        </div><!-- left carousel-control -->
          <ol class="carousel-indicators">
           <li data-target="#carousel7" data-slide-to="0" class="active"></li>
           <li data-target="#carousel7" data-slide-to="1"></li>                   
         </ol>
         <div class="right carousel-control">
          <a href="#carousel7" role="button" data-slide="prev">
            <svg class="staff arrow_svg " xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
              <polyline class="staff site_arrow" fill="none" stroke="#23286B" stroke-width="3" points="1085 3.728 1103 3.728 1103 21.728" transform="rotate(45 546.293 -1306.14)"/>
          </svg>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- right carousel-control -->
      </div><!-- slider_controller -->
    </div><!-- carousel_inner -->
   </div><!-- carousel  -->
     <?php 
   wp_reset_postdata();
  ?> 
<div class="col-md-12">
   <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 librarian_block"> 
    <?php 
      while ($staffpagePosts->have_posts()) {
      $staffpagePosts->the_post();
      $annino = get_field('staff_category');     
      if( $annino == 'annino'){  
         $image = get_field('worker_photo');  ?>
      <div class="col-md-6 col-sm-6">
          <?php include(locate_template('template-parts/lib-template.php'));?>  
       </div> <!--  col-md-6   -->
     <?php }
   } 
   wp_reset_postdata();
  ?>
      </div><!-- col-md-8 -->
    </div> <!-- col-md-12 -->
  </div><!-- container -->
</div> <!-- container-fluid -->
<div class="container-fluid  library_contact_block">
 <div class="container">  
  <p class="library_contacts_title">КОНТАКТЫ</p>
  <?php
    if ( is_active_sidebar( 'custom-maincontact-widget' ) ) : ?>     
    <?php dynamic_sidebar( 'custom-maincontact-widget' ); ?>
     <?php endif; ?> 
     </div> <!-- container -->
  </div> <!-- <1fluid> -->
</div> <!-- tab -->


  <div class="tab-pane" id="novoselie">
     <div class="container-fliud novoselie_first_block">
       <div class="container novoselie_descriprion">
        <h3 class="library_subtitle">О библиотеке</h3>
         <p class="library_description">Миссия библиотеки состоит в том, чтобы обеспечить пользователю качественный и эффективный доступ к духовным, информационным и интеллектуальным ресурсам, быть проводником истории и культуры своей страны и края.</p>     
       </div><!-- novoselie_descriprion -->
       <img class="novo animation animation1 rotate" src="<?php echo get_theme_file_uri('/img/library/novo_anim1.svg') ?> " alt="МДК">
        <div class="container novoselie_first_block_content">
         <div class="col-md-12">
          <div class="col-lg-6 col-md-7">
             <p class="library_text"> В декабре 2018 года библиотека обрела новое помещение в новом здании молодежного культурно-досугового комплекса МО Аннинское городское поселение.  Библиотека оборудована современными стеллажами с раздвижной системой, которая экономит пространство. Есть уголок для маленьких читателей, для школьников. Читальный зал оборудован удобными столами с креслами и стеллажами, может использоваться и как конферен-зал. Есть зал с компьютерами, где читатели могут пользоваться интернет-ресурсами.  </p>        
          </div><!-- col-md-6 -->
        </div><!-- 12col -->
    </div>
</div>
<div class="container">
        <div class="col-md-12 family">
        <div class="col-md-6 col-sm-6 second ">
           <img class="bunina2_bg" src="<?php echo get_theme_file_uri('/img/library/novo2_bg.jpg') ?> " alt="Библиотека Бунина">
         </div>
         <div class="col-md-6 col-sm-6 first ">
         <p class="novoselie section">Главное направление работы библиотеки — семья</p>
         <p class="library_text">Создание атмосферы доброжелательности, домашнего уюта, тепла, отзывчивости. Предоставление качественной информации и услуг по всем аспектам жизнедеятельности общества, используя все имеющиеся ресурсы. Сохранение и передача культурного наследия от поколения к поколению. </p>
    </div>
  </div><!-- 12col -->
   <div class="col-md-12 equipment novo">
    <div class="col-md-6">
      <p class="novoselie section resourse" >Оснащение библиотеки</p>
         <p class="library_text">Библиотека стремится сделать все, чтобы читатели могли свободно ориентироваться в мире книг, могли найти свою книгу, по своему интересу. <br><br>Есть такие рубрики: «Всемирная история», «История России», «Великая Отечественная война», «Исторические романы»,  «Современная проза отечественных и зарубежных авторов», «Приключения, детективы отечественных и зарубежных авторов», «Женские романы», «Фантастика, фэнтези», «Классики отечества», «Зарубежные классики», «Советские писатели», «Книги- детям», «Для школьников», «Отраслевая литература», «Справочные издания», «Поэзия». Отдельный уголок по краеведению Ленинградской области, Ломоносовского района, Аннинского поселения, по истории нашего города Санкт-Петербурга.<br><br>Чтобы приблизить книгу к читателю, регулярно проводятся тематические выставки, индивидуальные беседы с читателями о прочитанных книгах, подбор литературы по запросам читателей. </p>
     </div> 
      <div class="col-md-6 hidden_on_mobile">
        <img class="novoselie_third_block_bg" src="<?php echo get_theme_file_uri('/img/library/novo_bg2.svg') ?>" alt="МДК">
        <img class="novo animation animation5 rotate" src="<?php echo get_theme_file_uri('/img/library/novo_anim5.svg') ?> " alt="">

        <img class="novo animation animation2 rotate" src="<?php echo get_theme_file_uri('/img/library/novo_anim2.svg') ?> " alt="">
        <img class="novo animation animation3 rotate" src="<?php echo get_theme_file_uri('/img/library/novo_anim3.svg') ?>" alt="">
         </div>   
  </div><!-- 12col -->
  <div class="clearfix"></div>
  <div class="col-md-12 readers hidden_on_mobile ipad">
    <div class="col-md-6 col-sm-6">
      <img class="bunina2_bg" src="<?php echo get_theme_file_uri('/img/library/novo3_bg.jpg') ?>  " alt="Библиотека Новоселье">
    </div>
    <div class="col-md-6 col-sm-6"> 
     <p class="novoselie section " >Наши читатели</p>     
         <p class="library_text">В библиотеку приходят родители с маленькими детками, от двух лет. Приучение к чтению идет с младых лет. Для этого в библиотеке есть все условия: столик с маленькими стульчиками, удобные пуфы, книги для малышей, а также их родителей по развитию и психологии детей.
          Школьникам предоставлены стеллажи с книгами о приключениях, детскими детективами, фантастикой, книгами о первой любви, научного и развивающего содержания, энциклопедии.</p>
    </div>
  </div><!-- 12col -->
 </div> <!-- readers -->
<div class="container-fliud novoselie_clean_list_block ">
  <img class="novoselie_clean_block_bg hidden_on_mobile ipad" src="<?php echo get_theme_file_uri('/img/library/novo_bg4.svg') ?> " alt="МДК">  
  <img class="novo animation animation4  hidden_on_mobile ipad rotate" src="<?php echo get_theme_file_uri('/img/library/novo_anim4.svg') ?>" alt="МДК">
  <div class="container mobile_container_librarian">
    <div class="col-md-12 library_club hidden_on_mobile ipad">
      <div class="col-md-6 col-sm-6 ">
      <p class="library_text"> В библиотеке создан клуб для детей «Чистый лист». Проводятся различные мероприятия с детьми. Для взрослых создан клуб «Светлица». Раз в месяц проходят «Поэтические салоны». Есть страничка в интернете «Новоселье-Библиотека с 2018 года», где пользователи могут ознакомиться с новинками литературы, прочитать аудиокнигу, есть информация о различных праздниках и культурных мероприятиях нашего поселения, города, о писателях, интересных людях, информация о проводимых мероприятиях в библиотеке, можно оставлять сообщения для библиотекаря, вести диалог в онлайн-режиме.Фонд библиотеки постоянно обновляется, есть  периодические издания. С книгами и журналами можно ознакомиться в читальном зале, либо взять на дом.
        Мы работаем для вас и всегда рады встрече с вами, наши читатели.</p>
    </div>
   </div><!-- 12col -->

   <div class="clearfix"></div> 
   <p class="library_workers novoselie"> Кто является хранителем знаний?<br>Наш библиотекарь!</p>
    <div class="col-md-12 librarian_block2">
  <?php 
     while ($staffpagePosts->have_posts()) {
     $staffpagePosts->the_post();
     $annino = get_field('staff_category');
      if( $annino == 'novo'){  
         $image = get_field('worker_photo');  ?>
      <div class="col-md-12">
        <?php include(locate_template('template-parts/lib-template.php'));?>
      </div><!-- col-md-12 -->
     <?php }
   } 
   wp_reset_postdata();
  ?>  
    </div><!-- librarian_block col-md-12 -->
  </div><!-- novoselie_clean_list_block -->
  </div><!-- containe-fluid -->
  <div class="container-fluid library_contact_block">
    <div class="container">
      <p class="library_contacts_title">КОНТАКТЫ</p>
      <?php
       if ( is_active_sidebar( 'custom-novocontact-widget' ) ) : ?>     
        <?php dynamic_sidebar( 'custom-novocontact-widget' ); ?>
       <?php endif; ?>   
       </div> <!-- container -->
     </div> <!-- <1fluid> -->  


   </div> <!-- tab -->
  </div> <!-- full_tab -->
</div><!-- container-fluid -->
</div> <!-- wrapper -->
<?php get_footer();?>
<script src="<?php echo get_theme_file_uri('js/jquery.touchSwipe.min.js') ?>" ></script>
<script src="<?php echo get_theme_file_uri('js/swipes.js') ?>" ></script> 
