/**
 * Created by Viktoryia Tsekhanovich on 09.01.2017.
 */

var saleCount = 5;
function saleProgress(sale) {
    var fullBar = $('.bar').width();
    var bar = $('.bar-inner');
    var saleSize = fullBar - ((fullBar / 100) * sale);
    bar.stop(true, true);
    $('.bar').addClass('shake');
    bar.animate({width: saleSize}, 500, function(){
        setTimeout(function() {
            $('.bar').removeClass('shake');
        }, 500);
        
    });
    $('.barText').text(sale).addClass('bounceIn');
    setTimeout(function(){$('.barText').removeClass('bounceIn')}, 300);
    
}



// Переключение экранов
function runEffect(hideScreen, showScreen) {
    // get effect type from
    // var selectedEffect = "slide";
    // Most effect types need no options passed by default
    // var options = {};
    // some effects have required parameters
    // if ( selectedEffect === "scale" ) {
    //     options = { percent: 50 };
    // } else if ( selectedEffect === "transfer" ) {
    //     options = { to: "#button", className: "ui-effects-transfer" };
    // } else if ( selectedEffect === "size" ) {
    //     options = { to: { width: 200, height: 60 } };
    // }
    // Run the effect
    // hideScreen.hide( selectedEffect, options, 500, callback(hideScreen, showScreen) );
    showScreen.show();
        
    saleCount = +$($('.barText')[0]).text();
    if(!saleCount) {
        saleCount = 5;
    }
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000, function() {
            
        });
        if($('#screen2').css('display') == 'table' && $('#screen3').css('display') == 'none') {
            saleProgress(saleCount);
        }
        if($('#screen4').css('display') == 'table' && $('#screen5').css('display') == 'none') {
            if(saleCount < 100) {
                saleCount += 10;
            }
            else {
                saleCount = 100;
            }
        }
        if($('#screen7').css('display') == 'table' && $('#screen9').css('display') == 'none') {
            if(saleCount < 100) {
                saleCount += 10;
            }
            else {
                saleCount = 100;
            }
            saleProgress(saleCount);
        }
    return false;
}
// function callback(hideScreen, showScreen) {
//     setTimeout(function() {
//         // $( ".screen" ).removeAttr( "style" ).hide().fadeIn();
//         showScreen.show();
//         $('html, body').scrollTop(0);
//     }, 0 );
// }


//Рандомайзер
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

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

//slider
$(document).ready(function () {
    $('.slider').slider({
        range: "min",
        min: 1,
        max: 25,
        value: 5,
        slide: function( event, ui ) {
            $('input[name="flatEtazh"]').val( ui.value );
        }
    });
   $('input[name="flatEtazh"]').val( $(".slider").slider("value"));

    $('input[name="flatEtazh"]').on( "change", function() {
        $(".slider").slider( "value", $(this).val() );
    });

});

//ГДЕ БУДЕМ МЕНЯТЬ ОКНА? - активированный пункт
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen2 input[name="housePlace"]');
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
    $('#screen2 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="housePlace"]').prop("checked", true);
        var sale = $(this).find('input[name="housePlace"]').data('sale');
        saleProgress(sale);
        checkPlace();
        saleCount = +sale;
    });
});

//КУДА ВЫ ХОТИТЕ УСТАНОВИТЬ ОКНА?
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen3 input[type="checkbox"]');
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
        // e.preventDefault();
        checkPlace();
        var allSales = 0;
        var elMass = $('#screen3 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            allSales += $(val).data('sale');
            if(!$(val).prop("checked")) {
                allSales -= $(val).data('sale');
            }
        });
        if(saleCount < 100) {
            saleProgress(saleCount + allSales);
        }
        else {
            saleCount = 100;
            saleProgress(saleCount);
        }
    });
});
//УТОЧНИТЕ ОСОБЕННОСТИ КВАРТИРЫ
$(document).ready(function() {
    if($('#screen4').css('display') == 'table') {
        if(saleCount < 100) {
            saleCount += 10;
        }
        else {
            saleCount = 100;
        }
    }
    $('#screen4 input').change(function() {saleProgress(saleCount);});
});
//ВЫБЕРИТЕ ТИП И КОЛИЧЕСТВО ОКОН
$(document).ready(function() {
    $('.plus').click(function() {
            if(saleCount < 100) {
                saleCount += 10;
            }
            else {
                saleCount = 100;
            }
            saleProgress(saleCount);    
    });
    $('.minus').click(function() {
        if($(this).closest('.num').find('input').val() > 0 ) {
            saleCount -= 10;
            saleProgress(saleCount);
        }
        else {
            return false;
        }
    });
});
//ВЫБЕРИТЕ ПРОФИЛЬ РАМЫ
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen6 input[type="checkbox"]');
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
    $('#screen6 label').click(function (e) {
        checkPlace();
        var allSales = 0;
        var elMass = $('#screen6 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            allSales += $(val).data('sale');
            if(!$(val).prop("checked")){
                allSales -= $(val).data('sale');
            }
        });
        if(saleCount < 100) {
            saleProgress(allSales + saleCount);
        }
        else {
            saleCount = 100;
            saleProgress(saleCount);
        }
    });
});

//ДОПОЛНИТЕЛЬНАЯ КОМПЛЕКТАЦИЯ ОКНА
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen7 input[type="checkbox"]');
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
    $('#screen7 label').click(function (e) {
        checkPlace();
        var allSales = [];
        $.each($('#screen7 input[type="checkbox"]'), function(i, val) {
            if($(val).prop('checked')) {
                allSales.push($(val));
            }
        });
        if(allSales.length >= 2) {
            saleProgress(saleCount);
        }
        else if(allSales.length < 2){
            if(saleCount < 100) {
                saleProgress(saleCount - 10);
            }
            else {
                saleCount = 100;
                saleProgress(saleCount);
            }
        }
        else {
            saleProgress(saleCount);
        }
    });
});

//ПОДАРКИ ОТ ФАБРИКИ
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen8 input[type="checkbox"]');
        var massChecked = [];

        $.each(elMass, function (i, val) {
            if($(val).prop("checked")){
                massChecked.push($(val));
            }
        });

        if(massChecked.length<3){
            $.each(elMass, function (i, val) {
                $(val).attr("disabled", false);
                $(val).parent().parent().find('.imgBlock').removeClass("selected");
                $(val).parent().removeClass("selected");
                if($(val).prop("checked")){
                    $(val).parent().parent().find('.imgBlock').addClass("selected");
                    $(val).parent().addClass("selected");
                }
            });
        } else if(massChecked.length===3) {
            $.each(elMass, function (i, val) {
                if(!$(val).prop("checked")){
                    $(val).attr("disabled", true);
                }
                $(val).parent().parent().find('.imgBlock').removeClass("selected");
                $(val).parent().removeClass("selected");
                if($(val).prop("checked")){
                    $(val).parent().parent().find('.imgBlock').addClass("selected");
                    $(val).parent().addClass("selected");
                }
            });
        } else {
            return false;
        }
    }
    checkPlace();
    $('#screen8 label').click(function (e) {
        checkPlace();
    });
});

//Окно с анимацией
$(document).ready(function () {
    $('#screen7 .openNextStep p, #screen7 .next').click(function () {
        // setTimeout(function () {
        //     $('body #screen9 .quest .animatedText .first').addClass('animated').addClass('fadeOutLeft');
        //     $('body #screen9 .quest .animatedText .second').show().addClass('animated').addClass('fadeInRight');
        //     setTimeout(function () {
        //         $('body #screen9 .quest .animatedText .second').addClass('animated').addClass('fadeOutLeft');
        //         $('body #screen9 .quest .animatedText .third').show().addClass('animated').addClass('fadeInRight');
        //         setTimeout(function () {
        //             $('body #screen9 .quest .animatedText .third').addClass('animated').addClass('fadeOutLeft');
        //             $('body #screen9 .quest .animatedText .last').show().addClass('animated').addClass('fadeInRight');
        //             setTimeout(function () {
        //                 var hideScreen = $('#screen9');
        //                 var showScreen = hideScreen.next();
        //                 if(saleCount < 55) {saleCount = 55}
        //                 $('input[name="sale"]').val(saleCount + ' BYN');
        //                 $('#screen10 .question span').text(saleCount + ' BYN');
        //                 runEffect(hideScreen, showScreen);
        //                 return false;
        //             }, 1500)
        //         }, 3000)
        //     }, 3000)
        // }, 3000);
        var hideScreen = $('#screen9');
        var showScreen = hideScreen.next();
        if(saleCount < 55) {saleCount = 55}
        $('input[name="sale"]').val(saleCount + ' BYN');
        $('#screen10 .question span').text(saleCount + ' BYN');
        runEffect(hideScreen, showScreen);
        return false;
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
            runEffect(hideScreen, showScreen);
        }

        return false;
    })
});

//1 scren show sticker
$(document).ready(function () {
    setTimeout(function () {
            $('.rightSide').show().addClass('animated').addClass('fadeInRightBig')}
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
            $('input[name="sale"]').val(saleCount);
            $phone = $('input[name="phone"]').val();
            $tel = $phone;
            $(this).prop( 'disabled', true ).val('Отправка...');
            $('#screen10 .phone .alert').hide();
            yaCounter43956349.reachGoal('StoimostFinal');
            ga('send', 'event', 'Btn', 'Click', 'StoimostFinal');
            _tmr.push({ id: '3038158', type: 'reachGoal', goal: 'StoimostFinal' });
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
        var formType = form.find('input[name="type"]').val();
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
                    if(formType === "Заказ звонка") {
                        yaCounter43956349.reachGoal('ZakazZvonkaVsplivashka');
                        ga('send', 'event', 'Btn', 'Click', 'ZakazZvonkaVsplivashka');
                        _tmr.push({ id: '3038158', type: 'reachGoal', goal: 'ZakazZvonkaVsplivashka' });
                    }
                    if(formType === "Обьемная скидка") {
                        yaCounter43956349.reachGoal('VolumeDiscount');
                        ga('send', 'event', 'Btn', 'Click', 'VolumeDiscount');
                        _tmr.push({ id: '3038158', type: 'reachGoal', goal: 'VolumeDiscount' });
                    }
                    if(formType === "Консультация") {
                        yaCounter43956349.reachGoal('Consultation');
                        ga('send', 'event', 'Btn', 'Click', 'Consultation');
                        _tmr.push({ id: '3038158', type: 'reachGoal', goal: 'Consultation' });
                    }
                   
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
       $('#callForm input[name="type"]').val('Заказ звонка');
       $('.callWind').show("slow");
    });
    $('.callWind .close').click(function () {
        $('.callWind').hide();
        $('.stickerCall').show("slow");
    });
    $('.stickerWindownum').click(function () {
        $('#callForm input[name="type"]').val('Обьемная скидка');
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
    $('.stickerRassr').click(function () {
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
    $('#screen6 .consult').click(function () {
        $('#callForm input[name="type"]').val('Консультация');
        $('.stickerCall').hide();
        $(this).hide();
        $('.callWind').show("slow");
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
//появление стикера на пятом экране

$(document).ready(function() {
    $(window).scroll(function() {
        if($('#screen6').css('display') == 'table' && $('#screen7').css('display') == 'none') {
            $('.stickerCall').fadeOut();
            $('.consult').fadeIn();
        }
        else {
            $('.stickerCall').fadeIn();
            $('.consult').fadeOut();
        }
    });
});


//Переключсение количества окон
$(document).ready(function () {
    $('body #screen5 .quest ul li .num .plus, body #screen5 .quest ul li .num .minus').click(function () {
        var inp = $(this).closest('.num').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<1){
                return false;
            } else{
                $(this).closest('.num').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.num').find('input').val(inp*1 + 1);
        }
    });
    $('body #screen5 .quest ul li .num input').change(function () {
        if($(this).val()<0){
            $(this).val(0);
        }
    });
});

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});

