/**
 * Created by Viktoryia Vorozhun on 20.10.2017.
 */

// Переключение экранов
function runEffect(hideScreen, showScreen) {
    showScreen.show();
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000);
    return false;
}
// Проверка падежа блока
function checkPadeg(id) {
    if(id==='lustraBlock'){
        var num = $('input[name="lustra"]').val();
        num = num*1;
        changePadeg(num,'люстра',$('#lustraBlock .name'));
    } else if(id==='svetilnikiBlock'){
        var num = $('input[name="svetilniki"]').val();
        num = num*1;
        changePadeg(num,'точка',$('#svetilnikiBlock .name'));
    }
}
// Падежи склонения
function changePadeg(num,slovo,id) {
    if(slovo==='люстра'){
        switch (num) {
            case 0:
                id.text('Люстр');
                break;
            case 1:
                id.text('Люстра');
                break;
            case 2:
                id.text('Люстры');
                break;
            case 3:
                id.text('Люстры');
                break;
            case 4:
                id.text('Люстры');
                break;
            case 5:
                id.text('Люстр');
                break;
            case 6:
                id.text('Люстр');
                break;
            case 7:
                id.text('Люстр');
                break;
            case 8:
                id.text('Люстр');
                break;
            case 9:
                id.text('Люстр');
                break;
            case 10:
                id.text('Люстр');
                break;
            default:
                id.text('Люстра');
        }
    }
    if(slovo==='точка'){
        switch (num) {
            case 0:
                id.text('Встроенных точек освещения');
                break;
            case 1:
                id.text('Встроенная точка освещения');
                break;
            case 2:
                id.text('Встроенные точки освещения');
                break;
            case 3:
                id.text('Встроенные точки освещения');
                break;
            case 4:
                id.text('Встроенные точки освещения');
                break;
            case 5:
                id.text('Встроенных точек освещения');
                break;
            case 6:
                id.text('Встроенных точек освещения');
                break;
            case 7:
                id.text('Встроенных точек освещения');
                break;
            case 8:
                id.text('Встроенных точек освещения');
                break;
            case 9:
                id.text('Встроенных точек освещения');
                break;
            case 10:
                id.text('Встроенных точек освещения');
                break;
            default:
                id.text('Встроенных точек освещения');
        }
    }
}
//Прогресс бар
function moveBar() {
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 50);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
            elem.innerHTML = width*1 + '%';
        }
    }
}
//Агрегация
function completeFields() {
    //Тип помещения
    var tip = $('#screen2 input[type="radio"]:checked').val();
    $('#screen8 .otvetTip span').html(tip);

    //Вид потолка
    var vid = $('#screen3 input[type="radio"]:checked').val();
    $('#screen8 .otvetMaterial span').html(vid);

    //Площадь комнаты
    var square = $('#screen4 input[name="square"]').val();
    $('#screen8 .otvetSquare span').html(square);

    //Количество углов
    var ugli = $('#screen4 input[name="ugli"]').val();
    $('#screen8 .otvetUgli span').html(ugli);

    //Люстры
    var lustry = $('#screen5 input[name="lustra"]').val();
    $('#screen8 .otvetLustra').html(lustry);

    //Светильники
    var svetilniki = $('#screen5 input[name="svetilniki"]').val();
    $('#screen8 .otvetSvetilniki').html(svetilniki);

    //Трубы
    var truba = $('#screen6 input[name="truba"]').val();
    $('#screen8 .otvetTruba').html(truba);

    //Вытяжка
    var vytyazhka = $('#screen6 input[name="vytyazhka"]').val();
    $('#screen8 .otvetVytyazhka').html(vytyazhka);

    //Карниз
    var karniz = $('#screen6 input[name="karniz"]').val();
    $('#screen8 .otvetKarniz').html(karniz);

    //Уровни потолка
    var mnogopotolok = $('#screen6 input[name="mnogopotolok"]').val();
    $('#screen8 .otvetMnogopotolok').html(mnogopotolok);

    //Подарки и скидки
    $("#screen8 .otvetPodarki span").html("");
    $('#screen7 input[type="checkbox"]:checked').each(function () {
        $("#screen8 .otvetPodarki span").append($(this).val() + ", ");
    });
    if($("#screen8 .otvetPodarki span").text().length == 0){
        $("#screen8 .otvetPodarki span").text('Не выбрано');
    } else{
        var zap  = $("#screen8 .otvetPodarki span").text().slice(0,-2);
        $("#screen8 .otvetPodarki span").text(zap);
    }
}

//fancy
$(document).ready(function () {
    $(".fancy").fancybox({
        // Options will go here
    });
});

//navigation
$(document).ready(function () {
    $('.startQuest, .owl-item, .rightSide, .inpNext, .openNextStep, .navigation .steps, .utpstick').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });
    $('#screen1 .sticker .obol').on('click', function() {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });
    $('.navigation .container>p').click(function () {
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

//Тип помещения
$(document).ready(function () {
    function checkPomType () {
        var elMass = $('#screen2 input[name="pomType"]');
        $.each(elMass, function (i, val) {
            $(val).closest('.item').removeClass("selected");
            if($(val).prop("checked")){
                $(val).closest('.item').addClass("selected");
            }
        });
    }
    checkPomType();
    $('#screen2 label').click(function (e) {
        checkPomType();
    });
});

//Материал потолка
$(document).ready(function () {
    function checkMaterial () {
        var elMass = $('#screen3 input[name="material"]');
        $.each(elMass, function (i, val) {
            $(val).closest('.item').removeClass("selected");
            if($(val).prop("checked")){
                $(val).closest('.item').addClass("selected");
            }
        });
    }
    checkMaterial();
    $('#screen3 label').click(function (e) {
        checkMaterial();
    });
});

//Размеры комнаты
$(document).ready(function () {
    $('#screen4 .choose p').click(function () {
        var inp = $(this).closest('.choose').find('input').val();
        if($(this).closest('.choose').find('input').attr('name') == 'ugli'){
            if($(this).hasClass('minus')){
                if(inp<=4){
                    return false;
                } else{
                    $(this).closest('.choose').find('input').val(inp*1 - 1);
                }
            } else if ($(this).hasClass('plus')){
                $(this).closest('.choose').find('input').val(inp*1 + 1);
            }
        } else {
            if($(this).hasClass('minus')){
                if(inp<1){
                    return false;
                } else{
                    $(this).closest('.choose').find('input').val(inp*1 - 0.5);
                }
            } else if ($(this).hasClass('plus')){
                $(this).closest('.choose').find('input').val(inp*1 + 0.5);
            }
        }
        $(this).closest('.choose').find('input').change();

    });

    $('#screen4 input[type=text]').change(function () {
        var thisChange = $(this).val();
        var length = $('input[name=length]').val();
        var width = $('input[name=width]').val();
        var square = $('input[name=square]').val();
        var ugli = $('input[name=ugli]').val();
        if($(this).attr('name') == 'ugli'){
            var newthisChange = thisChange.replace(/[^0-9]/g,'');
            if(newthisChange==''|| newthisChange<4){
                $(this).val(4);
            } else {
                $(this).val(newthisChange);
            }

        } else {
            var newthisChange = thisChange.replace(/[^,.0-9]/gim, '').replace(',','.');
            if(newthisChange==''){
                $(this).val(0);
            } else {
                $(this).val(newthisChange);
            }
        }
        if($(this).attr('name')=='length' || $(this).attr('name')=='width'){
            square = Math.round(($('input[name=length]').val()*1)*($('input[name=width]').val()*1)*10)/10;
            $('input[name=square]').val(square);
        }

    });
});

//Количество точек освещения
$(document).ready(function () {
    $('#screen5 .chooseLine .item .choose p').click(function () {
        $('#screen5 input[name="noLamp"]').prop('checked',false);
        var inp = $(this).closest('.choose').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<1){
                return false;
            } else{
                $(this).closest('.choose').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.choose').find('input').val(inp*1 + 1);
        }
        var id = $(this).closest('.item').attr('id');
        checkPadeg(id);
    });
    $('#screen5 .chooseLine .item .choose input').change(function () {
        $('#screen5 input[name="noLamp"]').prop('checked',false);
        if($(this).val()<0){
            $(this).val(0);
        }
        var id = $(this).closest('.item').attr('id');
        checkPadeg(id);
    });
    $('#screen5 input[name="noLamp"]').change(function () {
        if($(this).prop("checked")){
            $('#screen5 input[name="lustra"], #screen5 input[name="svetilniki"]').val(0);
        } else {
            return false;
        }
    });
});

//Дополнительные параметры
$(document).ready(function () {
    $('#screen6 .chooseLine .item .choose p').click(function () {
        var inp = $(this).closest('.choose').find('input').val();
        if ($(this).closest('.choose').find('input').attr('name')==='mnogopotolok'){
            if($(this).hasClass('minus')){
                if(inp<=1){
                    console.log('minimum');
                    return false;
                } else{
                    $(this).closest('.choose').find('input').val(inp*1 - 1);
                }
            } else if ($(this).hasClass('plus')){
                $(this).closest('.choose').find('input').val(inp*1 + 1);
            }
        } else {
            if($(this).hasClass('minus')){
                if(inp<1){
                    return false;
                } else{
                    $(this).closest('.choose').find('input').val(inp*1 - 1);
                }
            } else if ($(this).hasClass('plus')){
                $(this).closest('.choose').find('input').val(inp*1 + 1);
            }
        }

    });
    $('#screen6 .chooseLine .item .choose input').change(function () {
        if ($(this).closest('.choose').find('input').attr('name')==='mnogopotolok'){
            if($(this).val()<1){
                $(this).val(1);
            }
        } else {
            if($(this).val()<0){
                $(this).val(0);
            }
        }
    });
});

//Подарки от фабрики
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen7 input[type="checkbox"]');
        var massChecked = [];

        $.each(elMass, function (i, val) {
            if($(val).prop("checked")){
                massChecked.push($(val));
            }
        });

        if(massChecked.length<3){
            $.each(elMass, function (i, val) {
                $(val).attr("disabled", false);
                $(val).closest('li').removeClass("selected");
                if($(val).prop("checked")){
                    $(val).closest('li').addClass("selected");
                }
            });
        } else if(massChecked.length===3) {
            $.each(elMass, function (i, val) {
                if(!$(val).prop("checked")){
                    $(val).attr("disabled", true);
                }
                $(val).closest('li').removeClass("selected");
                if($(val).prop("checked")){
                    $(val).closest('li').addClass("selected");
                }
            });
        } else {
            return false;
        }
    }
    checkPlace();
    $('#screen7 label').click(function (e) {
        checkPlace();
    });
});

//Агрегатор
$(document).ready(function () {
    //Экран-агрегатор
    $('#screen5 .openNextStep .button, #screen5 .navigation .next, #screen5 .navigation ul').click(function () {
        completeFields();
        setTimeout(function () {
            moveBar();
        }, 2000);
        setTimeout(function () {
            runEffect($('#screen8'), $('#screen9'));
        }, 8000);
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

//Появление стикера на втором экране
$(document).ready(function() {
    var distance_for_sticker = $('#screen2').offset().top - $(window).height(),
        $sticker = $('.stickerCall');

    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker){
            $sticker.addClass('visible');
        }
        else {
            $sticker.removeClass('visible');
        }
    });

});

//Отправка форм
$(document).ready(function () {
    $('#screen1 header .button, #screen1 header .logo').click(function () {
        $('#consultationForm').removeClass().addClass('call').find('input[name="type"]').val('Заказ звонка');
        $('#consultationForm').find('input[type="submit"]').val('Заказать звонок');
    });
    $('#screen3 .plashka .quest .fancy').click(function () {
        $('#consultationForm').removeClass().addClass('designer').find('input[name="type"]').val('Консультация дизайнера');
        $('#consultationForm').find('input[type="submit"]').val('Получить консультацию');
    });
    $('#screen1 .pluses').click(function () {
        $('#consultationForm').removeClass().addClass('podrobnee').find('input[name="type"]').val('Узнать подробнее');
        $('#consultationForm').find('input[type="submit"]').val('Узнать подробнее');
    });
    $("form").submit(function(e) {
        var ref = $(this).find("required");
        $(ref).each(function(){
            if ( $(this).val() == '' )
            {
                alert("Введите корректный номер телефона!");
                $(this).focus();
                e.preventDefault();
                return false;
            }
        });  return true;
    });

    $('#kalkulatorForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = $(form).find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length<7){
            $('.phone .alert').show("slow").effect("shake", 500);
            but.prop( 'disabled', false ).val('Узнать стоимость со скидкой');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter46388883.reachGoal('RaschetFinal');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'RaschetFinal' });
                    _tmr.push({ id: '3021950', type: 'reachGoal', goal: 'RaschetFinal' });
                    fbq('track','Lead');
                    runEffect($('#screen9'), $('#thankYouPage'));
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                    });
                }

            });
        }
        return false;
    });
    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = $(form).find('input[name="phone"]');
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
                    yaCounter46388883.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
                    _tmr.push({ id: '3021950', type: 'reachGoal', goal: 'ZakazZvonkaVsplivashka' });
                    fbq('track','Lead');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
                    });
                    setTimeout(function () {
                        $('.callWind').hide();
                        $('.callWind .title').show();
                        $('.stickerCall').show('slow');
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать звонок');
                    }, 15000);

                }

            });
        }
        return false;
    });
    $('#consultationForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = $(form).find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/[^0-9]/g,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            if(form.hasClass('call')){
                but.prop( 'disabled', false ).val('Заказать звонок');
            } else if(form.hasClass('designer')){
                but.prop( 'disabled', false ).val('Получить консультацию');
            } else if(form.hasClass('podrobnee')){
                but.prop( 'disabled', false ).val('Узнать подробнее');
            }
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(form.hasClass('call')){
                        yaCounter46388883.reachGoal('ZakazZvonka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                        _tmr.push({ id: '3021950', type: 'reachGoal', goal: 'ZakazZvonka' });
                        fbq('track','Lead');
                    } else if(form.hasClass('designer')){
                        yaCounter46388883.reachGoal('FreeConsultation');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'FreeConsultation' });
                        _tmr.push({ id: '3021950', type: 'reachGoal', goal: 'FreeConsultation' });
                        fbq('track','Lead');
                    } else if(form.hasClass('podrobnee')){
                        yaCounter46388883.reachGoal('PodrobneeUTP');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'PodrobneeUTP' });
                        _tmr.push({ id: '3021950', type: 'reachGoal', goal: 'PodrobneeUTP' });
                        fbq('track','Lead');
                    }
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        if(form.hasClass('call')){
                            but.prop( 'disabled', false ).val('Заказать звонок');
                        } else if(form.hasClass('designer')){
                            but.prop( 'disabled', false ).val('Получить консультацию');
                        } else if(form.hasClass('podrobnee')){
                            but.prop( 'disabled', false ).val('Узнать подробнее');
                        }
                    }, 15000);

                }

            });
        }
        return false;
    });
    $('#morekomnatForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = $(form).find('input[name="phone"]');
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
                    yaCounter46388883.reachGoal('SeveralCeilings');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'SeveralCeilings' });
                    _tmr.push({ id: '3021950', type: 'reachGoal', goal: 'SeveralCeilings' });
                    fbq('track','Lead');
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
                    });
                    setTimeout(function () {
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Узнать стоимость');
                    }, 15000);

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
        $('#thankYouPage').hide();
    });
});

// мобильный слайдер

// $(document).ready(function() {
//     if(screen.width <= 545) {
//         $('#screen2 .quest').addClass('owl-carousel');
//         $('#screen2 .quest').owlCarousel({
//             items: 1,
//             loop: false,
//             center: true,
//             nav: true,
//             navText: ["", ""]
//         });
//     }
// });