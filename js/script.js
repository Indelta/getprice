/**
 * Created by Viktoryia Tsekhanovich on 09.01.2017.
 */
// Переключение экранов
function runEffect(hideScreen, showScreen) {
    showScreen.show();
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000);
    return false;
}
// function callback(hideScreen, showScreen) {
//     setTimeout(function() {
//         // $( ".screen" ).removeAttr( "style" ).hide().fadeIn();
//         showScreen.show();
//         $('html, body').scrollTop(0);
//     }, 0 );
// }

//Экран 9 собирает все поля
function completeFields() {
    //Куда?
    var kuda = $('#screen3 input[type="radio"]:checked').val();
    $('#screen9 .otvetKuda').html(kuda);

    //Тип
    var tip = $('#screen4 input[type="radio"]:checked').val();
    $('#screen9 .otvetTip').html(tip);

    //Размеры
    var w = parseInt($('#screen5 #width').val().replace(/\D+/g,""));
    var h = parseInt($('#screen5 #height').val().replace(/\D+/g,""));
    var b = parseInt($('#screen5 #deep').val().replace(/\D+/g,""));
    $('#screen9 .otvetRazmer .w').html(w);
    $('#screen9 .otvetRazmer .h').html(h);
    $('#screen9 .otvetRazmer .b').html(b);

    //Конфигурация
    var config = $('#screen6 input[type="radio"]:checked').val();
    $('#screen9 .otvetConfig').html(config);

    //Внешняя отделка
    $(".otvetOtdelka").text("");
    $('#screen7 input[type="checkbox"]:checked').each(function () {
        $(".otvetOtdelka").append($(this).val() + ", ");
    });
    if($(".otvetOtdelka").text().length == 0){
        $(".otvetOtdelka").text('Неизвестно');
    } else{
        var zap  = $(".otvetOtdelka").text().slice(0,-2);
        $(".otvetOtdelka").text(zap);
    }


    //Дополнительные условия
    $('#screen8 input[type="checkbox"]:checked').each(function () {
        $(".otvetDopolnitelno").append($(this).val() + ", ");
    });
    var zap  = $(".otvetDopolnitelno").text().slice(0,-2);
    $(".otvetDopolnitelno").text(zap);
}

//Рандомайзер
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//fancy
$(document).ready(function () {
    $(".fancy").fancybox({
        // Options will go here
    });
});

//owl carousel
$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:6,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
});

//tooltip
$(document).ready(function () {
    $('.toolTip').click(function (e) {
        e.preventDefault();
    });
});

//slider
$(document).ready(function () {
   $('#sliderH').slider({
       range: "min",
       min: 120,
       max: 400,
       value: 270,
       slide: function( event, ui ) {
           $('#screen5 #height').val( ui.value );
       }
   });
    $('#sliderW').slider({
        range: "min",
        min: 60,
        max: 1000,
        value: 250,
        slide: function( event, ui ) {
            $('#screen5 #width').val( ui.value );
        }
    });
    $('#sliderD').slider({
        range: "min",
        min: 20,
        max: 100,
        value: 60,
        slide: function( event, ui ) {
            $('#screen5 #deep').val( ui.value );
        }
    });
   $('#screen5 #height').val( $("#sliderH").slider("value"));
   $('#screen5 #width').val( $("#sliderW").slider( "value" ));
   $('#screen5 #deep').val( $("#sliderD").slider( "value" ));

    $( "#screen5 #height" ).on( "change", function() {
        $("#sliderH").slider( "value", $(this).val() );
    });
    $( "#screen5 #width" ).on( "change", function() {
        $("#sliderW").slider( "value", $(this).val() );
    });
    $( "#screen5 #deep" ).on( "change", function() {
        $("#sliderD").slider( "value", $(this).val() );
    });

});

//ShkafParam Light
$(document).ready(function () {
    var shkafParamBlock = $('#screen5 .quest');
    $('#screen5 .quest >div').mouseenter(function () {
        if($(this).hasClass('deep')){
            shkafParamBlock.css('background-image', 'url(img/shkafRazmerDeep.png)');
        } else if($(this).hasClass('height')){
            shkafParamBlock.css('background-image', 'url(img/shkafRazmerHeight.png)');
        }  else if($(this).hasClass('width')){
            shkafParamBlock.css('background-image', 'url(img/shkafRazmerWidth.png)');
        }
    });
    $('#screen5 .quest >div').mouseleave(function () {
        shkafParamBlock.css('background-image', 'url(img/shkafRazmer.png)');
    });
});

//Куда поставить шкаф - активированный пункт
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen3 input[name="shkafPlace"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkPlace();
    $('#screen3 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="shkafPlace"]').prop("checked", true);
        checkPlace();
    });
});

//Тип шкафа - активированный пункт
$(document).ready(function () {
    function checkType () {
        var elMass = $('#screen4 input[name="shkafType"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkType();
    $('#screen4 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="shkafType"]').prop("checked", true);
        if($(this).parent().hasClass('dontKnow')){
            $('#screen4 .pseudoBtn').addClass("selected");
            var hideScreen = $(this).closest('.screen');
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);

        } else {
            $('#screen4 .pseudoBtn').removeClass("selected");
        }
        checkType();
    });
});

//shkaf complete
// function addItems(inp) {
//     var id = $(inp).attr("id");
//     var elMass = $('.shkafInside .shkafInsideContain img');
//     if($(inp).prop( "checked" )){
//         $(inp).parent().addClass("selected").find('img').addClass("selected");
//         $.each(elMass, function (i, val) {
//             if($(val).hasClass(id)){
//                 $(val).show("scale", { percent: 50 }, 500);
//             }
//         });
//     }
//     else{
//         $(inp).parent().removeClass("selected").find('img').removeClass("selected");
//         $.each(elMass, function (i, val) {
//             if($(val).hasClass(id)){
//                 $(val).hide("scale", { percent: 50 }, 500);
//             }
//         });
//     }
// }
// $(document).ready(function () {
//     $('#screen6 .quest input[type="checkbox"]').change(function () {
//         addItems($(this));
//         // var id = $(this).attr("id");
//         // var elMass = $('.shkafInside .shkafInsideContain img');
//         // if($(this).prop( "checked" )){
//         //     $(this).parent().addClass("selected").find('img').addClass("selected");
//         //     $.each(elMass, function (i, val) {
//         //         if($(val).hasClass(id)){
//         //             $(val).show("scale", { percent: 50 }, 500);
//         //         }
//         //     });
//         // }
//         // else{
//         //     $(this).parent().removeClass("selected").find('img').removeClass("selected");
//         //     $.each(elMass, function (i, val) {
//         //         if($(val).hasClass(id)){
//         //             $(val).hide("scale", { percent: 50 }, 500);
//         //         }
//         //     });
//         // }
//     });
// });

//Конфигурация шкафа - активированный пункт
$(document).ready(function () {
    function checkConfig () {
        var elMass = $('#screen6 input[name="otdely"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkConfig();
    $('#screen6 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="otdely"]').prop("checked", true);
        checkConfig();
    });
});


//name
$(document).ready(function () {
   $('#screen2 .next').click(function (e) {
       var personName = $('input[name="name"]').val();
       if (personName.length == 0){
           $('.personName').html("Аноним");
       } else{
           $('.personName').html(personName);
       }

   });
});

//Форма
$(document).ready(function () {

    completeFields();

    //Экран 7 переключение checkbox
    $('#screen7 #dontKnowCover').click(function () {
        if($(this).prop( "checked" )){
            $(this).parent().parent().find(".pseudoBtn").addClass("selected");
            $('#dsp, #zerkala, #peskostrui, #fotopechat, #ekokozha, #lakobel').prop( "checked", false );
            $('.coverImg ').removeClass('selected');
            var hideScreen = $(this).closest('.screen');
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);

        } else {
            $(this).parent().parent().find(".pseudoBtn").removeClass("selected");
            $('#dsp').prop( "checked", true );
        }
    });
    $('#dsp, #zerkala, #peskostrui, #fotopechat, #ekokozha, #lakobel').click(function () {
        $('#screen7 #dontKnowCover').prop( "checked", false );
        $('#screen7 #dontKnowCover').parent().parent().find(".pseudoBtn").removeClass("selected");
        if ($(this).prop("checked")){
            $(this).parent().parent().find('.coverImg ').addClass('selected');
        } else {
            $(this).parent().parent().find('.coverImg ').removeClass('selected');
        }
    });

    //Экран 8 активация кнопки
    $('#screen8 .pseudoBtn').click(function () {
        $('#doprassr, #doprasgarant, #dopbelsplzamer, #doppodlestnica, #dopskidka').prop( "checked", true );
        $('#screen8 .coverImg').addClass("selected");
    });
    $('#screen8 ul li label').click(function () {
        if ($(this).find('input[type="checkbox"]').prop("checked")){
            $(this).find('.coverImg').addClass("selected");
        } else {
            $(this).find('.coverImg').removeClass("selected");
        }
    });

    //Экран-агрегатор
    $('#screen8 .next, #screen8 .openNextStep, #screen8 .steps').click(function () {
        completeFields();
    });
});

//Количество конфигураций
$(document).ready(function () {
   var configKolvo =  Math.round(getRandomArbitrary(63, 400));
   $('#screen8 .next, #screen8 .openNextStep, #screen8 .steps').click(function () {
       $('#screen9 .resultCount span').animate({ num: configKolvo /* - начало */ }, {
           duration: 5000,
           step: function (num){
               this.innerHTML = (num).toFixed(0);
           },
           complete: function() {
               $(this).addClass("blink");
               $('#screen9 .next').addClass("selected");
           }
       });
       var $target = $('#screen9 .quest li');
       var hold = 800;

       $.each($target,function(i,t){
           var $this = $(t);
           setTimeout(function(){ $this.show('normal'); },i*hold);
       });
   })
});

//Шары
$(document).ready(function () {
   $('#screen9 .next').click(function () {
        $('#screen10 .mBaloon').animate({"top": "-773px"}, 40000);
   }); 
});

//navigation
$(document).ready(function () {
    $('.startQuest, .owl-item, .rightSide, .inpNext, .openNextStep, .navigation .steps').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('#screen9').on('click', $('.resultCount span'), function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .container>p').click(function () {
        var hideScreen = $(this).closest('.screen');
        if ($(this).hasClass("prev")){
            var showScreen = hideScreen.prev();
            runEffect(hideScreen, showScreen);
        } else if ($(this).hasClass("next")){
            var showScreen = hideScreen.next();
            if($(hideScreen).attr('id')=='screen2'){
                function callback2(){
                    setTimeout(function() {runEffect(hideScreen, showScreen);showScreen.scrollTop(0);}, 1500 );
                }
                if($('#screen2 .ld').hasClass('moveDoor')){
                    runEffect(hideScreen, showScreen);
                } else {
                    $('#screen2 .ld, #screen2 .rd').addClass("moveDoor", 1000, callback2());
                }

            }
            else{
                runEffect(hideScreen, showScreen);
            }
        }

        return false;
    })
});

//1 scren show sticker
$(document).ready(function () {
    setTimeout(function () {
            $('.rightSide').animate(
                {left: 0},
                {duration: 5000, easing: "easeInOutBack"}
            )}
            , 3000
    );
});

//Отправка формы
$(document).ready(function () {
    $('#screen10 .itogBtn input[type="button"]').click(function () {
        if ($('#phone').val().replace(/\D+/g,"").length<7){
            $('#screen10 .phone .alert').show("slow").effect("shake", 500);
        }
        else{
            // $code = $('select[name="code"]').val();
            $phone = $('input[name="phone"]').val();
            $tel = $phone;
            $(this).prop( 'disabled', true ).val('Отправка...');
            $('#screen10 .phone .alert').hide();
            yaCounter45709953.reachGoal('RaschetFinal');
            ga('send', 'event', 'Btn', 'Click', 'RaschetFinal');
            _tmr.push({ id: '3050545', type: 'reachGoal', goal: 'RaschetFinal' });
            $('form').submit();
        }
    });
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
                    yaCounter45709953.reachGoal('ZakazZvonkaVsplivashka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonkaVsplivashka');
                    _tmr.push({ id: '3050545', type: 'reachGoal', goal: 'ZakazZvonkaVsplivashka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
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
        var form = $('#zvonokForm');
        var phone = $('#zvonokForm').find('input[name="phone"]');
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
                    yaCounter45709953.reachGoal('ZakazZvonka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonka');
                    _tmr.push({ id: '3050545', type: 'reachGoal', goal: 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
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
});

//Отмен нажатия по кнопке "назад"
$(document).ready(function () {
    history.pushState(null, null, location.href);
    window.onpopstate = function(event) {
        history.go(1);
    };
});

//Плашка фиксация по центру
// $(document).ready(function () {
//     var plash = $('.plashka');
//     plash.each(function () {
//         var heig = $(this).closest('.screen').height();
//         var wid =  $(this).closest('.screen').width();
//         $(this).css({
//             position:'absolute',
//             left: (wid - $(this).outerWidth())/2,
//             top: (heig - $(this).outerHeight())/2
//         });
//     });
//
//     $(window).resize(function(){
//         plash.each(function () {
//             var heig = $(this).closest('.screen').height();
//             $(this).css({
//                 position:'absolute',
//                 top: (heig - $(this).outerHeight())/2
//             });
//         });
//
//     });
// });

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
});

//Появление стикера на втором экране
$(document).ready(function() {
    var distance_for_sticker = $('#screen3').offset().top - $(window).height(),
        $sticker = $('.stickerCall');

    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker){
            $sticker.addClass('visible');
        }
        else {
            $sticker.removeClass('visible');
        }
    });

});

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});
