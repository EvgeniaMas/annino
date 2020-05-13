var current_fs,next_fs, previous_fs;
var count = 1;
amount_questions = $('.question').length;
var current_fs = $('.current_question');
var previous_amount = amount_questions-1;
$('#previous').click(function() {
    var previous_fs = $(current_fs).prev();    
    $(current_fs).removeClass('current_question');
    previous_fs.addClass('current_question');
    current_fs.hide(300);
    previous_fs.fadeIn(300);
    current_fs = previous_fs;
    count--;
    if (count < amount_questions) {       
        $('#next_question').fadeIn(1000);
        $('#previous').fadeIn(1000);        
    }
    if (count == 1) {
       $('#previous').css('display', 'none');
    }

    if (count < amount_questions) {
    	
    	$('#next_question').text('Следующий вопрос');
     }
});
$('#next_question').click(function() {
// $(this).css('color', '#bf0479');  


    var next_fs = current_fs.next();
    $(current_fs).removeClass('current_question');
    next_fs.addClass('current_question');    
    current_fs.hide(300);
    next_fs.fadeIn(300);
    count++;
    if (count > 1) {
        $('#previous').css('display', 'block');
    }

    if (count == amount_questions) {
    	$('#next_question').text('Завершить опрос');
    }

    if (count > amount_questions) {
        $('#next_question').hide('slow');
         $('#previous').hide('slow');
         $('#invitation').hide();
        $('#final_thank').fadeIn(2000);
        
    }
    current_fs = next_fs;

   
          // $(this).css('color', '#23286b'); 
       
});


$('.quizz_next').click(function () {
    var button = $(this);
     
     $(this).addClass('active');  
        setTimeout(function () {
         $(button).removeClass('active');  
        }, 1500);
    });


$('.dem-button').click(function () {
    var dem = $(this);     
     $(this).addClass('active');  
        setTimeout(function () {
         $(dem).removeClass('active');  
        }, 1500);
    });