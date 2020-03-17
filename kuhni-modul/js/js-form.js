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

    /*
     форма Заказать звонок
     */
    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#callForm');
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(form.find('input[name="type"]').val() == "Заказать звонок") {
                        yaCounter51139589.reachGoal('ZakazZvonka');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                    }
                    if(form.find('input[name="type"]').val() == "Стикер на главной") {
                        yaCounter51139589.reachGoal('StickerOnMain');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'StickerOnMain' });
                    }
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Администратор свяжется с Вами в ближайшее время.</div>");
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

    // ближайший салон

    $('#salon-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#salon-form');
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('ContactWithSalon');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ContactWithSalon' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Администратор свяжется с Вами в ближайшее время.</div>");
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

    // дизайн-проект за 30 мин

    $('#getDesign-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('GetDesignProject');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'GetDesignProject' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        form.after("<div class='thankYou'>Ваше сообщение отправлено. Администратор свяжется с Вами в ближайшее время.</div>");
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

    $('#kalkulatorForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#kalkulatorForm');
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('Calculator');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Calculator' });
                    $('.kalkulator .plashka .step').hide();
                    $('.kalkulator .plashka .step.thankYouStep').show();
                    setTimeout(function () {
                        $('.kalkulator .plashka .step.thankYouStep').hide();
                        $('.kalkulator .plashka .step.step1').show();
                        but.prop( 'disabled', false ).val(butText);
                }, 10000);

                }

            });
        }
        return false;
    });

    $('.catalogForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('QuickCalculation');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'QuickCalculation' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Администратор свяжется с Вами в ближайшее время.</div>");
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

    $('#getPrice-form').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('DownloadCatalog');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'DownloadCatalog' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).next(".thankYou").fadeIn();
                    });
                    but.prop( 'disabled', false ).val(butText);
                }

            });
        }
        return false;
    });

    $('#notFound-form').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('DownloadCatalog');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'DownloadCatalog' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).next(".thankYou-link").fadeIn();
                    });
                    but.prop( 'disabled', false ).val(butText);
                }

            });
        }
        return false;
    });

    $('#skidkaForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('DiscountsOnTechnics');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'DiscountsOnTechnics' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Администратор свяжется с Вами в ближайшее время.</div>");
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

    $('#rassrochkaForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serialize();
        if (phone.val().replace(/[^-0-9]/gim,'').length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        } else {
            $.ajax({
                type: "POST",
                url: "mail/mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    yaCounter51139589.reachGoal('Rassrochka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Rassrochka' });
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $(this).after("<div class='thankYou'>Ваше сообщение отправлено. Администратор свяжется с Вами в ближайшее время.</div>");
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