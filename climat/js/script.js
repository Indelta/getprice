/**
 * Created by Viktoryia Vorozhun on 19.12.2017.
 */
// Переключение экранов
function runEffect(hideScreen, showScreen) {

    showScreen.show();
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000);
    return false;
}

/*fancy*/
$(document).ready(function () {
    $(".fancy").fancybox({
        padding: 0
    });
});

/*chosen*/
// $(document).ready(function () {
//     $(".chosen-select").chosen();
// });

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
            monthNames: [ "Январь","Февраль","Март","Апрель","Май","Июнь",
                "Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь" ],
            monthNamesShort: [ "Янв","Фев","Мар","Апр","Май","Июн",
                "Июл","Авг","Сен","Окт","Ноя","Дек" ],
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
    $('#slider').slider({
        range: "min",
        min: 100,
        max: 10000,
        value: 1000,
        slide: function( event, ui ) {
            $('input[name="budget"]').val( ui.value );
        }
    });
   $('input[name="budget"]').val( $("#slider").slider("value"));

    $('input[name="budget"]').on( "change", function() {
        $("#slider").slider( "value", $(this).val() );
    });

});

//navigation
$(document).ready(function () {
    $('.startQuest').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .steps').click(function () {
        if($(this).closest('.screen').attr('id') !== 'screen8'){
            var hideScreen = $(this).closest('.screen');
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);
            return false;
        }
    });

    $('#screen8 .quest .backtoQuest').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.prev();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .button2, .nextBottomBlock .button').click(function () {
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

    $('#thankyou .closeThankYou').click(function () {
        $('#thankyou').hide();
        $('#kalkulatorForm .screen').hide();
        $('#kalkulatorForm').find('#screen1').show();
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

/***********************/

//Куда вы хотите установить кондиционер?
$(document).ready(function () {
    $('#screen2 .quest ul li .choose input').change(function () {
        //Стилизация блоков
        $('#screen2 .quest ul li .choose').removeClass('selected');
        $('#screen2 .quest ul li .choose input:checked').closest('.choose').addClass('selected');
        //Изменение в экране 4
        if($(this).attr('id') === 'flat'  || $(this).attr('id') === 'house'){
            $('#screen4 .officeChoose').hide();
            $('#screen4 .flatChoose').show();
        } else {
            $('#screen4 .officeChoose').show();
            $('#screen4 .flatChoose').hide();
        }
    });
});

//Выберите тип кондиционера
$(document).ready(function () {
    $('#screen4 .quest ul li .choose input').change(function () {
        $('#screen4 .quest ul li .choose').removeClass('selected');
        $('#screen4 .quest ul li .choose input:checked').closest('.choose').addClass('selected');
    });
});

//Выберите дополнительные параметры
$(document).ready(function () {
    $('#screen6 .quest ul li .choose input').change(function () {
        if($(this).prop('checked')){
            $(this).closest('.choose').addClass('selected');
        } else {
            $(this).closest('.choose').removeClass('selected');
        }
    });
});

//Агрегатор
$(document).ready(function () {
    $('#screen6 .next, #screen6 .navigation ul, #screen6 .nextBottomBlock .next').click(function () {
        //Куда вы хотите установить кондиционер?
        var fullWhere = $('#screen2 input[name="where"]:checked').val();
        $('#screen7 .fullWhere').text(fullWhere);

        //Укажите метраж помещения
        var fullSize = $('#screen3 input[name="size"]:checked').val();
        if (!fullSize){
            fullSize = 'Не выбрано';
        }
        $('#screen7 .fullSize').text(fullSize);

        //Выберите тип кондиционера
        var fullTypecond = $('#screen4 input[name="typecond"]:checked').val();
        if (!fullTypecond){
            fullTypecond = 'Неизвестного типа';
        }
        $('#screen7 .fullTypecond').text(fullTypecond);

        //Укажите приемлемый для Вас бюджет
        var fullPrice = $('#screen5 input[name="price"]:checked').val();
        if (!fullPrice){
            fullPrice = 'Бюджет не указан';
        }
        $('#screen7 .fullPrice').text(fullPrice);

        //Выберите дополнительные параметры
        $("#screen7 .fullAdditional").text('');

        $('#screen6 input[type="checkbox"]:checked').each(function () {
            $("#screen7 .fullAdditional").append($(this).val() + ", ");
        });
        if($("#screen7 .fullAdditional").text().length == 0){
            $("#screen7 .fullAdditional").text('Не выбрано');
        } else{
            var zap  = $("#screen7 .fullAdditional").text().slice(0,-2);
            $("#screen7 .fullAdditional").text(zap);
        }

    });
});

//Идёт поиск вариантов
$(document).ready(function () {
    $('#screen6 .next, #screen6 .navigation ul, #screen6 .nextBottomBlock .button').click(function () {
        function animateBar(){
            console.log('start animation');
            $("#screen7 .progressBar .linebar .bar").animate({
                width: "100%"
            }, 8000,function() {
                $('#screen7 .progressBar .text').text('Готово!');
                runEffect($('#screen7'), $('#screen8'));
            })
        }
        setTimeout(animateBar, 1000);
    });
});

//Число кондиционеров
$(document).ready(function () {
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }
    $('#screen8 .quest .variants .num').text(getRandomInt(8,17));
});

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});

//Отправка форм
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

    var zvonokForm = $('#zvonokForm');
    var zvonokFormType = zvonokForm.find('input[name=type]');

    $('#screen1 header .button, .screen .header .button').click(function () {
        zvonokForm.removeClass().addClass('callClass');
        zvonokFormType.val('Заказ звонка');
    });

    $('#screen3 .quest .nota .button2').click(function () {
        zvonokForm.removeClass().addClass('consultationClass');
        zvonokFormType.val('Получите бесплатную консультацию инженера или пригласите замерщика прямо сейчас');
    });

    $('#screen4 .quest .nota .button2').click(function () {
        zvonokForm.removeClass().addClass('consultationtypeClass');
        zvonokFormType.val('Получите профессиональную консультацию инженера для выбора типа кондиционера');
    });

    $('#screen5 .quest .nota .button2').click(function () {
        zvonokForm.removeClass().addClass('rassrochkaClass');
        zvonokFormType.val('Заказать в рассрочку');
    });

    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#callForm');
        var phone = $('#callForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
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
                    yaCounter47611696.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
                    _tmr.push({ id: '3038267', type: 'reachGoal', goal: 'ZakazZvonkaVsplivashka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
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

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
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
                        yaCounter47611696.reachGoal('ZakazZvonka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                        _tmr.push({ id: '3038267', type: 'reachGoal', goal: 'ZakazZvonka' });
                    } else if (form.hasClass('consultationClass')){
                        yaCounter47611696.reachGoal('Consultation');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Consultation' });
                        _tmr.push({ id: '3038267', type: 'reachGoal', goal: 'Consultation' });
                    } else if (form.hasClass('consultationtypeClass')){
                        yaCounter47611696.reachGoal('Consultation');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Consultation' });
                    } else if (form.hasClass('rassrochkaClass')){
                        yaCounter47611696.reachGoal('Rassrochka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Rassrochka' });
                        _tmr.push({ id: '3038267', type: 'reachGoal', goal: 'Rassrochka' });
                    }
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
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
        $('#screen10 .phone .alert').hide();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = $('#kalkulatorForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            $('#screen8 .alert').show("slow").effect("shake", 500);
            but.prop( 'disabled', false ).val('Получить подарок');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter47611696.reachGoal('RaschetFinal');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'RaschetFinal' });
                    _tmr.push({ id: '3038267', type: 'reachGoal', goal: 'RaschetFinal' });
                    $('.screen').fadeOut(300, function () {
                        form.trigger('reset');
                        $('#thankyou').show();
                        $('.stickerCall').show();
                    });
                }
            });
        }
        return false;
    });
});