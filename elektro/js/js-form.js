$(document).ready(function () {

    $('.catalog .catalogCarousel .item .button').click(function () {
        var usluga = $(this).closest('.item').find('.title').html();
        $('#zakazForm').find('input[name="usluga"]').attr('value',usluga);
    });

    $('header .topLine .button, footer .button, .howwork ul li .text a.fancy').click(function () {
        $('#callForm').removeClass();
        $('#callForm').addClass('zakazZvonka');
        $('#callForm input[name="type"]').attr('value','Заказ звонка');
    });

    $('.reviews .item .right .interactive a').click(function () {
        $('#callForm').removeClass();
        $('#callForm').addClass('reviewsConsultation');
        $('#callForm input[name="type"]').attr('value','Консультация специалиста из отзывов');
    });



    $("form").submit(function(e) {
        var ref = $(this).find("required");
        $(ref).each(function(){
            if ( $(this).val() == '' || $(this).val().length() < 7 )
            {
                alert("Проверьте введённый номер");
                $(this).focus();
                e.preventDefault();
                return false;
            }
        });  return true;
    });

    /**
     * форма получить бесплатный расчет utp
     */
    $('#main-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#main-form');
        var phone = $('#main-form input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить расчет');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51303853.reachGoal('GetRaschet');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'GetRaschet' });
                    _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'GetRaschet' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить расчет');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма Заказать звонок, Каталог
     */
    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать звонок');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(form.hasClass('zakazZvonka')) {
                        yaCounter51303853.reachGoal('ZakazZvonka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                        _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'ZakazZvonka' });
                    } else if(form.hasClass('reviewsConsultation')){
                        yaCounter51303853.reachGoal('ConsultationVsplyvashka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ConsultationVsplyvashka' });
                        _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'ConsultationVsplyvashka' });
                    }
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
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

    /*
     Каталог
     */
    $('#zakazForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать звонок');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51303853.reachGoal('PopularServices');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'PopularServices' });
                    _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'PopularServices' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
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

    /*
     форма Скидка УТП
     */
    $('#utpForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#utpForm');
        var phone = $('#utpForm input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить скидку');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51303853.reachGoal('ExpertiseInGift');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ExpertiseInGift' });
                    _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'ExpertiseInGift' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить скидку');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма c файлом НЕ ПАШЕТ!!!
     */
    $('#projectFom').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');

        var formData = form.serialize();
        
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать расчет');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                cache: false,
                data: formData,
                success: function () {
                    yaCounter51303853.reachGoal('ZakazRascheta');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazRascheta' });
                    _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'ZakazRascheta' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать расчет');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма Электропроект в подарок
     */
    $('#freeForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#freeForm');
        var phone = $('#freeForm input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать электромонтажные услуги');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter44848849.reachGoal('GiftElectroproject');
                    ga('send', 'event', 'Btn', 'Click', 'GiftElectroproject');
                   
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать электромонтажные услуги');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма Электропроект в подарок
     */
    $('#consultationForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#consultationForm');
        var phone = $('#consultationForm input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить консультацию');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51303853.reachGoal('Consultation');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Consultation' });
                    _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'Consultation' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить консультацию');
                    }, 10000);

                }

            });
        }
        return false;
    });

    $('#zakazUslugForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#zakazUslugForm');
        var phone = $('#zakazUslugForm input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать электромонтажные услуги');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51303853.reachGoal('ZakazElektromontazh');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazElektromontazh' });
                    _tmr.push({ id: '3072935', type: 'reachGoal', goal: 'ZakazElektromontazh' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать электромонтажные услуги');
                    }, 10000);

                }

            });
        }
        return false;
    });


});