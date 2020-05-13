<?php
/**
	Template Name: Опрос
 */

get_header(); ?>
<div class="wrapper clubs">
<div class="container quizz_container">
  <h1 class="quizz_title">Опрос</h1>
   <p id="invitation">Уважаемый пользователь услуги, Ваше мнение очень важно для нас!<br><br>

   МБУ «МКДК» проводит анкетирование с целью повышения качества оказанных Вам услуг. Просим Вас ответить максимально подробно и откровенно на вопросы. В случае затруднения ответить на один или несколько заданных вопросов Вы вправе пропустить вопрос и перейти к ответу на другой вопрос.</p>

     <div id="final_thank">
        <div class="quizz_thank ">
         <img class="thank_image" src="<?php echo get_theme_file_uri('/img/thank.png"') ?>" alt="">
         <p class="thank_text">Спасибо <br class="thank_mobile"> за участие в опросе!</p>
         <span class="thank_link"><a href="<?php echo site_url() ?>" >На главную   
         <svg class="arrow_svg" xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10">
         <polyline class="site_arrow" fill="none" stroke="#23286B" stroke-width="2" points="2 2 8 2 8 8" transform="rotate(45 3 .172)"/>
        </svg></a>
        </span>         
      </div><!-- quizz_thank  -->
    </div><!-- final_thank -->

    <div id="polls_container">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				
			<?php endwhile; // End of the loop. ?>

    </div>
    <button id="next_question" class="quizz_next next action-button">Следующий вопрос</button> <button id="previous" class="quizz_next action-button">Предыдущий вопрос</button>

		</div><!-- container -->

</div>


<?php get_footer(); ?>
<script src="<?php echo get_theme_file_uri('js/quizz.js') ?>" ></script> 