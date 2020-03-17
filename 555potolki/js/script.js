// carousel

$(document).ready(function() {
    $('.slider').owlCarousel({
        items: 1,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText: ["", ""]
    });
});

// slider 

$(document).ready(function() {
    var square = $('.input input[name="square"]');
    square.change(function() {
        if(parseInt($(this).val(), 10) < 0 || isNaN(parseInt($(this).val(), 10))) {
            $(this).val('');
            $('.square-slider-inner').slider("value", 0); 
        }
        $('.square-slider-inner').slider("value", parseInt($(this).val(), 10));
    });
    $('.square-slider-inner').slider({
        value: 12,
        min: 3,
        max: 50,
        step: 1,
        slide: function(e, ui) {
            square.val(ui.value);
        }
    });
    var calcSquare = $('#calcForm').find('input[name="square"]');
    calcSquare.on('keyup', function() {
        if(parseInt($(this).val(), 10) < 0 || isNaN(parseInt($(this).val(), 10))) {
            $(this).val('');
            $('#calc-square-slider').slider("value", 0); 
        }
        $('#calc-square-slider').slider("value", parseInt($(this).val(), 10));  
    });
    $('#calc-square-slider').slider({
        value: 5,
        min: 2,
        max: 100,
        step: 2,
        slide: function(e, ui) {
            calcSquare.val(ui.value);
        }
    });

    var angles = $('#calcForm').find('input[name="angle-count"]');
    angles.on('keyup', function() {
        if(parseInt($(this).val(), 10) < 0 || isNaN(parseInt($(this).val(), 10))) {
            $(this).val('');
            $('#angle-slider').slider("value", 0); 
        }
        $('#angle-slider').slider("value", parseInt($(this).val(), 10));
    });
    $('#angle-slider').slider({
        value: 4,
        min: 1,
        max: 20,
        step: 1,
        slide: function(e, ui) {
            angles.val(ui.value);
        }
    });
});

// fancy 

$('.fancy').fancybox({
    padding: 0
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

// кнопка наверх

$(document).ready(function() {
    $('.toTop').on('click', function() {
        $('body, html').animate({scrollTop: 0}, 500);
    });
});
// гамбургер
$(document).ready(function() {
    $('.gamburger').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).closest('.mobile-menu').toggleClass('active');
    });

    $('.openBlock').on('click', function(e) {
        e.preventDefault();
        var block = $(this).attr('href');
        $(block).fadeIn(300, function() {
            var top = $(block).offset().top;
            $('.gamburger').removeClass('active');
            $('.mobile-menu').removeClass('active');
            $('body, html').animate({scrollTop: top}, 300);

        });
    });
    if($(window).scrollTop() <= 0) {
        $('.mobile-menu').css('display', 'none');
    }
    $(window).scroll(function() {
        if($(this).scrollTop() > 250 && $(window).width() < 640) {
            $('.mobile-menu').fadeIn();
        }
        else {
            $('.mobile-menu').fadeOut();
        }
    });
});

// скролл к калькулятору

$(document).ready(function() {
    $('.toCalc').on('click', function(e) {
        e.preventDefault();
        $('body, html').animate({scrollTop: $('#calc').offset().top}, 500);
    });
});


// калькулятор

$(document).ready(function() {
    //1 screen
    $('#step1 .item').on('click', function() {
        $('#step1 .item').removeClass('active');
        $(this).addClass('active');
        $('#step1 .item input[type="radio"]').prop('checked', false);
        $(this).find('input[type="radio"]').prop('checked', true);
    });
    // 2 screen
    $('#step2 .item').on('click', function() {
        $('#step2 .item').removeClass('active');
        $(this).addClass('active');
        $('#step2 .item input[type="radio"]').prop('checked', false);
        $(this).find('input[type="radio"]').prop('checked', true);
    });
    // 4 screen
    $('#step4 .item').on('click', function() {
        $('#step4 .item').removeClass('active');
        $(this).addClass('active');
        $('#step4 .item input[type="radio"]').prop('checked', false);
        $(this).find('input[type="radio"]').prop('checked', true);
    });
    
    $('.designer').on('click', function() {
        $('#call-form').find('input[name="type"]').val('Бесплатная консультация дизайнера');
    });
    $('.call-btn').on('click', function() {
        $('#call-form').find('input[name="type"]').val('Заказать звонок');
    });
    $('#utp .sticker-count').on('click', function() {
        $('#call-form').find('input[name="type"]').val('Заказать звонок - цена');
    });
    
    $('#step6').prev('.step').find('.btn').on('click', function() {
        makeFinalList();
        circle.animate(1.0, {}, function() {
            setTimeout(function(){
                $('.step').hide();
                $('#step7').show();
            }, 300);
        });
    });
    
    // формируем конечный список
    function makeFinalList() {
        var form = $('#calcForm');
        var formData = form.serializeArray();
        var dopSvet = '';
        var dopParams = '';
        for(var i = 0; i < formData.length; i++) {
            var name = formData[i].name;
            var val = formData[i].value;
            switch (name) {
                case 'material':
                    $('.itog-material').text(val);
                case 'vid':
                    $('.itog-vid').text(val);
                case 'square': 
                    $('.itog-square').text(val);
                case  'angle-count': 
                    $('.itog-angle-count').text(val);
                case 'svet':
                    $('.itog-svet').text(val);    
            }
            
            if(name == 'dop-trybi') {
                dopParams += 'Трубы: ' + val + ' ';
            }
            if(name == 'dop-vytazhki') {
                dopParams += 'Вытяжки: ' + val + ' ';
            }
            if(name == 'dop-karniz') {
                dopParams += 'Встроенный карниз: ' + val + ' ';
            }
            if(name == 'dop-potolok') {
                dopParams += 'Многоуровневый потолок: ' + val + ' ';
            }
            
        }
        $('.itog-dop').text(dopParams);
    }


    //progress bar

    var circle = new ProgressBar.Circle(progressBar, {
        strokeWidth: 20,
        easing: 'easeInOut',
        duration: 5000,
        color: ' #ff7f17',
        trailColor: '#fff',
        text: {
            autoStyleContainer: false
        },
        step: function(state, circle) {
            var value = Math.round(circle.value() * 100);
            var textContainer = $('.progress-count');

            textContainer.text(value + '%');
        }
    });
    


    //counter
    function counterClick() {
        var inp = $(this).closest('.counter').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<1){
                return false;
            } else{
                $(this).closest('.counter').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.counter').find('input').val(inp*1 + 1);
        }
    }
    $('.counter span, .counter div').on('click', counterClick);
    $('.counter input').change(function () {
        if($(this).val()<0 || $(this).val().replace(/[^0-9]/g,'').length < 1){
            $(this).val(0);
        }
    });
    
// navigation
    $('.prev-btn').on('click', function() {
        if($(this).closest('.step').prev().length) {
            $('.step').hide();
            $(this).closest('.step').prev().show();
            $('body, html').animate({scrollTop: $('#calc').offset().top});
        }
    });
    $('.next-btn').on('click', function() {
        if($(this).closest('.step').next().length) {
            $('.step').hide();
            $(this).closest('.step').next().show();
            $('body, html').animate({scrollTop: $('#calc').offset().top});
        }
        
    });
    $('#calcForm label.item').on('click', function() {
        var step = $(this).closest('.step');
        if(step.next().length) {
            setTimeout(function() {
                $('.step').hide();
                step.next().show();
                $('body, html').animate({scrollTop: $('#calc').offset().top});
            }, 400);
        }
    });
});

// sale buttons

$('#sale .btn').on('click', function() {
    var title = $(this).closest('.item').find('.header p').text();
    $('#getPromo-form h2').text(title);
    $('#getPromo-form').find('input[name="promokey"]').val($(this).data('promo'));
});


// отправка форм

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
    // Заказ звонка зеленая всплывашка
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
                url: "send/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter50505745.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
                    _tmr.push({ id: '3062232', type: 'reachGoal', goal: 'ZakazZvonkaVsplivashka' });
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

    // Заказ звонка кнопка
    $('#call-form').submit(function () {
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
                url: "send/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(form.find('input[name="type"]').val() == "Заказать звонок") {
                        yaCounter50505745.reachGoal('ZakazZvonka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                    _tmr.push({ id: '3062232', type: 'reachGoal', goal: 'ZakazZvonka' });
                    }
                    if(form.find('input[name="type"]').val() == "Бесплатная консультация дизайнера") {
                        yaCounter50505745.reachGoal('Consultation');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Consultation' });
                        _tmr.push({ id: '3062232', type: 'reachGoal', goal: 'Consultation' });
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
    // форма калькулятор
    $('#calcForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Узнать стоимость со скидкой');
        }

        else {
            $.ajax({
                type: "POST",
                url: "send/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter50505745.reachGoal('Calculator');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Calculator' });
                    _tmr.push({ id: '3062232', type: 'reachGoal', goal: 'Calculator' });
                    form.trigger('reset');
                    $('.fake-form').hide();
                    $('.calc-thank-you').show();
                    setTimeout(function () {
                        $('.calc-thank-you, #step7').hide();
                        $('.fake-form').show();
                        $('#step1').show();
                        // form.fadeIn(300);
                        but.prop( 'disabled', false ).val('Узнать стоимость со скидкой');
                    }, 10000);
                }
            });
        }
        return false;
    });

    // получить промокод
    $('#getPromo-form').submit(function() {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#getPromo-form');
        var phone = $('#getPromo-form').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить промокод');
        }
        else {
            $.ajax({
                type: "POST",
                url: "send/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    //цели
                    yaCounter50505745.reachGoal('GetPromocode');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'GetPromocode' });
                    _tmr.push({ id: '3062232', type: 'reachGoal', goal: 'GetPromocode' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо! <br>В течение 5 минут Вам придёт смс с промокодом для участия в акции. </div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить промокод');
                    }, 10000);

                }

            });
        }
        return false;
    });



    // узнать стоимость
    $('#cost').submit(function() {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#cost');
        var phone = $('#cost').find('input[name="phone"]');
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
                url: "send/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    //цели
                    yaCounter50505745.reachGoal('FindCost');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'FindCost' });
                    _tmr.push({ id: '3062232', type: 'reachGoal', goal: 'FindCost' });
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

    // узнать о рассрочке

    $('#rassrochka-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Узнать про рассрочку');
        }

        else {
            $.ajax({
                type: "POST",
                url: "send/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    // цели
                    
                    
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за заявку.<br> В ближайшее время мы свяжемся с Вами</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать про рассрочку');
                    }, 10000);

                }

            });
        }
        return false;
    });
});