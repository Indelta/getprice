$(document).ready(function() {
    // модальные окна

    $('.fancy').fancybox();

    //активная радио-кнопка

    $('.radio-group label').on('click', function() {
        $(this).closest('.radio-group').find('label').removeClass('active');
        $(this).addClass('active');
    });
    
    // плавный скролл к контейнеру

    $('.scrollTo').on('click', function(e) {
        e.preventDefault();
        let elem = $(this).attr('href');
        $('body, html').animate({ scrollTop: $(elem).offset().top }, 400);
    });

    // Слайдер - Количество сотрудников

    var peopleSlider = $('#people-slider').slider({
        min: 1,
        max: 25,
        step: 1,
        value: 12,
        create: function(e) {
            let count = '<span class="ui-count">12</span>';
            let bg = $(e.target).find('.ui-bg');
            let handle = $(e.target).find('.ui-slider-handle');
            let bg_width = Math.round(handle.offset().left - $(e.target).offset().left);
            bg.css('width', bg_width + 'px');
            $(e.target).find('.ui-slider-handle').html(count);
        },
        slide: function(e, ui) {
            $('#people-slider .ui-count').text(ui.value);
            $('input[name="people-count"]').val(ui.value);
            let bg = $(e.target).find('.ui-bg');
            let handle = $(e.target).find('.ui-slider-handle');
            let bg_width = Math.round(handle.offset().left - $(e.target).offset().left);
            bg.css('width', bg_width + 'px');
        },
        change: function(e) {
            let bg = $(e.target).find('.ui-bg');
            let handle = $(e.target).find('.ui-slider-handle');
            let bg_width = Math.round(handle.offset().left - $(e.target).offset().left);
            bg.css('width', bg_width + 'px');
        }
    });
    $('input[name="people-count"]').on('input', function() {
        peopleSlider.slider('value', $(this).val());
        $('.ui-count').text($(this).val());
    });


    // партнеры - карусель

    $('#partners-slider').owlCarousel({
        items: 5,
        loop: true,
        nav: true,
        navText: ["&#8249;", "&#8250;"],
        slideBy: 1,
        dots: false,
        autoplay: true,
        responsive: {
            0: {items: 1},
            440: {items: 2},
            640: {items: 3},
            920: {items: 4},
            1200: {items: 5}
        }
    });

    // отзывы карусель

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

    // маска для телефона


    $('input[name="phone"]').inputmask({
        mask: "+375(99)999-99-99"
    });

    // //Всплывашка при закрытии
    // $(document).ready(function(timeout){
    //     try {
    //         setTimeout(function start_kmacomebacker() {
    //             var comebacker = true;
    //             $(window).on("mouseout", function (event) {
    //                 if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
    //                     comebacker = false;
    //                     $("#popupClosed").trigger("click");
    //                 }
    //             });
    //         }, timeout);
    //     } catch (e) {
    //     }
    // });

    // отправка форм

    $('#zvonokForm').submit(function(e) {
        e.preventDefault();
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
                    yaCounter48813935.reachGoal('ZakazZvonka');
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
    });

    $('#kalkulatorForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        var initText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = $('#kalkulatorForm').find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^0-9]/g,'').length < 12) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#ffffff", opacity: 1}, 300);
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
                    form.trigger('reset');
                    but.prop( 'disabled', false ).val(initText);
                    $('.thankyou-trigger').trigger('click');

                    let labels = $('.radio-group label');

                    for (let i = 0; i < labels.length; i++) {
                        let activeLabel = $(labels[i]).find('input[type="radio"]:checked');
                        if(activeLabel.length) {
                            $(activeLabel).closest('.radio-group').find('label').removeClass('active');
                            $(activeLabel).closest('label').addClass('active');
                        }
                    }
                    setTimeout(function() {
                        $('button.fancybox-close-small').trigger('click');
                    }, 10000);
                },
            });
        }
    });
    $('#ifCloseForm').submit(function(e) {
        e.preventDefault();
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
    });

});