/**
 * Created by Viktoryia Tsekhanovich on 09.01.2017.
 */
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

//Экран 7 собирает все поля
function completeFields() {
    //Тип кухни
    var tip = $('#screen2 input[type="radio"]:checked').val();
    $('#screen7 .otvetTip').html(tip);

    //Размер
    var razmer = parseInt($('#screen3 input[name="kuhSize"]').val().replace(/\D+/g,""));
    $('#screen7 .otvetRazmer span').html(razmer);

    //Стиль кухни
    var style = $('#screen4 input[type="radio"]:checked').val();
    $('#screen7 .otvetStyle').html(style);

    //Материал фасадов
    var fasad = $('#screen5 input[type="radio"]:checked').val();
    $('#screen7 .otvetFasad').html(fasad);

    //Встраиваемая техника
    // $(".otvetTehnika").html("");
    // $('#screen6 input[type="checkbox"]:checked').each(function () {
    //     $(".otvetTehnika").append($(this).val() + ", ");
    // });
    // if($(".otvetTehnika").text().length == 0){
    //     $(".otvetTehnika").text('Неизвестно');
    // } else{
    //     var zap  = $(".otvetTehnika").text().slice(0,-2);
    //     $(".otvetTehnika").text(zap);
    // }
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
    var owl = $('#showroomCarousel');
    owl.owlCarousel({
        items:6,
        loop:true,
        margin:20,
        autoplay:true,
        autoplayTimeout:3000,
        autoWidth:true,
        autoplayHoverPause:true
    });

    var owl2 = $('.catalogCarousel');
    owl2.owlCarousel({
        items:1,
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        nav: true,
        navText: ["",""]
    });
});

//slider
$(document).ready(function () {
   $('#razmerSlider').slider({
       range: "min",
       min: 3,
       max: 25,
       value: 14,
       slide: function( event, ui ) {
           $('#screen3 input[name="kuhSize"]').val( ui.value );
       }
   });

   $('#screen3 input[name="kuhSize"]').val( $("#razmerSlider").slider("value"));

    $( "#screen3 input[name='kuhSize']" ).on( "change", function() {
        $("#razmerSlider").slider( "value", $(this).val() );
    });

});

//Тип (форма) будущей кухни
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen2 input[name="kuhType"]');
        $.each(elMass, function (i, val) {
            $(val).closest('.item').removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).closest('.item').addClass("selected");
            }
        });
    }
    checkPlace();
    $('#screen2 label').click(function (e) {
        checkPlace();
    });
});

//Cтиль кухни - активированный пункт
$(document).ready(function () {
    function checkType () {
        var elMass = $('#screen4 input[name="kuhStyle"]');
        $.each(elMass, function (i, val) {
            $(val).closest('.item').find('.title img').removeClass('up');
            $(val).closest('.item').find('.text').slideUp('slow');
            $(val).closest('.item').find('.text').slideUp('slow');

            if($(val).prop("checked")){
                $(val).closest('.item').find('.text').slideDown('slow');
                $(val).closest('.item').find('.title img').addClass('up');

                var phMass = $('#screen4 .catalogPart .catalogCarousel');
                $.each(phMass, function (j, val2) {
                    if($(val2).hasClass($(val).attr('id'))){
                        $('#screen4 .catalogPart .catalogCarousel').hide();
                        $(val2).show();
                    }
                });
            }
        });
    }
    checkType();
    $('#screen4 input[type="radio"]').change(function (e) {
        checkType();
    });
});

//Материал фасадов кухни - изменение картинки
$(document).ready(function () {
    function checkType () {
        var elMass = $('#screen5 input[name="kuhFasad"]');
        $.each(elMass, function (i, val) {

            if($(val).prop("checked")){
                var phMass = $('#screen5 .illustrations img');
                $.each(phMass, function (j, val2) {
                    if($(val2).hasClass($(val).attr('id'))){
                        $('#screen5 .illustrations img').hide();
                        $(val2).show();
                    }
                });
            }
        });
    }
    checkType();
    $('#screen5 input[type="radio"]').change(function (e) {
        checkType();
    });
});

//Встраиваемая техника
$(document).ready(function () {
    function checkTeh () {
        var elMass = $('#screen6 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            if($(val).prop("checked")){
                $(val).closest('.item').addClass("selected");
            } else{
                $(val).closest('.item').removeClass("selected");
            }
        });
    }
    checkTeh();
    $('#screen6 input[type="checkbox"]').change(function (e) {
        checkTeh();
    });
});


//Экран агрегатор собирает информацию
$(document).ready(function () {
    completeFields();
    //Экран-агрегатор
    $('#screen5 .next, #screen5 .openNextStep, #screen5 .steps').click(function () {
        completeFields();
        var $target = $('#screen7 .quest li');
        var hold = 800;
        $.each($target,function(i,t){
            var $this = $(t);
            setTimeout(function(){ $this.show('normal'); },i*hold);
        });
    });
});

//navigation
$(document).ready(function () {
    $('.startQuest, .owl-item, .rightSide, .inpNext, .openNextStep, .navigation .steps, .utpstick').click(function () {
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

//Отправка формы
$(document).ready(function () {
    $('body #screen3 .plashka .quest .description .button').click(function () {
        $('#consultationForm').removeClass();
        $('#consultationForm').addClass('consultation');
        $('#consultationForm input[name="type"]').attr('value','Хочу бесплатный замер');
    });
    $('body #screen4 .catalogPart .button').click(function () {
        $('#consultationForm').removeClass();
        $('#consultationForm').addClass('knowprice');
        $('#consultationForm input[name="type"]').attr('value','Узнать стоимость кухни');
    });
    $('body #screen1 header .button').click(function () {
        $('#consultationForm').removeClass();
        $('#consultationForm input[name="type"]').attr('value','Заказать звонок');
    });
    $('.itogBtn input[type="button"]').click(function () {
        if ($('#phone').val().replace(/\D+/g,"").length<7){
            $('#screen8 .phone .alert').show("slow").effect("shake", 500);
        }
        else{
            // $code = $('select[name="code"]').val();
            $phone = $('input[name="phone"]').val();
            $tel = $phone;
            $(this).prop( 'disabled', true ).val('Отправка...');
            $('#screen8 .phone .alert').hide();
            yaCounter44848930.reachGoal('RaschetFinal');
            ga('send', 'event', 'Btn', 'Click', 'RaschetFinal');
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
        var form = $(this);
        var phone = $(form).find('input[name="phone"]');
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
                    yaCounter44848930.reachGoal('ZakazZvonkaVsplivashka');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZvonkaVsplivashka');
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
    $('#consultationForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = $(form).find('input[name="phone"]');
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
                    if($('#consultationForm').hasClass('consultation')){
                        yaCounter44848930.reachGoal('Consultation');
                        ga('send', 'event', 'Btn', 'Click', 'Consultation');
                    } else if($('#consultationForm').hasClass('knowprice')){
                        yaCounter44848930.reachGoal('Stoimost');
                        ga('send', 'event', 'Btn', 'Click', 'Stoimost');
                    } else {
                        yaCounter44848930.reachGoal('ZakazZvonka');
                        ga('send', 'event', 'Btn', 'Click', 'ZakazZvonka');
                    }
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать звонок');
                        $('#consultationForm').removeClass();
                        $('#consultationForm input[name="type"]').attr('value','Заказ консультации');
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