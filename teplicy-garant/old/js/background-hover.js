$(document).ready(function(){
    $('.class-child').mouseenter(function(){
        $('.class').toggleClass('add-class'); 
    });
            
    $('.class-child').mouseleave(function(){
        $('.class').toggleClass('add-class');
    }); 
});