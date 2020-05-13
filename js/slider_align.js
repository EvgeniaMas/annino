var device = document.body.clientWidth;
function setSliderHeight(){
var maxHeight = 0;
$('.item').each(function(){
   maxHeight = $(this).height() > maxHeight ? $(this).height() : maxHeight;
});
$('.outer>.news_container').each(function(){  
    if(!maxHeight){
    	maxHeight ==450;
    }
    $(this).css('height', maxHeight +'px');
});
}
if(device<768){
 setSliderHeight();
}
window.addEventListener("orientationchange", function() {
setSliderHeight();
}, false);