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
// слайдер "партнеры"

$(document).ready(function() {
    $('#partners-slider').owlCarousel({
        items: 5,
        loop: true,
        nav: true,
        navText: ["&#8249;", "&#8250;"],
        slideBy: 1,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            440: {
                items: 2
            },
            640: {
                items: 3
            },
            920: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });
    $('.review-slider').owlCarousel({
        items: 1,
        loop: false,
        nav: true,
        navText: ["&#8249;", "&#8250;"],
        slideBy: 1,
        dots: false,
        autoplay: false
    });
    $('.review-slider').on('changed.owl.carousel', function(e) {
        $('.review-text .item').hide();
        $($('.review-text .item')[e.item.index]).show();
        $(this).find('.owl-prev').removeClass('disabled');
        $(this).find('.owl-next').removeClass('disabled');
        if(!e.item.index) {
            $(this).find('.owl-prev').addClass('disabled');
        }
        if(e.item.index == e.item.count - 1) {
            $(this).find('.owl-next').addClass('disabled');
        }
    });
});

// маска для телефона

$(document).ready(function() {
    $('input[name="phone"]').inputmask({
        mask: "+375(99)999-99-99"
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
    $('#sliderPeople').slider({
        range: "min",
        min: 1,
        max: 200,
        value: 15,
        slide: function( event, ui ) {
            $('#people').val( ui.value );
        }
    });
    $('#people').val( $("#sliderPeople").slider("value"));

    $('#people').on( "change", function() {
        $("#sliderPeople").slider( "value", $(this).val() );
    });

});

//Не знаю площадь укладки ламината
$(document).ready(function () {
    $('#dnPrice').change(function () {
        if($(this).prop('checked')){
            $('#price').val('');
        }
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
    $('.utp .subtitle').click(function() {
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
    $('input[type="radio"]').change(function() {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
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
});

//Укажите сферу деятельности Вашей организации
$(document).ready(function () {
    $('#screen2 .quest ul li .choose input').change(function () {
        //Стилизация блоков
        $('#screen2 .quest ul li').removeClass('selected');
        $('#screen2 .quest ul li input:checked').closest('li').addClass('selected');
        //Изменение в экране 4
    });
});

//Агрегатор
$(document).ready(function () {
    $('#screen7 .next, #screen7 .navigation ul, #screen7 .nextBottomBlock .next').click(function () {
        function animateBar(){
            $("#screen8 .progressBar .linebar .bar").animate({
                width: "100%"
            }, 8000,function() {
                $('#screen8 .progressBar .text').text('Готово!');
                runEffect($('#screen8'), $('#screen9'));
            })
        }
        //setTimeout(animateBar, 1000);
        animateBar();

        //Укажите сферу деятельности Вашей организации
        var fullsfera = $('input[name="sfera"]:checked').val();
        if (!fullsfera || fullsfera===''){
            fullsfera = 'Не выбрана';
        }
        $('#screen8 .fullsfera').text(fullsfera);

        //Выберите организационно-правовую форму
        var fullorgforma = $('input[name="orgforma"]:checked').val();
        if (!fullorgforma || fullorgforma===''){
            fullorgforma = 'Организационно-правовая форма не выбрана';
        }
        $('#screen8 .fullorgforma').text(fullorgforma);

        //Укажите систему налогообложения
        var fullnalog = $('input[name="nalog"]:checked').val();
        if (!fullnalog || fullnalog===''){
            fullnalog = 'Система налогообложения не выбрана';
        }
        $('#screen8 .fullnalog').text(fullnalog);

        //Есть ли у Вашей компании дополнительная отчетность?
        var fullotchetnost = $('input[name="otchetnost"]:checked').val();
        if (!fullotchetnost || fullotchetnost===''){
            fullotchetnost = 'не выбрана';
        }
        $('#screen8 .fullotchetnost').text(fullotchetnost);

        //Количество сотрудников организации
        var fullpeople = $('input[name="people"]').val();
        if (!fullpeople || fullpeople==='' || fullpeople==='0'){
            fullpeople = 'Не указано количество';
        }
        $('#screen8 .fullpeople').text(fullpeople);

        //количество первичной документации в месяц?
        var fulldocumentsnum = $('input[name="documentsnum"]:checked').val();
        if (!fulldocumentsnum || fulldocumentsnum===''){
            fulldocumentsnum = 'не указано';
        }
        $('#screen8 .fulldocumentsnum').text(fulldocumentsnum);
    });
});

//Всплывашка при закрытии
$(document).ready(function(timeout){
    try {
        setTimeout(function start_kmacomebacker() {
            var comebacker = true;
            $(window).on("mouseout", function (event) {
                if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
                    comebacker = false;
                    $("#popupClosed").trigger("click");
                }
            });
        }, timeout);
    } catch (e) {
    }
});

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});

//Вернуться на главную
$(document).ready(function (){
    $('#thankyou .backToQuest').click(function () {
        $('.screen').hide();
        $('#screen1').show();
    });
});

//Классы форм
$(document).ready(function () {

    var zvonokForm = $('#zvonokForm');

    $('.screen header .button').click(function () {
        zvonokForm.removeClass().addClass('zvonokClass');
    });
    $('.consultation-sticker').click(function () {
        zvonokForm.removeClass().addClass('stickerClass');
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

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
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
                    yaCounter48813935.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
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

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
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
                success: function (message) {
                    console.log(message);
                    if(form.hasClass('zvonokClass')){
                        yaCounter48813935.reachGoal('ZakazZvonka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                    } else if (form.hasClass('stickerClass')){
                        yaCounter48813935.reachGoal('ConsultationVsplivashka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ConsultationVsplivashka' });
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
    $('#kalkulatorForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        $('#screen9 .alert').hide();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = $('#kalkulatorForm').find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#ffffff", opacity: 1}, 300);
            $('#screen9 .alert').show("slow").effect("shake", 500);
            but.prop( 'disabled', false ).val(initText);
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('RaschetFinal');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'RaschetFinal' });
                
                $('.screen').fadeOut(300, function () {
                        form.trigger('reset');
                        $('#thankyou').show();
                        $('.stickerCall').show();
                    });
                },
                error: function () {
                    console.log('alert');
                }
            });
        }
        return false;
    });
    $('#ifCloseForm').submit(function() {
        var but = $(this).find('button[type="submit"]');
        var initText = but.text();
        but.prop( 'disabled', true ).text('Отправка...');
        var form = $('#ifCloseForm');
        var phone = $('#ifCloseForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).text(initText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('PopUpClosed');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'PopUpClosed' });
                    $('.form-block').fadeOut(300, function () {
                        form.trigger('reset');
                        $('.form-block').after("<div class='thankYou'><h2>Спасибо за заявку.</h2><p>В ближайшее время мы свяжемся с Вами</p></div>");
                    });
                    setTimeout(function () {
                        $('.form-block').fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val(initText);
                    }, 10000);

                }

            });
        }
        return false;
    });

    $('#discountForm').submit(function() {
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(initText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('DiscountUTP');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'DiscountUTP' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать о скидке');
                    }, 10000);

                }

            });
        }
        return false;
    });
    $('#how40form').submit(function() {
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(initText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('ConsultationVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ConsultationVsplivashka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать о скидке');
                    }, 10000);

                }

            });
        }
        return false;
    });

    $('#getprice-form').submit(function() {
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(initText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('GetTariff');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'GetTariff' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать о скидке');
                    }, 10000);

                }

            });
        }
        return false;
    });


    $('#price-form').submit(function() {
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(initText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('GetTariff');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'GetTariff' });
                    $('.plashka-footer').fadeOut();
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        form.next(".link").fadeIn();
                    });
                }

            });
        }
        return false;
    });



    $('#get-predlog-form').submit(function() {
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(initText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter48813935.reachGoal('GetOffer');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'GetOffer' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val(initText);
                    }, 10000);
                }
            });
        }
        return false;
    });
})