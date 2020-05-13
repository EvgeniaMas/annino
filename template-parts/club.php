<?php
/**
 * Template part for displaying posts.
 * * 
 */
?> 
<?php
    $clubpagePosts = new WP_Query(array(          
            'post_type' => 'activity',
            'posts_per_page' => 300,
            'order' => 'DESC'
          ));

while ($clubpagePosts->have_posts()) {
  $clubpagePosts->the_post();
  $category = get_field('age');
  $image = get_field('photo');
  $type = get_field('category');
  $url = '/img/activity/development.svg';
  if($type == 'dance'){
    $url = '/img/activity/dance.svg';
  }
  else if($type == 'music' ){
    $url = '/img/activity/music.svg';
  }
  else if($type == 'draw' ){
    $url = '/img/activity/draw.svg'; 
  }       
  if($category == $age){?> 
        <div class="all_clubs_age">  
        <div id="<?php echo the_ID(); ?>" class="col-md-12 club_container ">   
          <div class="col-md-2 icon_mobile_container">
             <img class="container_icon" src="<?php echo get_theme_file_uri($url) ?>" alt="Иконка">
          </div> <!-- col-2 -->
          <div class="col-md-10 content_mobile_container">
            <p class="club_name"><?php the_title() ?></p>
           <svg class="club_arrow arrow_svg" xmlns="http://www.w3.org/2000/svg" width="7" height="10" viewBox="0 0 7 10">
            <polyline class="site_arrow" fill="none" stroke="#23286B" stroke-width="2" points="2 2 8 2 8 8" transform="rotate(45 3 .172)"/>
            </svg>     
            <p class="short_desc"><?php  the_field('short_description');  ?></p>
            <p class="club_address"><?php the_field('place');?></p>
         </div><!-- 10col -->
      </div>   <!-- 12col -->
    <!--   <div class="clearfix"></div> -->
 <div id="<?php echo the_ID(); ?>block" class="col-md-12 desc_container"> 
 <img class="club_bg" src="<?php echo get_theme_file_uri('/img/activity/club_bg.svg') ?>" alt="Молодежный культурно-досуговый комплекс">  
    <div class="activity_opened_container">
      <div class="arrow_container">
        <div class="arrow_clubs_content">     
        <svg class="arrow_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="28" viewBox="0 0 16 28">
        <polyline class="site_arrow"  fill="none" stroke="#23286B" stroke-width="3" points="4 3.728 22 3.728 22 21.728" transform="scale(-1 1) rotate(45 -2.207 -20.571)"/>
      </svg>
    </div>
    </div> 
            <p class="club_name_desc"><?php the_title() ?></p>
            <p class="club_subtitle"><?php the_field('short_description');?></p>
            <div class="club_desc"><?php the_content() ?> </div>
<?php
$photo1 = get_field('photo1');
$photo2 = get_field('photo2');
$photo3 = get_field('photo3');
$photo4 = get_field('photo4');



?>

<div class="photo_gallery_collection first col-md-12">
  <div class="col-md-6"> 
     <img class="gallery_photo" src="<?php echo esc_url($photo1['url']); ?>">
    </div>
    <div class="col-md-6">
      <img class="gallery_photo" src="<?php echo esc_url($photo2['url']); ?>">
    </div>
</div>
<div class="photo_gallery_collection second col-md-12">
   <div class="col-md-6">
      <img class="gallery_photo" src="<?php echo esc_url($photo3['url']); ?>">
    </div>
    <div class="col-md-6">
     <img class="gallery_photo" src="<?php echo esc_url($photo4['url']); ?>">
    </div>
  </div>

            <p class="about_club">О кружке</p>
             <div class=" inner container">
               <div class="col-md-12">
           <div class="col-lg-6 col-md-12  "> 
            <?php   
              if($image){ ?>
    <div class="club library masking">
    <img class="club worker_photo" src="<?php echo esc_url($image['url']); ?>">  
      </div>
    <?php
              }
              else{ 
                ?>
     <div class="club library masking"> 
    <img class="defalt" src="<?php echo get_theme_file_uri('/img/default.svg')?>"  alt="">
     </div>
              <?php }
            ?>
         
             <p class="activity worker_name"><?php the_field('fio');?></p>
             <p class="activity worker_position">Руководитель</p>
        </div> 

          <div class="col-lg-6 col-md-12 activity_data_ipad">
             <div class=" col-lg-12 col-md-6 activity_year">
          <div class="desc_block">
            <p class="desc_title">Год создания:</p>
            <p class="desc_data"><?php the_field('year');?></p>
          </div>
        </div>
         <div class="col-lg-12 col-md-6 activity_group"> 
          <div class="desc_block">
            <p class="desc_title">Возрастная группа:   </p>
            <p class="desc_data"><?php the_field('group');?></p>
          </div>
        </div>
         <div class="col-lg-12 col-md-6 activity_phone">
          <div class="desc_block">
            <p class="desc_title">Телефон: </p>
            <div class="desc_data phone"><?php the_field('phone');?></div>
          </div>
        </div>
         <div class="col-lg-12 col-md-6 activity_location "> 
           <div class="desc_block">
            <p class="desc_title">Расположение: </p>
            <p class="desc_data"><?php the_field('full_adress');?></p>
          </div>
         </div>
        </div>
       </div><!-- 12col -->
     </div>
    </div>
  </div>
</div><!-- all_clubs_age -->

<?php
   }

 }
  wp_reset_postdata();
?>  







