 // $( document ).ready(function() {
$('#carousel .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});
$('#carousel2 .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  }
});
$('#carousel3 .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});
$('#carousel4 .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});
$('#carousel_lib .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});


$(document).ready(function() {
getMaxSize();
});
var a = $('#carousel4').height(); 
var staff_height = 0;
function getMaxSize(){

var data = $('#carousel4 >.carousel-inner>.item>.carousel-col>.staff_data_container');


// $('.carousel ').each(function() {
$(data).each(function(){
   staff_height = $(this).height() > staff_height ? $(this).height() : staff_height;

});



// $('.staff_data_container').each(function(){
//    staff_height = $(this).height() > staff_height ? $(this).height() : staff_height;
// });
// setHight();
// });  
}



function setHight(){
$('.staff_data_container').each(function(){  
    $(this).css('height', staff_height + 'px');
    $(this).css('background-color', 'pink');
});
alert(staff_height);
staff_height = 0;
}


$(window).resize(function() {
getMaxSize();
});


