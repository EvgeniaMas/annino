var browser_width = document.body.clientWidth;
var browser_height =document.body.clientHeight;
// main page clicked events
$( '.link_to_single_news' ).click(function() {
  $(this).find( '.main_news_title' ).css('color', '#bf0479');  
});
$( '.main_news_link' ).click(function() {
  $(this).addClass('clicked');
  $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');   
});

$('.main_news_link').hover(
function(){
    $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');
},
function(){   
   $(this).find('.arrow_svg').find('.site_arrow').removeClass('clicked');
});

$('.main_vacancy').hover(
function(){
    $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');
},
function(){   
   $(this).find('.arrow_svg').find('.site_arrow').removeClass('clicked');
});

$('.contact_vacancy').hover(
function(){
    $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');
},
function(){   
   $(this).find('.arrow_svg').find('.site_arrow').removeClass('clicked');
});

$('.all_news_link').hover(
function(){
    $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');
},
function(){   
   $(this).find('.arrow_svg').find('.site_arrow').removeClass('clicked');
});

$('.thank_link> a').hover(
function(){
    $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');
},
function(){   
   $(this).find('.arrow_svg').find('.site_arrow').removeClass('clicked');
});







$( '.all_news_link' ).click(function() {
  $(this).addClass('clicked');
  $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');   
});
// change color of link to all news
$( '.main_more_news' ).click(function() {
  $(this).css('color', '#bf0479');  
});
$( '.mobile_menu_icon' ).click(function() {
$('.mobile_menu>li').removeClass('blind');
   $('.menu_closed').toggleClass('clicked');
   $('.menu_opened').toggleClass('clicked');

   setmenu();

   $('.mobile_menu_container').toggleClass('opened');
   
});

$( '#age_selection' ).click(function() {	
 var container = $('.vertical-tab-content.active');  
    $(container).find('.club_container').css('display', 'block'); 
    $(container).find('.desc_container').css('display', 'none');
  var age = $( '#age_selection' );
  var arrow = $('#age_selection').find( '.age_select_arrow' ).find('.site_arrow');

  $( age ).toggleClass( 'opened' ); 
  $( age ).toggleClass( 'opened_color' );  
  $( '#age_tab' ).toggleClass( 'opened' );  
  $('.age_select_arrow').toggleClass('opened');
  $(arrow).toggleClass('clicked');

  setTimeout(function () {
         $(arrow).toggleClass('clicked');
          $( age ).toggleClass( 'opened_color' ); 
 }, 1200);  
});
$( '.activity_clubs' ).click(function() {
	 var age = $(this).text();
  $( '#age_selected' ).text(age);   
});

$( '.arrow_svg' ).click(function() {
var self = $(this);
  $(this).find('.site_arrow').toggleClass('clicked');  

  var container = $('.vertical-tab-content.active');	
    $(container).find('.club_container').css('display', 'block'); 
    $(container).find('.desc_container').css('display', 'none');
     $('.link_container').toggleClass('opened');
     if($('.club_schedule').hasClass('opened')){
      $('.club_schedule').removeClass('opened')
     }     
     if($('.button_block').hasClass('closed')){
      $('.button_block').removeClass('closed')
     }

      setTimeout(function () {
         $(self).find('.site_arrow').toggleClass('clicked');
        }, 1200);
});
$( '.club_container' ).click(function() {
var id = $(this).attr('id');
var desc = id +'block';
var container = $('.vertical-tab-content.active');  
 $(container).find('.club_container').css('display', 'none'); 
 $('#'+desc).css('display', 'block'); 
   $('.link_container').toggleClass('opened');

   if(!$('.club_schedule').hasClass('opened')){
      $('.club_schedule').addClass('opened');
     } 
     
  
   if(!$('.button_block').hasClass('closed')){
   $('.button_block').addClass('closed');
 }
   
});
// кружки скрипт контента

$(document).ready(function() {
 $('.vertical-tab-menu>.list-group>a').click(function(e) {

 e.preventDefault();
 $(this).siblings('a.active').removeClass('active');
 $(this).addClass('active');
 var index = $(this).index();
 $('.vertical-tab>.vertical-tab-content').removeClass('active');
 $('.vertical-tab>.vertical-tab-content').eq(index).addClass('active');

  if($('.button_block').hasClass('closed')){
   $('.button_block').removeClass('closed')
 }

 if($('.club_schedule').hasClass('opened')){
      $('.club_schedule').removeClass('opened');
     }  

 });


});

$('.club_container').hover(
function(){
    $(this).find('.club_name').addClass('selected');

},
function(){
   
   $(this).find('.club_name').removeClass('selected');
});

$('.club_container').hover(
function(){

    $(this).find('.club_name').addClass('selected');
     var svg = $(this).find('.site_arrow');
     $(svg).addClass('clicked');
},
function(){
   var svg = $(this).find('.site_arrow');
     $(svg).removeClass('clicked');
   
   $(this).find('.club_name').removeClass('selected');
});

// highlight arrows
    $('.carousel-control').click(function () {
      var svg = $(this).find('.site_arrow');
        $(svg).addClass('clicked');
        setTimeout(function () {
            $(svg).removeClass('clicked');
        }, 1500);
    });

// highlight arrows
    $('.nextpostslink').click(function () {
     
        $(this).addClass('clicked');
        setTimeout(function () {
            $(this).removeClass('clicked');
        }, 1500);
    });

        $('.previouspostslink').click(function () {
     
        $(this).addClass('clicked');
        setTimeout(function () {
            $(this).removeClass('clicked');
        }, 1500);
    });

 $('.main_vacancy').click(function () { 
  $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');    
 });

$('.contact_vacancy').click(function () { 
  $(this).find('.arrow_svg').find('.site_arrow').addClass('clicked');    
 });
 

// news, archive, single detection
var menu = $('.navigation>ul>li>a');
var bottom_menu = $('.bottom_menu>li>a');
var mobile_menu = $('.mobile_menu>li>a'); 
var news = false;
$(menu).each(function(){
   if($(this).hasClass('active')){
     news = true;
   }
});
$(bottom_menu).each(function(){
   if($(this).hasClass('active')){
     news = true;
   }
});

$(mobile_menu).each(function(){
   if($(this).hasClass('active')){
     news = true;
   }
});
if(news == false){
  $('.news_mobile_link').addClass('active'); 
  $('.news_menu_link').addClass('active'); 
}
$( '.chw-title.bvi-link').click(function() {
$('.mobile_menu>li').toggleClass('blind');
$('.mobile_menu_container').toggleClass('opened'); 
});

function setmenu(){
if(browser_width < browser_height && browser_width<1025){
$('.mobile_menu> li').each(function() {
 $(this).css('padding-bottom', '0');
 return false;
});
}
var height = screen.height;
var container_mobile = $('.mobile_menu_container').height(); 
var blind = $('#blind').height();
var pure_height = height - blind-70-30;
var padding = (pure_height- (9*24))/10;
if(padding<0){
  padding=1;
}
if(padding>38){
  padding= 38;
}
$('.mobile_menu> li').each(function() {
 $(this).css('padding-bottom', padding + 'px');
});
}

var clipPathSelect = document.getElementsByClassName("worker_photo");
var evt = 'url(#clipping)';

function clip_photo() {
for(var a=0; a<clipPathSelect.length; a++){
clipPathSelect[a].style.clipPath = evt;
clipPathSelect[a].style.webkitClipPath = evt;  
}
}
document.addEventListener("DOMContentLoaded", clip_photo);








