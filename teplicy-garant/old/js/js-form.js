function zvon(){
    $('.modal-title').text('Заказ звонка');
}

function nacenka(){
    $('.modal-title').text('Без наценки');
}

function racrch(){
    $('.modal-title').text('Рассрочка на все теплицы');
}

function consult(){
    $('.modal-title').text('Консультация  и подбор теплицы');
}

function skidka(){
    $('.modal-title').text('Скидка 3%');
}

$(document).ready(function () {
    $("#up_send").click(function () {
        var name = $("#up_name").val();
        var phone = $("#up_phone").val();
        var type = $(".modal-title").text();
        var utm_term = $('#up_form').find('input[name=utm_term]').val();
        var utm_source = $('#up_form').find('input[name=utm_source]').val();
        var utm_medium = $('#up_form').find('input[name=utm_medium]').val();
        var utm_campaign = $('#up_form').find('input[name=utm_campaign]').val();
        var utm_content = $('#up_form').find('input[name=utm_content]').val();

        if ($("#up_phone").val() == '' || $("#up_phone").val().length<7) {
            var error = "<style>#up_phone{background: #ff0000!important;}</style>";
            $("#up_loadBar").html(error);

            setTimeout(function () {
                error = "<style>#up_phone{}</style>";
                $("#up_loadBar").html(error);
            }, 400);

            return false;
        }

        else{
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: {"posName": name, "posPhone": phone, "type": type, "utm_term": utm_term, "utm_source": utm_source, "utm_medium": utm_medium, "utm_campaign": utm_campaign,  "utm_content": utm_content},
                cache: false,
                success: function (response) {
                    if (response == 1) {
                        $('#up_form').fadeOut(300);
                        $('#up_form').parent().find('p').fadeOut(300);
                        $('.up_alert').show();
                        $("#up_name").val("");
                        $("#up_phone").val("");
                        $('.modal-content').css('background-image', 'none');
                        if(type === 'Заказ звонка'){
                            yaCounter46056327.reachGoal('ZakazZvonoka');
                            ga('send', 'event', 'Btn', 'Click', 'ZakazZvonoka');
                            _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'ZakazZvonoka' });
                        } else if (type === 'Рассрочка на все теплицы'){
                        } else if (type === 'Консультация  и подбор теплицы'){
                            yaCounter46056327.reachGoal('ConsultationPodbor');
                            ga('send', 'event', 'Btn', 'Click', 'ConsultationPodbor');
                            _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'ConsultationPodbor' });
                        }  else if (type === 'Скидка 3%'){
                            yaCounter46056327.reachGoal('DiscountSticker');
                            ga('send', 'event', 'Btn', 'Click', 'DiscountSticker');
                            _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'DiscountSticker' });
                        }  else if (type === 'Без наценки'){
                            yaCounter46056327.reachGoal('BezNatsenkiUTP');
                            ga('send', 'event', 'Btn', 'Click', 'BezNatsenkiUTP');
                            _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'BezNatsenkiUTP' });
                        }

                        setTimeout(function () {
                            var resultStyle11 = "<style>.modal-body form{display:block}</style>";
                            $("#up_loadBar").html(resultStyle11).fadeIn(1000);
                            $('#up_form').parent().find('p').fadeIn(300);
                            $('.up_alert').hide();
                            $('#up_form').fadeIn(300);
                            $('.modal-content').css('background-image', 'url(/images/m_bg.jpg)');
                        }, 30000);

                    } else {
                        $("#loadBar").html(response).fadeIn(1000);
                    }
                }
            });
            return false;
        }


    });

    //Задать вопрос
    $("#qst_send").click(function () {
        var phone = $("#qst_phone").val();
        var name = $("#qst_name").val();
        var type = 'Задать вопрос про теплицы';
        var utm_term = $('#qst_form').find('input[name=utm_term]').val();
        var utm_source = $('#qst_form').find('input[name=utm_source]').val();
        var utm_medium = $('#qst_form').find('input[name=utm_medium]').val();
        var utm_campaign = $('#qst_form').find('input[name=utm_campaign]').val();
        var utm_content = $('#qst_form').find('input[name=utm_content]').val();



        if ($("#qst_phone").val() == '' || $("#qst_phone").val().length<7) {
            var error = "<style>#qst_phone{background: #ff0000!important;}</style>";
            $("#qst_loadBar").html(error);

            setTimeout(function () {
                error = "<style>#qst_phone{}</style>";
                $("#qst_loadBar").html(error);
            }, 400);

            return false;
        }

        $.ajax({
            type: "POST",
            url: "send/send.php",
            data: {"posPhone": phone, "type": type, 'posName': name, "utm_term": utm_term, "utm_source": utm_source, "utm_medium": utm_medium, "utm_campaign": utm_campaign,  "utm_content": utm_content},
            cache: false,
            success: function (response) {
                if (response == 1) {
                    $('#qst_form').fadeOut(300);
                    $('.qst_alert').show();
                    $("#qst_phone").val("");
                    $("#qst_name").val("");

                    yaCounter46056327.reachGoal('Question');
                    ga('send', 'event', 'Btn', 'Click', 'Question');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Question' });
                    setTimeout(function () {
                        var resultStyle11 = "<style>.modal-body form{display:block}</style>";
                        $("#qst_loadBar").html(resultStyle11).fadeIn(1000);
                        $('.qst_alert').hide();
                        $('#qst_form').fadeIn(300);
                    }, 30000);

                } else {
                    $("#qst_loadBar").html(response).fadeIn(1000);
                }
            }
        });
        return false;
    });

    //Скидка 3%
    var skidka_form = $('#skidka_form');
    var skidka_form_phone = $('#skidka_form input[name="posPhone"]');
    skidka_form.submit(function () {
        if (!skidka_form_phone.val() || skidka_form_phone.val().length<7) {
            skidka_form_phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: skidka_form.serialize(),
                cache: false,
                success: function () {
                    yaCounter46056327.reachGoal('DiscountForPensioners');
                    ga('send', 'event', 'Btn', 'Click', 'DiscountForPensioners');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'DiscountForPensioners' });
                    skidka_form.trigger('reset').fadeOut(300, function () {
                        skidka_form.after('<p class="message_send" style="text-align: center; font-size: 21px; color: white; padding-top: 50px">Ваша заявка отправлена</p>');
                    });
                    setTimeout(function () {
                        skidka_form.fadeIn(300).siblings('.message_send').remove();
                    }, 30000);
                }
            });
        }
        return false;
    });

    //Бесплатная консультация
    $("#c_send").click(function () {
        var phone = $("#c_phone").val();
        var name = $("#c_name").val();
        var type = 'Бесплатная консультация';
        var utm_term = $('#c_form').find('input[name=utm_term]').val();
        var utm_source = $('#c_form').find('input[name=utm_source]').val();
        var utm_medium = $('#c_form').find('input[name=utm_medium]').val();
        var utm_campaign = $('#c_form').find('input[name=utm_campaign]').val();
        var utm_content = $('#c_form').find('input[name=utm_content]').val();

        if ($("#c_phone").val() == '') {
            var error = "<style>#c_phone{background: #ff0000!important;}</style>";
            $("#c_loadBar").html(error);

            setTimeout(function () {
                error = "<style>#c_phone{}</style>";
                $("#c_loadBar").html(error);
            }, 400);

            return false;
        }

        $.ajax({
            type: "POST",
            url: "send/send.php",
            data: {"posPhone": phone, "type": type, 'posName': name, "utm_term": utm_term, "utm_source": utm_source, "utm_medium": utm_medium, "utm_campaign": utm_campaign,  "utm_content": utm_content},
            cache: false,
            success: function (response) {
                if (response == 1) {
                    $('#c_form').fadeOut(300);
                    $('.c_alert').show();
                    $("#c_phone").val("");
                    $("#c_name").val("");

                    yaCounter46056327.reachGoal('FreeConsultation');
                    ga('send', 'event', 'Btn', 'Click', 'FreeConsultation');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'FreeConsultation' });

                    setTimeout(function () {
                        var resultStyle11 = "<style>.modal-body form{display:block}</style>";
                        $("#c_loadBar").html(resultStyle11).fadeIn(1000);
                        $('.c_alert').hide();
                        $('#c_form').fadeIn(300);
                    }, 30000);

                } else {
                    $("#c_loadBar").html(response).fadeIn(1000);
                }
            }
        });
        return false;
    });

    //Каталог
    $(".send_catal").click(function () {
        var form = $(this).parent('form');
        var width = $(this).parent('form').find('.catal_width').val();
        var width_inp = $(this).parent('form').find('.catal_width');
        var name = $(this).parent('form').find('.catal_name').val();
        var name_inp = $(this).parent('form').find('.catal_name');
        var phone = $(this).parent('form').find('.catal_phone').val();
        var phone_inp = $(this).parent('form').find('.catal_phone');
        var type = $(this).parent('form').parent('.desc').parent('.product').find('.pr_title').text();
        var alerr = $(this).parent('form').parent('.desc').find('.alert_catal');
        var utm_term = form.find('input[name=utm_term]').val();
        var utm_source = form.find('input[name=utm_source]').val();
        var utm_medium = form.find('input[name=utm_medium]').val();
        var utm_campaign = form.find('input[name=utm_campaign]').val();
        var utm_content = form.find('input[name=utm_content]').val();

        if (phone == '' || phone.length<7) {

            phone_inp.css({'background':'#ff0000'});

            setTimeout(function () {
                phone_inp.css({'background':'#fff'});
            }, 400);

            return false;
        }

        $.ajax({
            type: "POST",
            url: "send/send.php",
            data: {"width": width, "posPhone": phone, "type": type, "posName": name, "utm_term": utm_term, "utm_source": utm_source, "utm_medium": utm_medium, "utm_campaign": utm_campaign,  "utm_content": utm_content},
            cache: false,
            success: function (response) {
                if (response == 1) {
                    form.fadeOut(300);
                    alerr.show();
                    width_inp.val("");
                    phone_inp.val("");
                    name_inp.val("");

                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });

                    setTimeout(function () {
                        alerr.hide();
                        form.fadeIn(300);
                    }, 30000);

                }
            }
        });
        return false;
    });

    //Каталог - каркас
    $(".send_catal_karkas").click(function () {
        var form = $(this).parent('form');
        var width = $(this).parent('form').find('.catal_width').val();
        var width_inp = $(this).parent('form').find('.catal_width');
        var name = $(this).parent('form').find('.catal_name').val();
        var name_inp = $(this).parent('form').find('.catal_name');
        var phone = $(this).parent('form').find('.catal_phone').val();
        var phone_inp = $(this).parent('form').find('.catal_phone');
        var type = 'БелТеплица-Триумф';
        var alerr = $(this).parent('form').parent('.rightPart').find('.alert_catal');
        var utm_term = form.find('input[name=utm_term]').val();
        var utm_source = form.find('input[name=utm_source]').val();
        var utm_medium = form.find('input[name=utm_medium]').val();
        var utm_campaign = form.find('input[name=utm_campaign]').val();
        var utm_content = form.find('input[name=utm_content]').val();

        if (phone == '' || phone.length<7) {

            phone_inp.css({'background':'#ff0000'});

            setTimeout(function () {
                phone_inp.css({'background':'#fff'});
            }, 400);

            return false;
        }

        $.ajax({
            type: "POST",
            url: "send/send.php",
            data: {"width": width, "posPhone": phone, "type": type, "posName": name, "utm_term": utm_term, "utm_source": utm_source, "utm_medium": utm_medium, "utm_campaign": utm_campaign,  "utm_content": utm_content},
            cache: false,
            success: function (response) {
                if (response == 1) {
                    form.fadeOut(300);
                    alerr.show();
                    width_inp.val("");
                    phone_inp.val("");
                    name_inp.val("");

                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });

                    setTimeout(function () {
                        alerr.hide();
                        form.fadeIn(300);
                    }, 30000);

                }
            }
        });
        return false;
    });

    //??
    $(".send_catal_2").click(function () {
        return false;
    });

    //Теплица для родителей
    var gost_form = $('#gost_form');
    var gost_form_phone = $('#gost_form input[name="posPhone"]');
    gost_form.submit(function () {
        if (!gost_form_phone.val() || gost_form_phone.val().length<7) {
            gost_form_phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: gost_form.serialize(),
                cache: false,
                success: function () {
                    yaCounter46056327.reachGoal('TeplicaForParents');
                    ga('send', 'event', 'Btn', 'Click', 'TeplicaForParents');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'TeplicaForParents' });
                    gost_form.trigger('reset').fadeOut(300, function () {
                        gost_form.after('<p class="message_send" style="clear: both; text-align: center; font-size: 24px; padding-top: 50px">Ваша заявка отправлена</p>');
                    });
                    setTimeout(function () {
                        gost_form.fadeIn(300).siblings('.message_send').remove();
                    }, 30000);
                }
            });
        }
        return false;
    });

    //Стикер
    $('.fix_a .close_a').on('click', function () {
        $('.fix_a').toggleClass('small_a');
        if ($('.fix_a .close_a').text() === 'свернуть') {
            $('.fix_a .close_a').text('развернуть');
        } else {
            $('.fix_a .close_a').text('свернуть');
        }
    });
    $('.fix_b .close_a').on('click', function () {
        $('.fix_b').toggleClass('small_b');
        if ($('.fix_b .close_a').text() === 'свернуть') {
            $('.fix_b .close_a').text('развернуть');
        } else {
            $('.fix_b .close_a').text('свернуть');
        }
    });

    //Стикер рассрочка
    var distance_for_sticker1 = $('#utp').offset().top - $(window).height(),
        distance_end_sticker1 = $('#craft').offset().top - $(window).height(),
        $sticker = $('.fix_a');

    $sticker.addClass('visible');
    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker1 && $(window).scrollTop() < distance_end_sticker1){
            $sticker.addClass('visible');
        }
        else {
            $sticker.removeClass('visible');
        }
    });


    //Стикер скидка
    var distance_for_sticker2 = $('#gost').offset().top - $(window).height(),
        $sticker2 = $('.fix_b');
    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker2){
            $sticker2.addClass('visible');
        }
        else {
            $sticker2.removeClass('visible');
        }
    });

});