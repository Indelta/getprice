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


//Рандомайзер
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//navigation
$(document).ready(function () {
    $('.startQuest').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .calc-nav').click(function () {
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

    $('#kalkulatorForm').find('label.item').on('click', function() {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
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

/***********************/

//Агрегатор
$(document).ready(function () {
    $('#screen6 .next, #screen6 label.item').click(function () {
        var cel = $('#kalkulatorForm').find('input[name="cel"]:checked').val() || 'Не определено';
        var peopleCount = $('#kalkulatorForm').find('input[name="peopleCount"]:checked').val() || 'Не определено';
        var quickly = $('#kalkulatorForm').find('input[name="quickly"]:checked').val() || 'Не определено';
        var vizaType = $('#kalkulatorForm').find('input[name="vizaType"]:checked').val() || 'Не определено';
        if(quickly == 'В течение дня' || quickly == 'В течение недели') {quickly = 'Срочная';}
        else quickly == 'Не срочная';

        $('#screen7 .itog #itog-vizaType').text(vizaType);
        $('#screen7 .itog #itog-peopleCount').text(peopleCount);
        $('#screen7 .itog #itog-quickly').text(quickly);
        $('#screen7 .itog #itog-cel').text(cel);
    });
});

//Идёт поиск вариантов
$(document).ready(function () {
    $('#screen6 .next, #screen6 label.item').click(function () {
        function animateBar(){
            $("#screen7 .quest .progressBar .linebar .bar").animate({
                width: "100%"
            }, 8000,function() {
                $('#screen7 .quest .progressBar .text').text('Готово!');
                runEffect($('#screen7'), $('#screen8'));
            })
        }
        setTimeout(animateBar, 1000);
    });
});
//кнопка назад

$(document).ready(function() {
    $('.goBack').on('click', function(e) {
        e.preventDefault();
        $('#thankyou, .screen').hide();
        $('#screen1').show();
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

        if (phone.val().length < 7) {
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
                    yaCounter50525146.reachGoal('ZakazZvonkaVsplivashka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonkaVsplivashka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>В ближайшее время с Вами свяжется менеджер по туризму.<br> Незабываемого Вам отдыха! :)</div>");
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

        if (phone.val().length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать визу');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter50525146.reachGoal('Consultation');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Consultation' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>В ближайшее время с Вами свяжется менеджер по туризму.<br> Незабываемого Вам отдыха! :)</div>");
                    });
                    setTimeout(function () {
                       form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать визу ');
                    }, 10000);

                }

            });
        }
        return false;
    });
    $('#kalkulatorForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        $('#screen10 .phone .alert').hide();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = $('#kalkulatorForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            $('#screen8 .alert').show("slow").effect("shake", 500);
            but.prop( 'disabled', false ).val('Получить скидку');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter50525146.reachGoal('Calculator');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Calculator' });
                    $('.screen').fadeOut(300, function () {
                        form.trigger('reset');
                        but.prop('disabled', false).val('Получить скидку');
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