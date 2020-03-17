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
    $('.startQuest, .nextBottomBlock .button, .navigation .steps').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .button2').click(function () {
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

//Плюс-Минус
$(document).ready(function () {
    $('body #screen2 .quest ul li .inputBlock .calcButton, body #screen5 .quest .chooseLine .rooms .inputBlock .calcButton').click(function () {
        var inp = $(this).closest('.inputBlock').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<1){
                return false;
            } else{
                $(this).closest('.inputBlock').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.inputBlock').find('input').val(inp*1 + 1);
        }
    });
    $('body #screen2 .quest ul li .inputBlock input, body #screen5 .quest .chooseLine .rooms .inputBlock input').change(function () {
        if($(this).val()<0 || isNaN($(this).val())){
            $(this).val(0);
        }
    });

    //Ночи
    $('body #screen4 .quest .bg .days .inputBlock .calcButton').click(function () {
        var inp = $(this).closest('.inputBlock').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<=1){
                return false;
            } else{
                $(this).closest('.inputBlock').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.inputBlock').find('input').val(inp*1 + 1);
        }
    });
    $('body #screen4 .quest .bg .days .inputBlock input').change(function () {
        if($(this).val()<1 || isNaN($(this).val())){
            $(this).val(1);
        }
    });
});

//Количество звёзд
$(document).ready(function () {
    function checkstars() {
        $('#screen5 .starsLine>div').removeClass('active');
        if($('#screen5 #star1').is(':checked')){
            $('#screen5 .star1').addClass('active');
        } else if ($('#screen5 #star2').is(':checked')){
            $('#screen5 .star1, #screen5 .star2').addClass('active');
        } else if ($('#screen5 #star3').is(':checked')){
            $('#screen5 .star1, #screen5 .star2, #screen5 .star3').addClass('active');
        } else if ($('#screen5 #star4').is(':checked')){
            $('#screen5 .star1, #screen5 .star2, #screen5 .star3, #screen5 .star4').addClass('active');
        } else if ($('#screen5 #star5').is(':checked')){
            $('#screen5 .star1, #screen5 .star2, #screen5 .star3, #screen5 .star4, #screen5 .star5').addClass('active');
        }
    }
    checkstars();
    $('#screen5 .quest .chooseLine .starsLine input').change(function () {
        checkstars();
    });
});

//Активация валюты
$(document).ready(function () {
    function checkValuta() {
        $('body #screen6 .quest .valuta input').closest('label').removeClass('active');
        $('body #screen6 .quest .valuta input').each(function (i,val) {
            if($(val).prop("checked")){
                $(val).closest('label').addClass('active');
            }
        });
    }
    checkValuta();
    $('body #screen6 .quest .valuta label').click(function () {
        checkValuta();
    });
});

//Пока не знаю стоимость
$(document).ready(function () {
    function checkdontknowprice() {
        if($('body #screen6 .quest #dontknowprice').prop("checked")){
            $('body #screen6 #budget').addClass('passive');
            $('body #screen6 .dontknow').addClass('active');
            $('body #screen6 .slider').hide('slow');
        } else {
            $('body #screen6 #budget').removeClass('passive');
            $('body #screen6 .dontknow').removeClass('active');
            $('body #screen6 .slider').show('slow');
        }
    }
    checkdontknowprice();
    $('body #screen6 .quest #dontknowprice').change(function () {
        checkdontknowprice();
    });
});

//Агрегатор
$(document).ready(function () {
    $('#screen6 .next, #screen6 .navigation ul, #screen6 .nextBottomBlock .button').click(function () {
        //Каким составом
        var people = $('#woman').val()*1 + $('#man').val()*1 + $('#child').val()*1 + $('#infant').val()*1;
        $('#screen7 .fullpeopleNum').text(people);

        //Предпочтения
        $('#screen3 input[type="checkbox"]:checked').each(function () {
            $("#screen7 .fullpredp").append($(this).val() + ", ");
        });
        if($("#screen7 .fullpredp").text().length == 0){
            $("#screen7 .fullpredp").text('Неизвестно');
        } else{
            var zap  = $("#screen7 .fullpredp").text().slice(0,-2);
            $("#screen7 .fullpredp").text(zap);
        }

        //Страна для отдыха
        var country = $('#screen3 select[name="country"]').val();
        $('#screen7 .fullcountry').text(country);

        //Количество дней
        var days = $('#screen4 #days').val()*1;
        $('#screen7 .fulldaysNum').text(days);

        //Даты
        var from = $('#screen4 #from').val();
        var to = $('#screen4 #to').val();
        $('#screen7 .fullfromdate').text(from);
        $('#screen7 .fulltodate').text(to);

        //Звёздность отеля
        var stars = $('#screen5 input[name="stars"]:checked').val();
        $('#screen7 .fullstarsNum').text(stars);

        //Количество номеров
        var rooms = $('#screen5 #rooms').val()*1;
        $('#screen7 .fullroomsNum').text(rooms);

        //Питание на отдыхе
        $('#screen5 input[type="checkbox"]:checked').each(function () {
            $("#screen7 .fullMeals").append($(this).val() + ", ");
        });
        if($("#screen7 .fullMeals").text().length == 0){
            $("#screen7 .fullMeals").text('Не выбрано');
        } else{
            var zap  = $("#screen7 .fullMeals").text().slice(0,-2);
            $("#screen7 .fullMeals").text(zap);
        }

        //Бюджет
        if($('#screen6 #dontknowprice').is(':checked')){
            $('#screen7 .fullBudget').text('Не указан');
            $('#screen7 .fullValuta').text('');
        } else {
            //Бюджет
            var budget = $('#screen6 #budget').val()*1;
            $('#screen7 .fullBudget').text(budget);

            //Валюта
            var valuta = $('#screen6 input[name="valuta"]:checked').val();
            $('#screen7 .fullValuta').text(valuta);
        }

    });
});

//Идёт поиск вариантов
$(document).ready(function () {
    $('#screen6 .next, #screen6 .navigation ul, #screen6 .nextBottomBlock .button').click(function () {
        function animateBar(){
            $("#screen7 .quest .progressBar .linebar .bar").animate({
                width: "100%"
            }, 8000,function() {
                $('#screen7 .quest .progressBar .text').text('Готово!')
                runEffect($('#screen7'), $('#screen8'));
            })
        }
        setTimeout(animateBar, 1000);
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
                    yaCounter47087790.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>В ближайшее время с Вами свяжется менеджер по туризму.<br> Незабываемого Вам отдыха! :)</div>");
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
                    yaCounter47087790.reachGoal('ZakazZvonka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>В ближайшее время с Вами свяжется менеджер по туризму.<br> Незабываемого Вам отдыха! :)</div>");
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

        if (phone.val().length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            $('#screen8 .alert').show("slow").effect("shake", 500);
            but.prop( 'disabled', false ).val('Подобрать тур');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter47087790.reachGoal('RaschetFinal');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'RaschetFinal' });
                    $('#screen1, #screen2, #screen3, #screen4, #screen5, #screen6, #screen7, #screen8').fadeOut(300, function () {
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

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});