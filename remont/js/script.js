/**
 * Created by Viktoryia Vorozhun on 05.05.2017.
 */

/*fancy*/
$(document).ready(function() {
    $(".fancy, .fancybox").fancybox({
        padding: 0
    });
});

/*Carousel*/
$(document).ready(function () {
    $('.reviewsCarousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        // autoplay:true,
        // autoplayTimeout:3000,
        navText: ["",""],
        responsive:{
            300:{
                items:1
            },
            480:{
                items:1
            },

            600:{
                items:1
            },

            960:{
                items:1
            }
        }
    });
});

//howwork
$(document).ready(function(){
    $('.howwork .block nav .stepNav').click(function () {
        var id = $(this).attr('id');
        if($(this).hasClass('selected')){
            return false;
        } else {
            $('.howwork .block nav .stepNav, .howwork .block .content .step').removeClass('selected');
            $(this).addClass('selected');
            $('.howwork .block .content .step').each(function (index,val) {
                if($(val).hasClass(id)){
                    $(val).addClass('selected');
                }
            })
        }
    });
});

//slider
$(document).ready(function () {
    $('#slider').slider({
        range: "min",
        min: 10,
        max: 200,
        value: 70,
        slide: function( event, ui ) {
            $('#square').val( ui.value );
        }
    });

    $('#square').val( $("#slider").slider( "value" ));

    $( "#square" ).on( "change", function() {
        $("#slider").slider( "value", $(this).val() );
    });

});

/*Scroll*/
$(document).ready(function(){
    //якори
    // $(".utp").on("click",".button", function (event) {
    //     //отменяем стандартную обработку нажатия по ссылке
    //     event.preventDefault();
    //     //забираем идентификатор бока с атрибута href
    //     var id  = $(this).attr('href');
    //         //узнаем высоту от начала страницы до блока на который ссылается якорь
    //         var top = $(id).offset().top;
    //     //анимируем переход на расстояние - top за 1500 мс
    //     $('body,html').animate({scrollTop: top}, 1000);
    // });

    //вверх
    // $("footer").on("click",".up", function (event) {
    //     //анимируем переход на расстояние - top за 1500 мс
    //     $('body,html').animate({scrollTop: 0}, 1000);
    // });
});

/* Тип ремонта */
$(document).ready(function() {
    $('.rates .item a').on('click', function() {
        var type = $(this).closest('.item').find('h2').text();
        $('#raschet-form').find('input[name="typeRemont"]').val(type);
    });
});

/*Kalkulator*/
$(document).ready(function () {
    $('.calculator .block .navigation .button, .calculator .block nav .button').click(function () {
       if($(this).hasClass('next')){
           $(this).closest('.slide').css('display','none');
           $(this).closest('.slide').next().show();
       } else if($(this).hasClass('prev')) {
           $(this).closest('.slide').css('display','none');
           $(this).closest('.slide').prev().show();
       }

       if($(window).width() <= '600'){
           var top = $('.calculator .block').offset().top;
           $('body,html').animate({scrollTop: top}, 1000);
       }
    });
});

//Появление стикера на втором экране
$(document).ready(function() {
    var distance_for_sticker = $('.pluses').offset().top - $(window).height(),
        $sticker = $('.stickerProject');

    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker){
            $sticker.addClass('visible');
        }
        else {
            $sticker.removeClass('visible');
        }
    });

});