// слайдер желаемый обьем бака

$(document).ready(function() {
    $('#amount-slider').slider({
        min: 0,
        max: 450,
        range: true,
        values :[5, 420],
        slide: function(e, ui) {
            var min = $('#min-amount');
            var max = $('#max-amount');
            if(ui.handleIndex == 0) {
                min.val(ui.value);
            }
            else {
                max.val(ui.value);
            }
        }
    });
    $('#min-amount, #max-amount').change(function() {
        $('#amount-slider').slider('option', 'values', [$(this).val(), $('#max-amount').val()]);
    });
});
//слайдер логотипы
$(document).ready(function() {
    $('.logos-inner').owlCarousel({
        loop: true,
        items: 6,
        slideBy: 1,
        dots: false,
        autoplay: true,
        nav: false,
        responsive: {
            320: {
                items: 2
            },
            480: {
                items: 3
            },
            700: {
                items: 4
            },
            920: {
                items: 5
            },
            1024: {
                items: 6
            }
        }
    });
});

/*fancy*/
$(document).ready(function () {
    $(".fancy").fancybox({
        padding: 0,
        
    });
});

// phone mask

$(document).ready(function() {
    $('input[name="phone"]').mask('+375(99)999-99-99');
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
// смена классов у формы заказа звонка
$(document).ready(function() {
    $('header .button').on('click', function() {
        $('#zvonokForm').removeClass().addClass('getCallForm');
        $('#zvonokForm').find('input[name="type"]').val('Заказ звонка');
    });
    $('#utp .sticker').on('click', function() {
        $('#zvonokForm').removeClass().addClass('stickerForm');
        $('#zvonokForm').find('input[name="type"]').val('Стикер');
    });
});


// Переключение экранов
function runEffect(showScreen) {
    showScreen.show();
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000);
    return false;
}
//Навигация калькулятор

$(document).ready(function () {
    $('.next-btn, .next').click(function() {
        runEffect($(this).closest('.screen').next());
        return false;
    });
    $('.prev-btn, .prev').click(function() {
        runEffect($(this).closest('.screen').prev());
    });
});

// переключение количества предметов

$(document).ready(function() {
    $('.plus, .minus').on('click', function() {
        var input = $(this).closest('.counter').find('input');
        if($(this).hasClass('plus')) {
            var count = input.val();
            input.val(count * 1 + 1);
        }
        else {
            var count = input.val();
            if(count > 0) {
                input.val(count * 1 - 1);
            }
        }
    });
});

// не знаю radio-button
$(document).ready(function() {
    $('#screen3 .people-count .radio-count').on('change', function() {
        $('#screen3 .people-count .input-count').prop('disabled', true);
    });
    $('#screen3 .plus, #screen3 .minus').on('click', function() {
        $('#screen3 .input-count').prop('disabled', false);
        $('#screen3 .people-count .radio-count').prop('checked', false);
    });
});

//количество человек - изменение слова от цифры

$(document).ready(function() {
    function changeName() {
        var word = $('.counter-name');
        var num = $('#screen3 .input-count').val();
        if(num == 0 || num == 1 || (num >= 5 && num < 22) ) {
            word.text('Человек');
        }
        else {
            word.text('Человека');
        }
    }
    $('#screen3 .counter .plus, #screen3 .counter .minus').on('click', changeName);
    $('#screen3 .input-count').change(changeName);
});


// is selected checkbox
$(document).ready(function() {
    $('#screen1 label').on('click', function() {
        $.each($('#screen1 label input[type="radio"]'), function(i, it) {
            if($(it).prop('checked')) {
                $(it).closest('label').addClass('selected');
            }
            else {
                $(it).closest('label').removeClass('selected');
            }
        });
    });
    $('#screen4 label').on('click', function() {
        $.each($('#screen4 label input[type="radio"]'), function(i, it) {
            if($(it).prop('checked')) {
                $(it).closest('label').addClass('selected');
            }
            else {
                $(it).closest('label').removeClass('selected');
            }
        });
    });
});

// сбор результатов 
$(document).ready(function() {
    $('.lastQuest').on('click', function() {
       // куда устанавливать
        var place = $('#kalkulator #screen1 input:checked').val();
        $('#place-itog').text(place);
       // точки водозабора горячей воды
        var vodozabor = $('input[name="vodozabor"]').val();
        var vodozaborDontKnow = $('input[name="vodozabor-dont-know"]');
        if(vodozaborDontKnow.prop('checked')) {
            $('#vodozabor-itog').text(vodozaborDontKnow.val());
        }
        else {
            $('#vodozabor-itog').text(vodozabor);
        }
       //количество человек
        
        var peopleCount = $('input[name="people-count"]').val();
        if($('#screen3 .people-count .radio-dont-know').prop('checked')) {
            $('#people-count-itog').closest('li').text('Количество человек: не знаю');
        }
        else {
            $('#people-count-itog').text(peopleCount);
        }
       // обьем бака
        var amountMin = $('input[name="amount-min"]').val();
        var amountMax = $('input[name="amount-max"]').val();
        var amountNone = $('input[name="amount-none"]:checked').val();
        $('#amount-min-itog').text(amountMin);
        $('#amount-max-itog').text(amountMax);
        if(amountNone) {
            $('#amount-none-itog').html('Объем: не знаю');
        }
       // тип установки водонагревателя
        var installType = $('#kalkulator #screen4 input:checked').val();
        $('#installType-itog').text(installType);
       // дополнительные параметры
       var itog = [];
       if($('input#dop-indication-t:checked')) {
           itog.push('индикация нагрева');
       }
       itog.push('подводка: ' + $('input[name="podvodka"]:checked').val());
    //    if($('input#dop-compact-t:checked')) {
    //        itog.push('компактные размеры');
    //    }
       itog.push('защита от перегрева: ' + $('input[name="zaschyta"]:checked').val());
       $('#dop-parameters').text(itog.join(', '));
    });
});


//Идёт поиск вариантов
$(document).ready(function () {
    $('#kalkulator #screen4 .next-btn').click(function () {
        function animateBar(){
            $("#kalkulator #screen6 .status-bar .status-inner").animate({
                width: "100%"
            }, {
                step: function(now, fx) {
                    if(fx.prop == 'width') {
                        var status = Math.round(Math.round(now * 100) / 100) + '%';
                        $('#kalkulator #screen6 .status-bar .status-inner .persentage').text(status);
                    }
                },
                duration: 8000,
                done: function() {
                    runEffect($('#screen7'));
                }
            });
        }
        //setTimeout(animateBar, 1000);
        animateBar();
    });
});

// вернуться на главную страницу

$(document).ready(function() {
    $('.backToMain').on('click', function() {
        $('#thankyou, #screen1, #screen2, #screen3, #screen4, #screen5, #screen6, #screen7').hide();
        $('#kalkulator').show();
        $('#kalkulatorForm').find('input[type="submit"]').prop( 'disabled', false ).val('Получить скидку');
    });
});

/***********************/

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
                    // цели заказ звонка всплывашка
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
                    yaCounter49403449.reachGoal('ZakazZvonkaVsplivashka');
                    // changePresentsNum();
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
                    // цели 
                    if(form.hasClass('stickerForm')) {
                        // при клике на стикер
                        yaCounter49403449.reachGoal('StickerOnTheMain');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'StickerOnTheMain' });
                    }
                    else if (form.hasClass('getCallForm')) {
                        // при клике на заказать звонок
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                        yaCounter49403449.reachGoal('ZakazZvonka'); 
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
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить скидку');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    // цели калькулятор
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'RaschetFinal' });
                    yaCounter49403449.reachGoal('RaschetFinal');
                    $('#kalkulator').fadeOut(300, function () {
                        form.trigger('reset');
                        $('#thankyou').show();
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