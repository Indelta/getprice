$(document).ready(function () {
    $('header .button, footer .button').click(function () {
        $('#callForm').removeClass();
        $('#callForm').addClass('zakazZvonka');
        $('#callForm input[name="type"]').attr('value','Заказ звонка');
        $('#callForm input[type=text]').blur();
    });
    $('.moreQuestions .zvonok .text .button').click(function () {
        $('#callForm').removeClass();
        $('#callForm').addClass('ingener');
        $('#callForm input[name="type"]').attr('value','Консультация инженера');
        $('#callForm input[type=text]').blur();
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

    /*
     форма Заказать звонок
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
                        yaCounter45142335.reachGoal('ZakazZvonka');
                        ga('send', 'event', 'Btn', 'Click', 'ZakazZvonka');
                    } else if(form.hasClass('ingener')){
                        yaCounter45142335.reachGoal('Consultation');
                        ga('send', 'event', 'Btn', 'Click', 'Consultation');
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
        форма прайс-лист

    */
   $('#get-price-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Переход...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Перейти в прайс-лист');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter45142335.reachGoal('DownloadPrice');
                    ga('send', 'event', 'Btn', 'Click', 'DownloadPrice');
                    form.trigger('reset');
                    but.prop( 'disabled', false ).val('Перейти в прайс-лист');
                    var link = document.createElement('a');
                    link.setAttribute('href', 'http://getprice.by/remont/GetRemont_price.pdf');
                    // link.setAttribute('download', 'download');
                    link.setAttribute('target', '_blank');
                    link.setAttribute('class', 'button');
                    link.innerText = 'Перейти';
                    form.find('p').hide();
                    form.find('input').hide();
                    $('.down-arrow').css({'margin-top': '20px'});
                    but.hide();
                    but.after(link);
                    // var win = window.open('http://getprice.by/remont/GetRemont_price.pdf','_blank');
                    // if(!win) {
                    //     but.hide();
                    //     but.after(link);
                    // }
                    // link.click();
                }

            });
        }
        return false;
    });

    /*
    форма получить точный расчет
    */
   $('#raschet-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать точный расчет');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter45142335.reachGoal('ZakazTochnogoRascheta');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazTochnogoRascheta');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                    but.prop( 'disabled', false ).val('Заказать точный расчет');
                }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма Калькулятор
     */
    $('#calculatorForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
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
                    yaCounter45142335.reachGoal('Calculator');
                    ga('send', 'event', 'Btn', 'Click', 'Calculator');
                    $('.calculator .block .slide.slide6 .forma').fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                    });
                    setTimeout(function () {
                        $('.calculator .block .slide.slide6 .forma').fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить скидку');
                        $('.calculator .block .slide.slide6').hide();
                        $('.calculator .block .slide.slide1').show();
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
    форма специальное предложение для новостроек
    
    */
   $('#spec-predlog-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить специальное предложение');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter45142335.reachGoal('SpecialOffer');
                    ga('send', 'event', 'Btn', 'Click', 'SpecialOffer');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                    but.prop( 'disabled', false ).val('Получить специальное предложение');
                }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма бесплатный замер
     */
    $('#freeZamerForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать замер');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter45142335.reachGoal('ZakazZamera');
                    ga('send', 'event', 'Btn', 'Click', 'ZakazZamera');

                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать замер');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма Быстрый расчёт стоимости ремонта

     */
    $('.reviewsForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Рассчитать стоимость');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter45142335.reachGoal('RaschetStoimosti');
                    ga('send', 'event', 'Btn', 'Click', 'RaschetStoimosti');

                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Рассчитать стоимость');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма Выбор подрядчика для ремонта

     */
    $('#podryadForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Посмотреть работу вживую');
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter45142335.reachGoal('ViewWork');
                    ga('send', 'event', 'Btn', 'Click', 'ViewWork');

                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Посмотреть работу вживую');
                    }, 10000);

                }

            });
        }
        return false;
    });

    /*
     форма c файлом
     */
    $('#projectForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');

        var formData = new FormData();
        $.each($('#file_v')[0].files, function(i, file) {
            formData.append('file', file);
        });
        formData.append('name', $('#projectForm input[name="name"]').val());
        formData.append('phone', $('#projectForm input[name="phone"]').val());
        formData.append('email', $('#projectForm input[name="email"]').val());
        formData.append('type', $('#projectForm input[name="type"]').val());

        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Получить расчёт');
        } else {
            console.log('send');
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                dataType : "json",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                success: function () {
                    console.log('succsess');
                    yaCounter45142335.reachGoal('ReadyProject');
                    ga('send', 'event', 'Btn', 'Click', 'ReadyProject');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</div>");
                        $('.fancybox-inner').css("height","auto");
                        $('.fancybox-inner').css("width","auto");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Получить расчёт');
                    }, 10000);

                }

            });
        }
        return false;
    });

});