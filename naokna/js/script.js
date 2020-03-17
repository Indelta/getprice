/**

 * Created by Viktoryia Vorozhun on 26.01.2018.

 */

// Переключение экранов

function runEffect(hideScreen, showScreen) {
    showScreen.show();
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000);
    return false;
}



//Переключение лендингов

function switchLanding(landing) {

    $('#screen2 .quest .hintPart .podskazka, #screen2 .quest .hintPart .zhaluziPart, #screen2 .quest .hintPart .rolshtoriPart').hide();

    if(landing==='zhaluzi'){
        $('#screen2 .quest .hintPart .zhaluziPart').show();
        $('.rolshtoriVybor').hide();
        $('.zhaluziVybor').show();
        $('#screen5 .description .vid').text('жалюзи');
        $('#screen6 .description .zhal, #screen6 .hintPart .zhal').show();
        $('#screen6 .description .rol, #screen6 .hintPart .rol').hide();
    } else if (landing==='rolshtori'){
        $('#screen2 .quest .hintPart .rolshtoriPart').show();
        $('.rolshtoriVybor').show();
        $('.zhaluziVybor').hide();
        $('#screen5 .description .vid').text('рольшторы');
        $('#screen6 .description .zhal, #screen6 .hintPart .zhal').hide();
        $('#screen6 .description .rol, #screen6 .hintPart .rol').show();
    }

}



//Прогресс бар

function moveBar() {
    var elem = document.getElementById("myBar");
    var text = document.getElementById("textMybar");
    var width = 10;
    var id = setInterval(frame, 80);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
            text.innerHTML = width*1 + '%';
        }

    }

}



/*fancy*/

$(document).ready(function () {

    $(".fancy").fancybox({

        padding: 0

    });

});



//Datepicker

$(document).ready(function () {

    ( function( factory ) {

        if ( typeof define === "function" && define.amd ) {



            // AMD. Register as an anonymous module.

            define( [ "../widgets/datepicker" ], factory );

        } else {



            // Browser globals

            factory( jQuery.datepicker );

        }

    }( function( datepicker ) {
        datepicker.regional.ru = {
            closeText: "Закрыть",
            prevText: "&#x3C;Пред",
            nextText: "След&#x3E;",
            currentText: "Сегодня",
            monthNames: [ "Январь","Февраль","Март","Апрель","Май","Июнь", "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ],
            monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн", "Июл","Авг","Сен","Окт","Ноя","Дек" ],
            dayNames: [ "воскресенье","понедельник","вторник","среда","четверг","пятница","суббота" ],
            dayNamesShort: [ "вск","пнд","втр","срд","чтв","птн","сбт" ],
            dayNamesMin: [ "Вс","Пн","Вт","Ср","Чт","Пт","Сб" ],
            weekHeader: "Нед",
            dateFormat: "dd.mm.yy",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: "" };
        datepicker.setDefaults( datepicker.regional.ru );
        return datepicker.regional.ru;
    } ) );

    $.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );

    $( function() {

        var dateFormat = "dd.mm.yy",

            from = $( "#from" )

                .datepicker({

                    defaultDate: "+1w",

                    changeMonth: true,

                    numberOfMonths: 1,

                    minDate: +0

                })

                .on( "change", function() {

                    to.datepicker( "option", "minDate", getDate( this ) );

                }),

            to = $( "#to" )

                .datepicker({

                    defaultDate: "+1w",

                    changeMonth: true,

                    numberOfMonths: 1

                })

                .on( "change", function() {

                    from.datepicker( "option", "maxDate", getDate( this ) );

                });



        function getDate( element ) {

            var date;

            try {

                date = $.datepicker.parseDate( dateFormat, element.value );

            } catch( error ) {

                date = null;

            }



            return date;

        }

    } );

});



//Рандомайзер

function getRandomArbitrary(min, max) {

    return Math.random() * (max - min) + min;

}



//slider

$(document).ready(function () {

    $('#heightSlide').slider({

        range: "min",

        min: 20,

        max: 200,

        value: 100,

        orientation: "vertical",

        slide: function( event, ui ) {

            $('#height').val( ui.value );

        }

    });

   $('#height').val( $("#heightSlide").slider("value"));



    $('#height').on( "change", function() {

        $("#heightSlide").slider( "value", $(this).val() );

    });



    $('#widthSlide').slider({

        range: "min",

        min: 20,

        max: 200,

        value: 60,

        slide: function( event, ui ) {

            $('#width').val( ui.value );

        }

    });

    $('#width').val( $("#widthSlide").slider("value"));



    $('#width').on( "change", function() {

        $("#widthSlide").slider( "value", $(this).val() );

    });



});



//navigation

$(document).ready(function () {

    $('#screen2 .navigation .next, #screen2 .nextBottomBlock .button').click(function () {

        if(!$('#screen2 .quest input:checked').val()){

            $('#choosePleaseGo').click();

        } else {

            var hideScreen = $(this).closest('.screen');

            var showScreen = hideScreen.next();

            runEffect(hideScreen, showScreen);

        }

        return false;

    });



    $('#screen4 .navigation .next, #screen4 .nextBottomBlock .button').click(function () {

        var hideScreen = $(this).closest('.screen');

        if($('#screen2 .quest input:checked').val()==='Жалюзи'){

            var showScreen = hideScreen.next();

        } else {

            var showScreen = $('#screen5');

            $('#screen4st2').hide();

        }

        runEffect(hideScreen, showScreen);

        return false;

    });



    $('#screen5 .navigation .prev').click(function () {

        var hideScreen = $(this).closest('.screen');

        if($('#screen2 .quest input:checked').val()==='Жалюзи'){

            var showScreen = hideScreen.prev();

        } else {

            var showScreen = $('#screen4');

            $('#screen4st2').hide();

        }

        runEffect(hideScreen, showScreen);

        return false;

    });



    //Агрегатор старт

    $('#screen6 .navigation .next, #screen6 .nextBottomBlock .button').click(function () {

        var hideScreen = $(this).closest('.screen');

        var showScreen = hideScreen.next();

        runEffect(hideScreen, showScreen);

        // setTimeout(function () {

        //     moveBar();

        //     setTimeout(

        //         function () {

        //             runEffect($('#screen7'), $('#screen8'));

        //             $('#screen7 .nextBottomBlock .poiskText').text('Готово!');

        //         },

        //         8000);

        // });

    });



    $('#screen3 .nextBottomBlock .button, #screen4st2 .nextBottomBlock .button, #screen5 .nextBottomBlock .button, #screen7 .nextBottomBlock .button, #screen8 .nextBottomBlock .button').click(function () {

        var hideScreen = $(this).closest('.screen');

        var showScreen = hideScreen.next();

        runEffect(hideScreen, showScreen);

        return false;

    });



    $('#screen3 .navigation .button2, #screen4 .navigation .prev ,#screen4st2 .navigation .button2, #screen5 .navigation .next, #screen6 .navigation .prev, #screen7 .navigation .button2, #screen8 .navigation .button2').click(function () {

        var hideScreen = $(this).closest('.screen');

        if ($(this).hasClass("prev")){

            var showScreen = hideScreen.prev();

            runEffect(hideScreen, showScreen);

        } else if ($(this).hasClass("next")){

            var showScreen = hideScreen.next();

            runEffect(hideScreen, showScreen);

        }



        return false;

    });

});



//Отмен нажатия по кнопке "назад"

$(document).ready(function () {

    history.pushState(null, null, location.href);

    window.onpopstate = function(event) {

        history.go(1);

    };

});



//Вызов формы заказ звонка

$(document).ready(function () {

    $('.stickerCall').click(function () {

       $(this).hide();

       $('.callWind').show("slow");

    });

    $('.callWind .close').click(function () {

        $('.callWind').hide();

        $('.stickerCall').show("slow");

    });

    $('.stickerWindownum').click(function () {

        $('.stickerCall').hide();

        $('.callWind').show("slow");

    });

    $('.stickerRassr').click(function () {

        $('.stickerCall').hide();

        $('.callWind').show("slow");

    });

    $('#screen6 .consult').click(function () {

        $('.stickerCall').hide();

        $('.callWind').show("slow");

    });

});



//Карусель

$(document).ready(function () {

    $('.zhaluziCarousel ').owlCarousel({

        loop:true,

        items: 1,

        navText:["",""],

        nav:true

    });

    $('.rolshtoriCarousel ').owlCarousel({

        loop:true,

        items: 1,

        navText:["",""],

        nav:true

    });

    $('.ofisPartzhaluziCarousel, .domPartrolshtoriCarousel, .domPartzhaluziCarousel, .ofisPartrolshtoriCarousel ').owlCarousel({

        loop:true,

        items: 1,

        navText:["",""],

        nav:true

    });

    $('.vertPartzhaluziCarousel , .horizPartzhaluziCarousel').owlCarousel({

        loop:true,

        items: 1,

        navText:["",""],

        nav:true

    });

});



//Жалюзи или рольшторы?

$(document).ready(function () {
    switchLanding('zhaluzi');
    $('#screen2 .quest input').change(function () {
        $('#screen3, #screen4, #screen4st2, #screen5, #screen6, #screen7, #screen8').hide();
        $('#screen2 .quest ul li').removeClass('checked');
        $('#screen2 .quest input:checked').closest('li').addClass('checked');
        if($('#screen2 .quest input:checked').attr('id')==='zhaluzi'){
            switchLanding('zhaluzi');
            console.log('жалюзи первый вопрос');
        } else if ($('#screen2 .quest input:checked').attr('id')==='rolshtori'){
            switchLanding('rolshtori');
            console.log('Рольшторы 1 вопрос');
        }
    });
});



//Куда нужны Жалюзи или рольшторы?

$(document).ready(function () {

    $('#screen3 .quest input').change(function () {
        var input = $('#screen3 .quest input:checked');
        var dom = $('#screen3 .quest .hintPart .domPart');
        var ofis = $('#screen3 .quest .hintPart .ofisPart');
        $('#screen3 .quest ul li').removeClass('checked');
        input.closest('li').addClass('checked');
        $('#screen3 .quest .hintPart .podskazka').hide();
        if(input.attr('id')==='domoizhaluzi'){
            dom.show();
            ofis.hide();
        } else if (input.attr('id')==='vofiszhaluzi'){
            dom.hide();
            ofis.show();
        } else if (input.attr('id')==='vofisrolshtori'){
            dom.hide();
            ofis.show();
        } else if (input.attr('id')==='domoirolshtori'){
            ofis.hide();
            dom.show();
        }

    });

});



//Выберите тип жалюзи или рольшторы

$(document).ready(function () {

    $('#screen4 .quest input').change(function () {
        var input = $('#screen4 .quest input:checked');
        var vert = $('#screen4 .quest .hintPart .vertPart');
        var svob = $('#screen4 .quest .hintPart .svobPart');
        var kass = $('#screen4 .quest .hintPart .kassPart');
        var dn = $('#screen4 .quest .hintPart .dnPart');
        var horiz = $('#screen4 .quest .hintPart .horizPart');
        $('#screen4 .quest ul li').removeClass('checked');
        input.closest('li').addClass('checked');
        $('#screen4 .quest .hintPart .podskazka').hide();
        if(input.attr('id')==='verttypezhaluzi'){
            vert.show();
            horiz.hide();
            $('.screen .quest .choosePart ul li').show();
            // $('.screen .quest .choosePart ul li.derevo').hide();
            $('.screen .quest .choosePart ul li.alumini img').attr('src','img/screen4st2/alumini2.jpg');
            $('.screen .quest .choosePart ul li.plastic img').attr('src','img/screen4st2/plastic2.jpg');
        } 
        else if (input.attr('id')==='horiztypezhaluzi'){
            vert.hide();
            horiz.show();
            $('.screen .quest .choosePart ul li').show();
            // $('.screen .quest .choosePart ul li.materiya').hide();
            $('.screen .quest .choosePart ul li.alumini img').attr('src','img/screen4st2/alumini.jpg');
            $('.screen .quest .choosePart ul li.plastic img').attr('src','img/screen4st2/plastic.jpg');
        } 
        else if (input.attr('id')==='svobtyperolshtori'){
            svob.show();
            kass.hide();
            dn.hide();

        } 
        else if (input.attr('id')==='kasstyperolshtori'){
            svob.hide();
            kass.show();
            dn.hide();
        } 
        else if (input.attr('id')==='dntyperolshtori'){
            svob.hide();
            kass.hide();
            dn.show();
        }
    });
});



//Выберите материал жалюзи

$(document).ready(function () {
    $('#screen4st2 .quest input').change(function () {
        $('#screen4st2 .quest ul li').removeClass('checked');
        $('#screen4st2 .quest input:checked').closest('li').addClass('checked');
    });
});



//Укажите количество створок окон - Плюс-Минус

$(document).ready(function () {
    function changeWindow(num) {
        $('#screen5 .showPart .item').removeClass('active');
        var max = $('#screen5 .showPart .item:nth-child( ' + num + ')');
        if(num>14){
            num = 14;
        }
        for (var i=0; i<=num; i++){
            $('#screen5 .showPart .item:nth-child( ' + i + ')').addClass('active');
        }
    }



    $('body #screen5 .quest .calcButton').click(function () {
        var inp = $(this).closest('.choose').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<=1){
                return false;
            } 
            else{
                $(this).closest('.choose').find('input').val(inp*1 - 1);
                changeWindow(inp*1 - 1);
            }

        } 
        else if ($(this).hasClass('plus')){
            $(this).closest('.choose').find('input').val(inp*1 + 1);
            changeWindow(inp*1 + 1);
        }
    });

    $('body #screen5 .quest input').change(function () {
        changeWindow($('body #screen5 .quest input').val());
        if($(this).val()<1 || isNaN($(this).val())){
            $(this).val(1);
            changeWindow(1);
        }
    });
});



//Вернуться на главную после thankyoupage

$(document).ready(function () {

    $('#thankyou .return').click(function () {

       $('.screen').hide();

       $('#screen1').show();

    });

});



//Агрегатор

$(document).ready(function () {

    $('#screen6 .navigation .next, #screen6 .nextBottomBlock .button').click(function () {



        //Жалюзи или рольшторы?

        var zhaluziilirolshtoriTEXT = $('#screen2 input[name="zhaluziilirolshtori"]:checked').val();

        $('#screen7 .zhaluziilirolshtoriTEXT').text(zhaluziilirolshtoriTEXT);



        //Куда Вам нужны жалюзи или рольшторы?

        if($('#screen2 input[name="zhaluziilirolshtori"]:checked').val()==='Жалюзи'){

            var kudazhaluziTEXT = $('#screen3 input[name="kudazhaluzi"]:checked').val();

        } else {

            var kudazhaluziTEXT = $('#screen3 input[name="kudarolshtori"]:checked').val();

        }

        $('#screen7 #kudazhaluziTEXT').text(kudazhaluziTEXT);



        //Тип жалюзи или рольшторы?

        if($('#screen2 input[name="zhaluziilirolshtori"]:checked').val()==='Жалюзи'){

            var typezhaluziTEXT = $('#screen4 input[name="typezhaluzi"]:checked').val();

        } else {

            var typezhaluziTEXT = $('#screen4 input[name="typerolshtori"]:checked').val();

        }

        $('#screen7 #typezhaluziTEXT').text(typezhaluziTEXT);



        //Материал жалюзи

        if($('#screen2 input[name="zhaluziilirolshtori"]:checked').val()==='Жалюзи'){

            var materialTEXT = $('#screen4st2 input[name="material"]:checked').val();

            $('#screen7 #materialTEXT').text(materialTEXT);

        } else {

            $('#screen7 .plashka .part ul li.zhaluziLi').hide();

        }



        //Количетсво створок

        var stvorkiTEXT = $('#screen5 #stvorki').val()*1;

        $('#screen7 #stvorkiTEXT').text(stvorkiTEXT);



        //Сколько дверей нужно установить?

        var widthTEXT = $('#screen6 #width').val()*1;

        var heightTEXT = $('#screen6 #height').val()*1;

        $('#screen7 #widthTEXT').text(widthTEXT);

        $('#screen7 #heightTEXT').text(heightTEXT);



    });

});

// выбор мессенджера

$(document).ready(function() {
    $('.messenger').on('click', function(e) {
        e.preventDefault();
        $('.messenger').removeClass('active');
        $('.messenger').children('input').prop('checked', false);
        $(this).addClass('active');
        $(this).children('input').prop('checked', true);
        $('.messenger .icon').css({filter: 'grayscale(100%)'});
        $(this).children('.icon').css({filter: 'grayscale(0)'});
    });
});

//Отправка форм

var dayNum = new Date().getDay();
var changeDayStr = (dayNum !== 0 || dayNum !== 6) ? 'ближайшее время' : 'понедельник';

$(document).ready(function () {

    $("form").submit(function(e) {

        var ref = $(this).find("required");

        $(ref).each(function(){

            if ( $(this).val() == '' )

            {

                alert("Поле не должно быть пустое!");

                $(this).focus();

                e.preventDefault();

                return false;

            }

        });  return true;

    });



    $('#callForm').submit(function () {

        var but = $(this).find('input[type="submit"]');

        but.prop( 'disabled', true ).val('Отправка...');

        var form = $('#callForm');

        var phone = $('#callForm').find('input[name="phone"]');

        var form_data = form.serialize();



        if (phone.val().length < 7) {

            phone

                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)

                .animate({backgroundColor: "#fff", opacity: 1}, 300);

            but.prop( 'disabled', false ).val('Заказать звонок');

        }

        else {

            $.ajax({

                type: "POST",

                url: "mail.php",

                data: form_data,

                cache: false,

                success: function () {

                    yaCounter47479579.reachGoal('ZakazZvonkaVsplivashka');

                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });

                    form.fadeOut(300, function () {

                        form.trigger('reset');

                        $('.callWind .title').hide();

                        $(this).after("<div class='thankYou'>Спасибо за заявку!<br> В "+ changeDayStr +" с Вами свяжется консультант.</div>");

                    });

                    setTimeout(function () {

                        $('.callWind').hide();

                        $('.callWind .title').show();

                        $('.stickerCall').show('slow');

                        form.fadeIn(300).siblings('.thankYou').remove();

                        but.prop( 'disabled', false ).val('Заказать звонок');

                    }, 10000);



                }



            });

        }

        return false;

    });

    $('#zvonokForm').submit(function () {

        var but = $(this).find('input[type="submit"]');

        but.prop( 'disabled', true ).val('Отправка...');

        var form = $(this);

        var phone = form.find('input[name="phone"]');

        var form_data = form.serialize();



        if (phone.val().length < 7) {

            phone

                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)

                .animate({backgroundColor: "#fff", opacity: 1}, 300);

            but.prop( 'disabled', false ).val('Заказать звонок');

        }



        else {

            $.ajax({

                type: "POST",

                url: "mail.php",

                data: form_data,

                cache: false,

                success: function () {

                    if(form.hasClass('callClass')){

                        yaCounter47479579.reachGoal('ZakazZvonka');

                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });

                    } else if (form.hasClass('stoimostClass')){

                        yaCounter47479579.reachGoal('Stoimost');

                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Stoimost' });

                    } else if (form.hasClass('zamerClass')){

                        yaCounter47479579.reachGoal('VyzovNaZamer');

                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'VyzovNaZamer' });

                    } else if (form.hasClass('podarokClass')){



                    }

                    form.fadeOut(300, function () {

                        form.trigger('reset');

                        $('.callWind .title').hide();

                        $(this).after("<div class='thankYou'>Спасибо за заявку!<br> В "+ changeDayStr +" с Вами свяжется консультант.</div>");

                    });

                    setTimeout(function () {

                        form.fadeIn(300).siblings('.thankYou').remove();

                        but.prop( 'disabled', false ).val('Заказать звонок');

                    }, 10000);



                }



            });

        }

        return false;

    });

    $('#kalkulatorForm').submit(function () {

        var but = $(this).find('input[type="submit"]');

        $('#screen8 .alert').hide();

        but.prop( 'disabled', true ).val('Отправка...');

        var form = $('#kalkulatorForm');

        var phone = $('#kalkulatorForm').find('input[name="phone"]');

        var form_data = form.serialize();



        if (phone.val().length < 7) {

            phone

                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)

                .animate({backgroundColor: "#fff", opacity: 1}, 300);

            $('#screen8 .alert').show("slow").effect("shake", 500);

            but.prop( 'disabled', false ).val('Получить скидку');

        }



        else {

            $.ajax({

                type: "POST",

                url: "mail.php",

                data: form_data,

                cache: false,

                success: function () {

                    yaCounter47479579.reachGoal('StoimostFinal');

                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'StoimostFinal' });

                    $('#screen1, #screen2, #screen3, #screen4, #screen4st2, #screen5, #screen6, #screen7, #screen8').fadeOut(300, function () {

                        form.trigger('reset');

                        but.prop( 'disabled', false ).val('Получить скидку');

                        $('#thankyou').show();

                        $('.stickerCall').show();

                    });

                }

            });

        }

        return false;

    });

});



//замена типа и класса формы заказ звонка

$(document).ready(function () {

    //Заказ звонка

    $('.screen .header .button, #screen1 header .button, #screen1 header .logoArea .logo, #screen1 header .logoArea .sitename').click(function () {

        $('#zvonokForm').removeClass();

        $('#zvonokForm').addClass('callClass');

        $('#call input[name="type"]').val('Заказ звонка');



    });

    //Узнать стоимость из каталога

    $('.screen .quest .hintPart .carouselPart .button').click(function () {

       var nazva = $(this).closest('.carouselPart ').find('.owl-carousel .active').find('img').attr('src');
       var getImg = 'http://getprice.by/naokna/' + nazva;

       $('#call input[name="type"]').val('Узнать стоимость');

       $('#call input[name="type-img"]').val(getImg);

        $('#zvonokForm').removeClass();

        $('#zvonokForm').addClass('stoimostClass')

   });



    //Вызвать замерщика

    $('#screen6 .hintPart .planka .button').click(function () {

        $('#zvonokForm').removeClass();

        $('#zvonokForm').addClass('zamerClass');

        $('#call input[name="type"]').val('Вызвать замерщика');

    });



    //Замер и установка в подарок

    $('#screen7 .plashka .sticker').click(function () {

        $('#zvonokForm').removeClass();

        $('#zvonokForm').addClass('podarokClass');

        $('#call input[name="type"]').val('Замер и установка в подарок');

    });



});



//Развернуть все экраны

$(document).ready(function () {

    $('.showAllBlocks').click(function () {

        $('#kalkulator').find('.screen').show();

    });

});