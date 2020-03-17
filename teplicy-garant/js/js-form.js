//Калькулятор
$(document).ready(function () {
    $('#kalkulator nav >p').click(function () {
        if($(this).hasClass('next')){
            $(this).closest('.step').hide().next('.step').show();
        } else {
            $(this).closest('.step').hide().prev('.step').show();
        }
    });
});

//Всплывашка при закрытии
// $(document).ready(function(timeout){
//     try {
//         setTimeout(function start_kmacomebacker() {
//             var comebacker = true;
//             $(window).on("mouseout", function (event) {
//                 if (event.pageY - $(window).scrollTop() < 1 && comebacker) {
//                     comebacker = false;
//                     $("#goout").trigger("click");
//                 }
//             });
//         }, timeout);
//     } catch (e) {
//     }
// });

// получение значений из GET массива
function $_GET(key) {
    var p = window.location.search;
    p = p.match(new RegExp(key + '=([^&=]+)'));
    return p ? p[1] : false;
}

function zvon(){
    $('.bs-example-modal-lg .modal-title').text('Заказ звонка');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function nacenka(){
    $('.bs-example-modal-lg .modal-title').text('Без наценки');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function racrch(){
    $('.bs-example-modal-lg .modal-title').text('Рассрочка на все теплицы');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function consult(){
    $('.bs-example-modal-lg .modal-title').text('Консультация  и подбор теплицы');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function skidka(){
    $('.bs-example-modal-lg .modal-title').text('Скидка 3%');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function promo(){
    $('.bs-example-modal-lg .modal-title').text('Заказать прямо сейчас');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function goout(){
    $('.bs-example-modal-lg .modal-title').text('Уже уходите');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

function shipping() {
    $('.bs-example-modal-lg .modal-title').text('Бесплатная доставка');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'block');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'none');
}

function discount() {
    $('.bs-example-modal-lg .modal-title').text('Скидка до 1000 руб.');
    $('.bs-example-modal-lg').find('.shipping-text').css('display', 'none');
    $('.bs-example-modal-lg').find('.discount-text').css('display', 'block');
}

$(document).ready(function () {
    $("#up_form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        var but = $('#up_send');
        var butText = but.text();
        var type = $('.bs-example-modal-lg').find('.modal-title').text();
        $('#up_send').prop( 'disabled', true ).text('Отправка...');
        if (phone_num.length < 11) {
            phone.animate({backgroundColor: '#ff0000', 'opacity': 0.8}, 300)
            .animate({backgroundColor: '#ffffff', 'opacity': 1}, 300);
            $('#up_send').prop( 'disabled', false ).text(butText);
            return false;
        }

        else{
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function (response) {
                    console.log(type);
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
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
                    }  else if (type === 'Заказать прямо сейчас'){
                        yaCounter46056327.reachGoal('OrderNow');
                        ga('send', 'event', 'Btn', 'Click', 'OrderNow');
                        _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'OrderNow' });
                    }  else if (type === "Бесплатная доставка") {
                        yaCounter46056327.reachGoal('StickersOnTheMain');
                        ga('send', 'event', 'Btn', 'Click', 'StickersOnTheMain');
                    }  else if (type === "Скидка до 1000 руб.") {
                        yaCounter46056327.reachGoal('StickersOnTheMain');
                        ga('send', 'event', 'Btn', 'Click', 'StickersOnTheMain');
                    }
                    $('#up_form').fadeOut(300);
                    $('#up_form').parent().find('p').fadeOut(300);
                    $('.up_alert').show();
                    $("#up_name").val("");
                    $("#up_phone").val("");
                    $('.modal-content').css('background-image', 'none');

                    setTimeout(function () {
                        var resultStyle11 = "<style>.modal-body form{display:block}</style>";
                        $("#up_loadBar").html(resultStyle11).fadeIn(1000);
                        $('#up_form').parent().find('p').fadeIn(300);
                        $('.up_alert').hide();
                        $('#up_form').fadeIn(300);
                        $('.bs-example-modal-lg .modal-content').css('background-image', 'url(./images/m_bg.jpg)');
                        $('#up_send').prop( 'disabled', false ).text(butText);
                    }, 30000);
                }
            });
            return false;
        }
    });
    
    // подарок на 8 марта

    $('#action-form-form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var but = form.find('input[type="submit"]');
        var butText = but.val();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        but.prop( 'disabled', true ).val('Отправка...');

        if (phone_num.length<11) {
            phone
                .animate({backgroundColor: '#ff0000', 'opacity': 0.8}, 300)
                .animate({backgroundColor: '#ffffff', 'opacity': 1}, 300);
            but.prop('disabled', false).val(butText);    
        }

        else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function (response) {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('GetPresent');
                    ga('send', 'event', 'Btn', 'Click', 'GetPresent');
                    form.trigger('reset').fadeOut(300, function () {
                        form.after('<p class="message_send" style="text-align: center; font-size: 21px; padding-top: 50px">Ваша заявка отправлена</p>');
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.message_send').remove();
                        but.prop( 'disabled', false ).val(butText);
                    }, 30000);
                }
            });
        }
        return false;
    });

    $('#spec-predlog-form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var but = form.find('input[type="submit"]');
        var butText = but.val();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        but.prop( 'disabled', true ).val('Отправка...');

        if (phone_num.length<11) {
            phone
                .animate({backgroundColor: '#ff0000', 'opacity': 0.8}, 300)
                .animate({backgroundColor: '#ffffff', 'opacity': 1}, 300);
            but.prop('disabled', false).val(butText);    
        }

        else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function (response) {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('DownloadCatalog');
                    ga('send', 'event', 'Btn', 'Click', 'DownloadCatalog');
                    form.trigger('reset');
                    $('#spec-predlog').find('.modal-header .close').trigger('click');
                    window.open('http://belteplicy.ru/CatalogBelTeplic.pdf', '_blank');
                }
            });
        }
        return false;
    });



    //Задать вопрос
    $("#qst_form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var but = form.find('button');
        var butText = but.text();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        but.prop( 'disabled', true ).text('Отправка...');

        if (phone_num.length<11) {
            phone
                .animate({backgroundColor: '#ff0000', 'opacity': 0.8}, 300)
                .animate({backgroundColor: '#ffffff', 'opacity': 1}, 300);
            but.prop('disabled', false).text(butText);    
        }

        else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function (response) {
                    $('#qst_form').fadeOut(300);
                    $('.qst_alert').show();
                    $("#qst_phone").val("");
                    $("#qst_name").val("");
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('ConsultationOrQuestion');
                    ga('send', 'event', 'Btn', 'Click', 'ConsultationOrQuestion');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Question' });
                    setTimeout(function () {
                        var resultStyle11 = "<style>.modal-body form{display:block}</style>";
                        $("#qst_loadBar").html(resultStyle11).fadeIn(1000);
                        $('.qst_alert').hide();
                        $('#qst_form').fadeIn(300);
                        $('#qst_send').prop( 'disabled', false );
                    }, 30000);
                }
            });
        }
        return false;
    });

    //Скидка 3%
    
    $('#skidka_form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var but = form.find('button');
        var butText = but.text();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        but.prop( 'disabled', true ).text('Отправка...');
        if (phone_num.length<11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).text(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('DiscountForPensioners');
                    ga('send', 'event', 'Btn', 'Click', 'DiscountForPensioners');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'DiscountForPensioners' });
                    form.trigger('reset').fadeOut(300, function () {
                        form.after('<p class="message_send" style="text-align: center; font-size: 21px; color: white; padding-top: 50px">Ваша заявка отправлена</p>');
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.message_send').remove();
                        but.prop( 'disabled', false ).text(butText);
                    }, 30000);
                }
            });
        }
        return false;
    });

    //Бесплатная консультация
    $("#c_form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        var but = $('#c_send');
        var butText = but.text();
        but.prop('disabled', true).text('Отправка...');

        if(phone_num.length < 11) {
            phone
                .animate({backgroundColor: '#ff0000', 'opacity': 0.8}, 300)
                .animate({backgroundColor: '#ffffff', 'opacity': 1}, 300);
            but.prop('disabled', false).text(butText);
        }
        else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function (response) {
                    $('#c_form').fadeOut(300);
                    $('.c_alert').show();
                    form.trigger('reset');
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('ConsultationOrQuestion');
                    ga('send', 'event', 'Btn', 'Click', 'ConsultationOrQuestion');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'FreeConsultation' });

                    setTimeout(function () {
                        $("#c_loadBar").html(resultStyle11).fadeIn(1000);
                        $('.c_alert').hide();
                        $('#c_form').fadeIn(300);
                        $("#c_send").prop( 'disabled', false ).text(butText);
                    }, 30000);
                }
            });
        }
        return false;
    });

    //Каталог
    $(".send_catal").click(function () {
        var form = $(this).parent('form');
        var width = $(this).parent('form').find('.catal_width').val();
        var width_inp = $(this).parent('form').find('.catal_width');
        var name = $(this).parent('form').find('.catal_name').val();
        var name_inp = $(this).parent('form').find('.catal_name');
        var phone = $(this).parent('form').find('.catal_phone').val().replace(/[^0-9]/gim, '');
        var phone_inp = $(this).parent('form').find('.catal_phone');
        var type = $(this).parent('form').parent('.desc').parent('.product').find('.pr_title').text();
        var alerr = $(this).parent('form').parent('.desc').find('.alert_catal');
        var utm_term = form.find('input[name=utm_term]').val();
        var utm_source = form.find('input[name=utm_source]').val();
        var utm_medium = form.find('input[name=utm_medium]').val();
        var utm_campaign = form.find('input[name=utm_campaign]').val();
        var utm_content = form.find('input[name=utm_content]').val();
        var region = form.find('input[name=region]').val();
        var button = $(this);
        button.prop( 'disabled', true );

        if (phone.length<11) {

            phone_inp.css({'background':'#ff0000'});
            button.prop( 'disabled', false );
            setTimeout(function () {
                phone_inp.css({'background':'#fff'});
            }, 400);

            return false;
        }

        $.ajax({
            type: "POST",
            url: "send/send.php",
            data: {"width": width, "posPhone": phone, "type": type, "posName": name, "utm_term": utm_term, "utm_source": utm_source, "utm_medium": utm_medium, "utm_campaign": utm_campaign,  "utm_content": utm_content, 'region': region},
            cache: false,
            success: function (response) {
                if (response == 1) {
                    form.fadeOut(300);
                    alerr.show();
                    width_inp.val("");
                    phone_inp.val("");
                    name_inp.val("");
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });

                    setTimeout(function () {
                        alerr.hide();
                        form.fadeIn(300);
                        button.prop( 'disabled', false );
                    }, 30000);

                }
            }
        });
        return false;
    });

    // новый каталог
    $('#catalog .product-btn').on('click', function() {
        var name = $(this).closest('.product').find('.pr_title').text();
        $('#catalog-form .catal_form').find('input[name="type"]').val(name);
    });
    $('#catalog-form .catal_form, .product.horizont .catal_form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var but = $(this).find('input[type="submit"]');
        but.prop('disabled', true).val('Отправка...');
        var form_data = form.serialize();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        if (phone_num.length<11) {
            phone.css({'background':'#ff0000'});
            but.prop( 'disabled', false ).val('Узнать стоимость');
            setTimeout(function () {
                phone.css({'background':'#fff'});
            }, 400);

            return false;

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваша заявка отправлена!</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать стоимость');
                    }, 10000);
                }
            });
        }
        return false;

    });


    //мобильный каталог

    $('#catalog-mobile .product-btn').on('click', function() {
        var name = $(this).closest('.product').find('.pr_title').text();
        $('#mobile-catalog-form .catal_form').find('input[name="type"]').val(name);
    });
    $('#mobile-catalog-form .catal_form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var but = $(this).find('input[type="submit"]');
        but.prop('disabled', true).val('Отправка...');
        var form_data = form.serialize();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        if (phone_num.length<11) {
            phone.css({'background':'#ff0000'});
            but.prop( 'disabled', false ).val('Узнать стоимость');
            setTimeout(function () {
                phone.css({'background':'#fff'});
            }, 400);

            return false;

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваша заявка отправлена!</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать стоимость');
                    }, 10000);
                }
            });
        }
        return false;

    });

    // мобильный гост каркас

    $('#gost_form-mob').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var but = $(this).find('input[type="submit"]');
        but.prop('disabled', true).val('Отправка...');
        var form_data = form.serialize();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        if (phone_num.length<11) {
            phone.css({'background':'#ff0000'});
            but.prop( 'disabled', false ).val('Узнать стоимость');
            setTimeout(function () {
                phone.css({'background':'#fff'});
            }, 400);

            return false;

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваша заявка отправлена!</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать стоимость');
                    }, 10000);
                }
            });
        }
        return false;
    });

    //Каталог - каркас
    $(".send_catal_karkas").click(function () {
        var form = $(this).parent('form');
        var width = $(this).parent('form').find('.catal_width').val();
        var width_inp = $(this).parent('form').find('.catal_width');
        var name = $(this).parent('form').find('.catal_name').val();
        var name_inp = $(this).parent('form').find('.catal_name');
        var phone_num = $(this).parent('form').find('.catal_phone').val().replace(/[^0-9]/gim, '');
        var phone_inp = $(this).parent('form').find('.catal_phone');
        var type = 'БелТеплица-Триумф';
        var alerr = $(this).parent('form').parent('.rightPart').find('.alert_catal');
        var utm_term = form.find('input[name=utm_term]').val();
        var utm_source = form.find('input[name=utm_source]').val();
        var utm_medium = form.find('input[name=utm_medium]').val();
        var utm_campaign = form.find('input[name=utm_campaign]').val();
        var utm_content = form.find('input[name=utm_content]').val();
        var button = $(this);
        button.prop( 'disabled', true );
        if (phone_num.length<11) {

            phone_inp.css({'background':'#ff0000'});
            button.prop( 'disabled', false );
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

                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Price' });

                    setTimeout(function () {
                        alerr.hide();
                        form.fadeIn(300);
                        button.prop( 'disabled', false );
                    }, 30000);

                }
            }
        });
        return false;
    });

    //Калькулятор
    var kalkulatorForm = $('#kalkulatorForm');
    var kalkulatorForm_phone = kalkulatorForm.find('input[name="posPhone"]');
    var kalkulatorForm_phone_num = kalkulatorForm_phone.val().replace(/[^0-9]/gim, '');
    kalkulatorForm.submit(function () {
        kalkulatorForm.find('.button').prop( 'disabled', true ).val('Отправка...');
        
        if (kalkulatorForm_phone.val().replace(/[^0-9]/gim, '').length < 11) {
            kalkulatorForm_phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            kalkulatorForm.find('.button').prop( 'disabled', false ).val('Узнать подходящие теплицы');

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: kalkulatorForm.serialize(),
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Calculator');
                    ga('send', 'event', 'Btn', 'Click', 'Calculator');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'Calculator' });
                    kalkulatorForm.trigger('reset').fadeOut(300, function () {
                        $('#kalkulator h2, #kalkulator .description, #kalkulator .step6').hide();
                        $('#kalkulator .thankYou').show();
                    });
                    setTimeout(function () {
                        kalkulatorForm.fadeIn(300);
                        $('#kalkulator .thankYou').hide();
                        $('#kalkulator h2, #kalkulator .description, #kalkulator .step1').show();
                        kalkulatorForm.find('.button').prop( 'disabled', false ).val('Узнать подходящие теплицы');
                    }, 30000);
                }
            });
        }
        return false;
    });

    //Уже уходите?
    var up_form_2 = $('#up_form_2');
    var up_form_2_phone = $('#up_form_2 input[name="posPhone"]');
    var up_form_2_phone_num = up_form_2_phone.val().replace(/[^0-9]/gim, '');
    $('#up_form_2').submit(function () {
        var form = $(this);
        var form_data = form.serialize();
        var but = form.find('input[type="submit"]');
        var butText = but.val();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');

        but.prop('disapled', true).val('Отправка...');
        if (phone_num.length < 11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('PopUpClose');
                    ga('send', 'event', 'Btn', 'Click', 'PopUpClose');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'GetPromocode' });
                    form.trigger('reset').fadeOut(300, function () {
                        $('.bs-example2-modal-lg .thankyou').show();
                    });
                    setTimeout(function () {
                        form.fadeIn(300);
                        $('.bs-example2-modal-lg .thankyou').hide();
                        $('.bs-example2-modal-lg .modal-content').css('background','#ffffff');
                        $('.bs-example2-modal-lg .modal-content').css('background-image','none');
                        but.prop( 'disabled', false ).val(butText);
                    }, 60000);
                }
            });
        }
        return false;
    });

    //Теплица для родителей
    
    $('#gost_form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();
        var but = form.find('button[type="submit"]');
        var butText = but.text();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        but.prop( 'disabled', true ).text('Отправка...');
        if (phone_num.length<11) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).text(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Price');
                    ga('send', 'event', 'Btn', 'Click', 'Price');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'TeplicaForParents' });
                    form.trigger('reset').fadeOut(300, function () {
                        form.after('<p class="message_send" style="clear: both; text-align: center; font-size: 24px; padding-top: 50px">Ваша заявка отправлена</p>');
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.message_send').remove();
                        but.prop( 'disabled', false ).text(butText);
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
    var distance_for_sticker2 = $('#catalog').offset().top - $(window).height(),
        $sticker2 = $('.fix_b');
    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker2){
            $sticker2.addClass('visible');
        }
        else {
            $sticker2.removeClass('visible');
        }
    });

    //До подорожания осталось
    var distance_for_sticker3 = $('#catalog').offset().top - $(window).height(),
        $sticker3 = $('.highpricePlashka');
        function onScroll() {
            // if  ($(window).scrollTop() > distance_for_sticker3){
            //     $sticker3.addClass('visible');
            // }
            // else {
            //     $sticker3.removeClass('visible');
            // }
           if($(window).scrollTop() > ($('#kalkulator').offset().top - 40)) {
               $sticker3.addClass('visible');
           }
           else {
               $sticker3.removeClass('visible');
           }
        }
    $(window).on('scroll', onScroll);
    $(window).on('touchmove', onScroll);

    $('#sale100-form').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop('disabled', true).val('Отправка...');
        var form_data = form.serialize();
        var phone = form.find('input[name="posPhone"]');
        var phone_num = phone.val().replace(/[^0-9]/gim, '');
        if (phone_num.length<11) {
            phone.css({'background':'#ff0000'});
            but.prop( 'disabled', false ).val(butText);
            setTimeout(function () {
                phone.css({'background':'#fff'});
            }, 400);

            return false;

        } else {
            $.ajax({
                type: "POST",
                url: "send/send.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(!$_GET('utm_content') || $_GET('utm_content') == "bel_zavod") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : 'wVe82CX3',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    else if($_GET('utm_content') == "rasprodazha") {
                        DSPCounter('send', {
                            'sid'       : '220726',
                            'site_area' : '7fOWBkye',
                            'user_id'   : '',
                            'lead_id'   : '',
                            'order_sum' : ''
                        });
                    }
                    yaCounter46056327.reachGoal('Rassrochka');
                    ga('send', 'event', 'Btn', 'Click', 'Rassrochka');
                    _tmr.push({ id: '3012289', type: 'reachGoal', goal: 'DiscountForFirstCustomers' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваша заявка отправлена!</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val(butText);
                    }, 10000);
                }
            });
        }
        return false;
    });

});