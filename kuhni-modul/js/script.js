/**
 * Created by Designer on 15.11.2016.
 */

/*fancy*/
$(document).ready(function() {
    $(".fancy").fancybox({
        padding: 0,
    });
});

//mask
$(document).ready(function(){
    // $('input[name=phone]').inputmask("+375(99)999-99-99");  //static mask
});

//anchor scroll
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(document).scrollTop() > 210) {
            $("#backbutton").show(100);
            $('.utp .menu').addClass('fixed');
        } else {
            $("#backbutton").hide(100);
            $('.utp .menu').removeClass('fixed');
        }
    });
    $("#backbutton").click(function (e) {
        e.preventDefault();
        $("html,body").animate({scrollTop: 0}, 'fast');
        return false;
    });

});

/*Scroll*/
$(document).ready(function() {
    $('.anchor').click(function () {
        var el = $(this).attr('href');
        $('html').animate({
            scrollTop: $(el).offset().top
        }, 1000);
    });
});

/*Carousel*/
$(document).ready(function () {
    $('#utpCarousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        autoHeight: true,
        autoplay:true,
        autoplayTimeout:7000,
        autoplayHoverPause:true,
        navText: ["",""]
    });

    $('#newsCarousel').owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        navText: ["",""],
        responsive:{
            100:{
                items: 1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('#reviewsCarousel').owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        padding: 20,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        navText: ["",""],
        responsive:{
            100:{
                items: 1
            },
            500:{
                items: 2
            },
            600:{
                items:3
            }
        }
    });
});

/*up*/
$(document).ready(function () {
    $('.up').click(function (e) {
        console.log('up');
        e.preventDefault();
        $("html,body").animate({scrollTop: 0}, 'fast');
        return false;
    });
});

//Калькулятор
$(document).ready(function () {
    //Какой стиль кухни Вам ближе
    $('.kalkulator .plashka .step2 .choose ul li .chooseArea input').change(function () {
        $('.kalkulator .plashka .step2 .choose ul li').removeClass('selected');
        $('.kalkulator .plashka .step2 .choose ul li .chooseArea input').each(function (i,val) {
            if($(val).is(':checked')){
                $(val).closest('li').addClass('selected');
            }
        });
    });

    //Укажите для расчета какой у Вас размер помещения (кухни)
    $('#length').slider({
        range: "min",
        min: 1,
        max: 20,
        value: 6,
        slide: function( event, ui ) {
            $('#lengthValue').val( ui.value );
        }
    });
    $('#lengthValue').val( $("#length").slider("value"));
    $('#lengthValue').on( "change", function() {
        $("#length").slider( "value", $(this).val() );
    });

    $('#width').slider({
        range: "min",
        min: 1,
        max: 20,
        value: 4,
        slide: function( event, ui ) {
            $('#widthValue').val( ui.value );
        }
    });
    $('#widthValue').val( $("#width").slider("value"));
    $('#widthValue').on( "change", function() {
        $("#width").slider( "value", $(this).val() );
    });

    //Подскажите форму Вашей кухни
    $('.kalkulator .plashka .step4 .choose ul li .chooseArea input').change(function () {
        $('.kalkulator .plashka .step4 .choose ul li').removeClass('selected');
        $('.kalkulator .plashka .step4 .choose ul li .chooseArea input').each(function (i,val) {
            if($(val).is(':checked')){
                $(val).closest('li').addClass('selected');
                if($(val).closest('ul').hasClass('chooseInside')){
                    var classy = $(val).attr('id');
                    $('.kalkulator .plashka .step4 .choose .images img').hide();
                    $('.kalkulator .plashka .step4 .choose .images .'+ classy ).show();
                }
            }
        });
    });

    //Навигация
     $('.kalkulator .plashka .step .next').click(function () {
        $(this).closest('.step').hide().next().show();
     });
    $('.kalkulator .plashka .step .prev').click(function () {
        $(this).closest('.step').hide().prev().show();
    });
});

//Формы инициализация типа
$(document).ready(function () {

    var form = $('#callForm');

   $('header .button, footer .button').click(function () {
       form.removeClass().addClass('callClass');
       form.find('input[name="type"]').val('Заказать звонок');
   });
    $('.testzapis .button').click(function () {
        form.removeClass().addClass('testzapisClass');
        form.find('input[name="type"]').val('Запись на тестовую тренировку за 10BYN');
    });
    $('.prices .priceBlock .table .block').click(function () {
        form.removeClass().addClass('priceClass');
        var nazvanie = $(this).find('.titlePart').text();
        var price = $(this).find('.pricePart').text();
        var studio = $('.prices .studio span.active').text();
        var priceupload = 'Выбрано ' + nazvanie + 'по цене ' + price + ' ' + studio;
        form.find('input[name="type"]').val(priceupload);
    });
    $('.prices .halva a').click(function () {
        form.removeClass().addClass('halvaClass');
        form.find('input[name="type"]').val("Оплата картой Халва");
    });
    $('.testtren .sticke').click(function () {
        form.removeClass().addClass('stickerClass');
        form.find('input[name="type"]').val("Пробная тренировка бесплатно при покупке абонемента");
    });
    $('.testtren .button').click(function () {
        form.removeClass().addClass('testskidkaClass');
        form.find('input[name="type"]').val("Скидка 10% на любой абонемент в день пробной тренировки");
    });
    $('.testtren .spo .spo1').click(function () {
        form.removeClass().addClass('mamaskidkaClass');
        form.find('input[name="type"]').val("Скидка 15% на любой абонемент для мам деток до 5 лет.");
    });
    $('.testtren .spo .spo2').click(function () {
        form.removeClass().addClass('holidaysClass');
        form.find('input[name="type"]').val("Абонемент выходного дня 5 тренировок за 100 рублей");
    });
});

// смена типа формы при клике на стикер

$(document).ready(function() {
    $('.utp .sticker').on('click', function() {
        $('#callForm').find('input[name="type"]').val('Стикер на главной');
    });
    $('header .button, .footer .button').on('click', function() {
        $('#callForm').find('input[name="type"]').val('Заказать звонок');
    });
});