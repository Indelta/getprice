/**
 * Created by Viktoryia Vorozhun on 19.12.2017.
 */

function changePresentsNum() {
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }
    $('.utp .hurry span').text(getRandomInt(6,8) + ' подарков');
}

//owl carousel
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        lazyLoad: true,
        merge: true,
        video: true,
        nav: true,
        autoHeight: true,
        autoplay:false,
        navText: ["",""],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            800:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
});

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
// скролл к якорю калькулятора

$(document).ready(function() {
    $('.pulse-btn').click(function() {
        $('body, html').animate({scrollTop: $('#calculator').offset().top}, 1000);
    });
});

//anchor
$(document).ready(function () {
    $("footer .up").click(function (e) {
        e.preventDefault();
        $("html,body").animate({scrollTop: 0}, 'fast');
        return false;
    });
});

//Навигация калькулятор

$(document).ready(function () {
    $('.sale-status').show();
    var saleCount = 15;
    function saleProgress(sale) {
        var fullBar = $('.sale-bar').width();
        var bar = $('.bar-inner');
        var saleSize = fullBar - ((fullBar / 100) * (sale / 0.6));
        bar.stop(true, true);
        bar.animate({width: saleSize}, 500);
        $('.barText').text(sale).addClass('bounceIn');
        $('.saleText').text(sale);
        setTimeout(function(){$('.barText').removeClass('bounceIn')}, 300); 
    }
    saleProgress(saleCount);
    $('.calculator .step nav .next').click(function () {
        $('body, html').animate({scrollTop: $('#calculatorBody').offset().top});
        $(this).closest('.step').hide().next('.step').show();
        $('.calc-sticker').addClass('rubberBand');
        setTimeout(function() {$('.calc-sticker').removeClass('rubberBand');}, 2000);
        if(saleCount < 60) {
            saleCount += 15;
        }
        saleProgress(saleCount);
        
    });
    $('.calculator .step nav .prev').click(function () {
        $('body, html').animate({scrollTop: $('#calculatorBody').offset().top});
        $(this).closest('.step').hide().prev('.step').show();
        $('.calc-sticker').addClass('rubberBand');
        setTimeout(function() {$('.calc-sticker').removeClass('rubberBand');}, 2000);
        if(saleCount > 0) {
            saleCount -= 15;
        }
        saleProgress(saleCount);
    });
    $('.calculator .step6 nav .prevLast').click(function () {
        $(this).closest('.step').hide();
        $('.sale-status').show();
        $('.calculator .step4').show();
        $('.calculator .step5 .progressBar .linebar .bar').css('width','5%');
        $('.calculator .step5 .progressBar .text').text('Идёт расчёт стоимости...');
    });
});
// цели на клик в калькуляторе 

// $(document).ready(function() {
//     $('.step1.step .next').click(function() {
//         yaCounter48628643.reachGoal('clickStep1');
//         gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'clickStep1' });
//     });
//     $('.step2.step .next').click(function() {
//         yaCounter48628643.reachGoal('clickStep2');
//         gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'clickStep2' });
//     });
//     $('.step3.step .next').click(function() {
//         yaCounter48628643.reachGoal('clickStep3');
//         gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'clickStep3' });
//     });
//     $('.step4.step .next').click(function() {
//         yaCounter48628643.reachGoal('clickStep4');
//         gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'clickStep4' });
//     });
// });


//Удобный способ связи
$(document).ready(function () {
    $('.calculator .step3 input[name=linkmethod]').change(function () {
        $('.calculator .step3 .linkmethod .method').removeClass('selected');
        if($(this).prop('checked')){
            console.log(123);
            $(this).closest('.method ').addClass('selected');
        }
    });
});

//Переключсение количества окон
$(document).ready(function () {
    $('.calculator .kalkulatorBody .step2 .input .block p').click(function () {
        var inp = $(this).closest('.block').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<1){
                return false;
            } else{
                $(this).closest('.block').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.block').find('input').val(inp*1 + 1);
        }
    });
    $('.calculator .kalkulatorBody .step2 .input .block input').change(function () {
        if($(this).val()<0 || $(this).val().replace(/[^0-9]/g,'').length < 1){
            $(this).val(0);
        }
    });
});

//Агрегатор
$(document).ready(function () {
    $('.calculator .step4 .next').click(function () {
        //Тип потолка
        var vid = $('.calculator .step1 .input input:checked').val();
        $('.calculator .step5 .fullTip').text(vid);

        //Количество комнат
        var rooms = $('#rooms').val()*1;
        $('.calculator .step5 .fullRooms').text(rooms);

        //Площадь
        var square = $('#square').val()*1;
        $('.calculator .step5 .fullSquare').text(square);

        //Освещение
        var svet = $('.calculator .step3 .input input:checked').val();
        $('.calculator .step5 .fullSvet').text(svet);

        //Бонус
        var bonus = $('.calculator .step4 .input input:checked').val();
        $('.calculator .step5 .fullBonus').text(bonus);
    });
});

//Идёт поиск вариантов
$(document).ready(function () {
    $('.calculator .step4 .next').click(function () {
        $('.sale-status').hide();
        var saleCount = $('.barText').text();
        var form = $('#kalkulatorForm');
        form.find('input[name="sale"]').val(saleCount);
        function animateBar(){
            $(".calculator .step5 .progressBar .linebar .bar").animate({
                width: "100%"
            }, 8000,function() {
                $('.calculator .step5 .progressBar .text').text('Готово!');
                $('.calculator .step5').hide();
                $('.calculator .step6').show();
            })
        }
        //setTimeout(animateBar, 1000);
        animateBar();
    });
});

// клик по кнопке узнать стоимость
$(document).ready(function() {
    $('.findCost').on('click', function(e) {
        e.preventDefault();
        var imgInput = $('#findCostForm').find('input[name="imageCount"]');
        imgInput.val($(this).data('count'));
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
                    yaCounter48628643.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
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
                    yaCounter48628643.reachGoal('ZakazZvonka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
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
            but.prop( 'disabled', false ).val('Получить стоимость натяжного потолка');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48628643.reachGoal('RaschetFinal');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'RaschetFinal' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.calculator .thankyou').show();
                    });
                    setTimeout(function () {
                        $('.calculator .thankyou, .calculator .step6').hide();
                        $('.calculator .step1').show();
                        form.fadeIn(300);
                        but.prop( 'disabled', false ).val('Получить стоимость натяжного потолка');
                    }, 10000);
                }
            });
        }
        return false;
    });
    $('#findCostForm').submit(function() {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#findCostForm');
        var phone = $('#findCostForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Узнать стоимость');
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    //цели
                    yaCounter48628643.reachGoal('UznatStoimost');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'UznatStoimost' });
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
                        but.prop( 'disabled', false ).val('Узнать стоимость');
                    }, 10000);

                }

            });
        }
        return false;
    });
});