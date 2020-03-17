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
    $('.catalogCarousel').owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        // autoplay:true,
        // autoplayTimeout:6000,
        navText: ["",""],
        responsive:{
            300:{
                items:1
            },
            480:{
                items:2
            },

            700:{
                items:3
            },

            900:{
                items:3
            },

            960:{
                items:4
            }
        }
    });
    $('.reviewsCarousel').owlCarousel({
        items: 1,
        loop: false,
        margin: 10,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        mouseDrag: false,
        touchDrag: false,
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

$(document).ready(function() {
    $('#r-slider1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '#r-slider1-small',
        lazyLoad: false,
        arrows: false,
        dots: false
    });
    $('#r-slider1-small').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        asNavFor: '#r-slider1',
        focusOnSelect: true,
        infinite: false,
        lazyLoad: false,
    });
    $('#r-slider2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '#r-slider2-small',
        lazyLoad: false,
        arrows: false,
        dots: false
    });
    $('#r-slider2-small').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        asNavFor: '#r-slider2',
        focusOnSelect: true,
        infinite: false,
        lazyLoad: false,
    });
    $('#r-slider3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '#r-slider3-small',
        lazyLoad: false,
        arrows: false,
        dots: false
    });
    $('#r-slider3-small').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        asNavFor: '#r-slider3',
        focusOnSelect: true,
        infinite: false,
        lazyLoad: false,
    });
    $('#r-slider4').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '#r-slider4-small',
        lazyLoad: false,
        arrows: false,
        dots: false
    });
    $('#r-slider4-small').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        asNavFor: '#r-slider4',
        focusOnSelect: true,
        infinite: false,
        lazyLoad: false,
    });
    $('#r-slider5').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '#r-slider5-small',
        lazyLoad: false,
        arrows: false,
        dots: false
    });
    $('#r-slider5-small').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        asNavFor: '#r-slider5',
        focusOnSelect: true,
        infinite: false,
        lazyLoad: false,
    });
    $('#r-slider6').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '#r-slider6-small',
        lazyLoad: false,
        arrows: false,
        dots: false
    });
    $('#r-slider6-small').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        asNavFor: '#r-slider6',
        focusOnSelect: true,
        infinite: false,
        lazyLoad: false,
    });
});


/*Scroll*/
$(document).ready(function(){
    //якори
    $("header .weknow").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1000);
    });

    //вверх
    $("footer").on("click",".up", function (event) {
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: 0}, 1000);
    });
});

/*Kalkulator*/
$(document).ready(function () {
    $('.calculator .block .bottomL .button').click(function () {
       if($(this).hasClass('next')){
           $(this).closest('.slide').css('display','none');
           $(this).closest('.slide').next().show();
       } else if($(this).hasClass('prev')) {
           if($(this).closest('.slide').hasClass('slide1')){
               $(this).closest('form').hide();
               $('.firstBlock').show();
           } else {
               $(this).closest('.slide').css('display','none');
               $(this).closest('.slide').prev().show();
           }
       }
    });

    $('.calculator .firstBlock .go').click(function () {
        if($(".calculator #yesCalkulator").prop('checked')){
            $('.firstBlock').hide();
            $('#calculatorYesForm').show();
        } else if($(".calculator #noCalkulator").prop('checked')) {
            $('.firstBlock').hide();
            $('#calculatorNoForm').show();
        } else {
            alert('Выберите один из вариантов ответа');
        }
    });

    //Блокируем угловые ванны, если выбран материал чугун
    $('.calculator .block #calculatorYesForm .slide1 .next').click(function () {
        if($(".calculator #calculatorYesForm .slide1 #chugun").prop('checked')){
            $(".calculator #calculatorYesForm .slide2 #uglsimmetriya," +
                " .calculator #calculatorYesForm .slide2 #uglasimmetriya").attr('disabled',true).prop('checked',false).closest('li').find('label').css('color','grey');
        } else {
            $(".calculator #calculatorYesForm .slide2 #uglsimmetriya," +
                " .calculator #calculatorYesForm .slide2 #uglasimmetriya").attr('disabled',false).closest('li').find('label').css('color','black');
        }
    });
});
