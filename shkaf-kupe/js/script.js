// Переключение экранов

function runEffect(hideScreen, showScreen) {
    showScreen.show();
    $('html,body').animate({scrollTop: $(showScreen).offset().top}, 1000);
}

// sticker 100
$(document).ready(function() {
    $('.fancy').fancybox({padding: 0});
    $(document).on('scroll', function() {
        if($('#screen9').offset().top && window.pageYOffset >= $('#screen9').offset().top) {
            $('.sticker_100').fadeOut(400);
        }
        else if(window.pageYOffset >= $('#screen3').offset().top) {
            $('.sticker_100').fadeIn(400);
        }
        else {
            $('.sticker_100').fadeOut(400);
        }
    });
});


//Экран 9 собирает все поля

function completeFields() {
    //Куда?
    var kuda = $('#screen3 input[type="radio"]:checked').val();
    $('#screen9 .otvetKuda').html(kuda);

    //Тип
    var tip = $('#screen4 input[type="radio"]:checked').val();
    $('#screen9 .otvetTip').html(tip);

    //Размеры
    var w = parseInt($('#screen5 #width').val().replace(/\D+/g,""));
    var h = parseInt($('#screen5 #height').val().replace(/\D+/g,""));
    var b = parseInt($('#screen5 #deep').val().replace(/\D+/g,""));
    $('#screen9 .otvetRazmer .w').html(w);
    $('#screen9 .otvetRazmer .h').html(h);
    $('#screen9 .otvetRazmer .b').html(b);

    //Конфигурация
    var config = $('#screen6 input[type="radio"]:checked').val();
    $('#screen9 .otvetConfig').text(config);

    //Внешняя отделка

    $(".otvetOtdelka").text("");

    var otvetOtdelka = $('#screen7 input[type="radio"]:checked').val();
    $('.otvetOtdelka').text(otvetOtdelka);
    if($(".otvetOtdelka").text().length == 0){
        $(".otvetOtdelka").text('Неизвестно');
    } else{
        var zap  = $(".otvetOtdelka").text();
        $(".otvetOtdelka").text(zap);
    }
}



//Рандомайзер
function getRandomArbitrary(min, max) { return Math.random() * (max - min) + min;}


//owl carousel
$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });
});


//slider

$(document).ready(function () {
   $('#sliderH').slider({
       range: "min",
       min: 120,
       max: 400,
       value: 270,
       slide: function( event, ui ) {
           $('#screen5 #height').val( ui.value );
       }
   });

    $('#sliderW').slider({
        range: "min",
        min: 60,
        max: 1000,
        value: 250,
        slide: function( event, ui ) {
            $('#screen5 #width').val( ui.value );
        }
    });

    $('#sliderD').slider({
        range: "min",
        min: 20,
        max: 100,
        value: 60,
        slide: function( event, ui ) {
            $('#screen5 #deep').val( ui.value );
        }
    });

   $('#screen5 #height').val( $("#sliderH").slider("value"));
   $('#screen5 #width').val( $("#sliderW").slider( "value" ));
   $('#screen5 #deep').val( $("#sliderD").slider( "value" ));

    $("#screen5 #height").on( "change", function() {
        $("#sliderH").slider( "value", $(this).val() );
    });

    $("#screen5 #width").on("change", function() {
        $("#sliderW").slider( "value", $(this).val());
    });

    $("#screen5 #deep").on("change", function() {
        $("#sliderD").slider( "value", $(this).val() );
    });
});



//ShkafParam Light

$(document).ready(function () {
    var shkafParamBlock = $('#screen5 .quest');
    $('#screen5 .quest >div').mouseenter(function () {
        if($(this).hasClass('deep')){
            shkafParamBlock.css('background-image', 'url(img/shkafRazmerDeep.png)');
        } else if($(this).hasClass('height')){
            shkafParamBlock.css('background-image', 'url(img/shkafRazmerHeight.png)');
        }  else if($(this).hasClass('width')){
            shkafParamBlock.css('background-image', 'url(img/shkafRazmerWidth.png)');
        }
    });

    $('#screen5 .quest >div').mouseleave(function () {
        shkafParamBlock.css('background-image', 'url(img/shkafRazmer.png)');
    });
});



//Куда поставить шкаф - активированный пункт

$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen3 input[name="shkafPlace"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }

    checkPlace();
    $('#screen3 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="shkafPlace"]').prop("checked", true);
        checkPlace();
    });
});



//Тип шкафа - активированный пункт

$(document).ready(function () {
    function checkType () {
        var elMass = $('#screen4 input[name="shkafType"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkType();
    $('#screen4 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="shkafType"]').prop("checked", true);
        if($(this).parent().hasClass('dontKnow')){
            $('#screen4 .pseudoBtn').addClass("selected");
            var hideScreen = $(this).closest('.screen');
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);
        } else {
            $('#screen4 .pseudoBtn').removeClass("selected");
        }
        checkType();
    });
});



//shkaf complete

function addItems(inp) {
    var id = $(inp).attr("id");
    var elMass = $('.shkafInside .shkafInsideContain img');
    if($(inp).prop( "checked" )){
        $(inp).parent().addClass("selected").find('img').addClass("selected");
        $.each(elMass, function (i, val) {
            if($(val).hasClass(id)){
                $(val).show("scale", { percent: 50 }, 500);
            }
        });
    }
    else {
        $(inp).parent().removeClass("selected").find('img').removeClass("selected");
        $.each(elMass, function (i, val) {
            if($(val).hasClass(id)){
                $(val).hide("scale", { percent: 50 }, 500);
            }
        });
    }
}


//Конфигурация шкафа - активированный пункт

$(document).ready(function () {
    function checkConfig () {
        var elMass = $('#screen6 input[name="otdely"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkConfig();
    $('#screen6 label').click(function () {
        $(this).find('input[name="otdely"]').prop("checked", true);
        checkConfig();
    });
});

//name
$(document).ready(function () {
   $('#screen2 .next').click(function (e) {
       var personName = $('input[name="name"]').val();
       if (personName.length == 0){
           $('.personName').html("Аноним");
       } else{
           $('.personName').html(personName);
       }
   });
});

//Форма

$(document).ready(function () {
    completeFields();
    //Экран 7 переключение checkbox

    $('#screen7 #dontKnowCover').click(function () {
        if($(this).prop( "checked" )){
            $(this).parent().parent().find(".pseudoBtn").addClass("selected");
            $('#dsp, #zerkala, #peskostrui, #fotopechat, #ekokozha, #lakobel').prop( "checked", false );
            $('.coverImg ').removeClass('selected');
            var hideScreen = $(this).closest('.screen');
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);
        } else {
            $(this).parent().parent().find(".pseudoBtn").removeClass("selected");
            $('#dsp').prop( "checked", true );
        }
    });

    $('#screen7 .item').on('click', function() {
        $(this).closest('.items').find('.imgBlock').removeClass('selected');
        $(this).find('.imgBlock').addClass('selected');
    });

    $('#dsp, #zerkala, #peskostrui, #fotopechat, #ekokozha, #lakobel').click(function () {
        $('#screen7 #dontKnowCover').prop( "checked", false );
        $('#screen7 #dontKnowCover').parent().parent().find(".pseudoBtn").removeClass("selected");
        if ($(this).prop("checked")){
            $(this).parent().parent().find('.coverImg ').addClass('selected');
        } else {
            $(this).parent().parent().find('.coverImg ').removeClass('selected');
        }
    });

    //Экран 8 активация кнопки
    $('#screen8 .pseudoBtn').click(function () {
        $('#doprassr, #doprasgarant, #dopbelsplzamer, #doppodlestnica, #dopskidka').prop( "checked", true );
        $('#screen8 .coverImg').addClass("selected");
    });

    $('#screen8 ul li label').click(function () {
        if ($(this).find('input[type="checkbox"]').prop("checked")){
            $(this).find('.coverImg').addClass("selected");
        } else {
            $(this).find('.coverImg').removeClass("selected");
        }
    });

    //Экран-агрегатор
    $('#screen7 .next, #screen7 .openNextStep, #screen7 .steps, #screen7 .item, #screen7 #dontKnowCover').click(function () {
        completeFields();
    });
});



//Количество конфигураций

$(document).ready(function () {
   var configKolvo =  Math.round(getRandomArbitrary(63, 400));
   $('#screen7 .next, #screen7 .openNextStep, #screen7 .steps, #screen7 .item, #screen7 #dontKnowCover').click(function () {
       $('#screen9 .resultCount span').animate({ num: configKolvo /* - начало */ }, {
           duration: 5000,
           step: function (num){
               this.innerHTML = (num).toFixed(0);
           },
           complete: function() {
               $(this).addClass("blink");
               $('#screen9 .next').addClass("selected");
               var hideScreen = $('#screen9');
               var showScreen = hideScreen.next();
               runEffect(hideScreen, showScreen);
               var bonuses = $('#screen8 .quest li');
                $.each(bonuses, function(i,t) {
                    var $this = $(t);
                    setTimeout(function() {
                        $this.addClass('animated');
                    }, i*800);
                });
           }
       });
       var $target = $('#screen9 .quest li');
       var hold = 800;
       $.each($target,function(i,t){
           var $this = $(t);
           setTimeout(function(){ $this.show('normal'); },i*hold);
       });
   });
});

//navigation

$(document).ready(function () {
    $('.startQuest, .owl-item, .rightSide, .inpNext, .openNextStep, .navigation .steps').click(function (e) {
        e.preventDefault();
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
    });

    $('#screen9').on('click', $('.resultCount span'), function (e) {
        e.preventDefault();
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
    });

    $('.screen label.item').on('click', function() {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        setTimeout(function() {
            runEffect(hideScreen, showScreen);
        }, 500);
    });

    $('.navigation .container>p').click(function () {
        var hideScreen = $(this).closest('.screen');
        if ($(this).hasClass("prev")){
            var showScreen = hideScreen.prev();
            runEffect(hideScreen, showScreen);
        } else if ($(this).hasClass("next")){
            var showScreen = hideScreen.next();
            if($(hideScreen).attr('id')=='screen2'){
                function callback2(){
                    setTimeout(function() {runEffect(hideScreen, showScreen);showScreen.scrollTop(0);}, 1500 );
                }

                if($('#screen2 .ld').hasClass('moveDoor')) runEffect(hideScreen, showScreen);
                else $('#screen2 .ld, #screen2 .rd').addClass("moveDoor", 1000, callback2());
            }
            else runEffect(hideScreen, showScreen);
        }
        return false;
    });
});



//1 scren show sticker

$(document).ready(function () {
    setTimeout(function () {
        $('.rightSide').animate(
            {left: 0},
            {duration: 5000, easing: "easeInOutBack"}
        )}
        , 3000
    );
});

//Отправка формы

$(document).ready(function () {
    $('#kalkulatorForm').on('submit', function(e) {
        e.preventDefault();
        
        const form = $(this);
        const phone = form.find('input[name="phone"]');
        const phoneNum = phone.val().replace(/\D+/gim, "");
        const form_data = form.serialize();
        const btn = form.find('input[type="submit"]');
        const btnText = btn.val();

        btn.prop('disabled', true).val("Отправка...");
        if (phoneNum.length < 7) {
            btn.prop('disabled', false).val(btnText);
            phone.animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
        }
        else {
            $.ajax({
                "url": "mail.php",
                "type": "POST",
                "cache": false,
                "data": form_data,
                success: function() {
                    ym(42046894, 'reachGoal', 'Payment');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Payment' });
                    _tmr.push({ id: '3036807', type: 'reachGoal', goal: 'Payment' });
                    form.trigger('reset');
                    btn.prop('disabled', false).val(btnText);
                    $('#kalkulator').fadeOut(300);
                    $('.thankYouPage').fadeIn(300);
                    setTimeout(function() {
                        $('.thankYouPage').fadeOut(300);
                        $('#kalkulator .screen').css("display", "none");
                        $('#kalkulator #screen1').css('display', 'table')
                        $('#kalkulator').fadeIn(300);
                    }, 10000);
                }
            });
        }
    });
    
    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $('#callForm');
        var phone = $('#callForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().replace(/\D+/gim, "").length < 7) {
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
                    ym(42046894, 'reachGoal', 'ZakazZvonka');
                    gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'ZakazZvonka' });
                    _tmr.push({ id: '3036807', type: 'reachGoal', goal: 'ZakazZvonka' });
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
                    }, 10000);
                }
            });
        }
        return false;
    });
    function randomInteger(min, max) {
        var rand = min - 0.5 + Math.random() * (max - min + 1)
        rand = Math.round(rand);
        return rand;
      }
    $('#promoSaleForm').submit(function (e) {
        e.preventDefault();
        var but = $(this).find('input[type="submit"]');
        var butText = but.val();
        but.prop( 'disabled', true ).val('Отправка...');
        var form = $(this);
        var phone = form.find('input[name="phone"]');
        var form_data = form.serializeArray();
        var promokey = randomInteger(18560, 98454);
        form_data.push({name: "promokey", value: promokey});
        if (phone.val().length < 7) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val(butText);
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: $.param(form_data),
                cache: false,
                success: function () {
                    form.fadeOut(300, function () {
                        ym(42046894, 'reachGoal', 'Promocode');
                        gtag('event', 'send', {'event_category': 'Btn', 'event_action': 'Click', 'event_label': 'Promocode' });
                        _tmr.push({ id: '3036807', type: 'reachGoal', goal: 'Promocode' });
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>Ваш промокод - <span>Promo"+promokey+"</span>. Менеджер свяжется с Вами в ближайшее время</div>");
                    });
                    setTimeout(function () {
                        $('.callWind').hide();
                        $('.callWind .title').show();
                        $('.stickerCall').show('slow');
                    }, 10000);

                }

            });
        }
        return false;
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
    var distance_for_sticker = $('#screen3').offset().top - $(window).height(),
        $sticker = $('.stickerCall');

    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker) $sticker.addClass('visible');
        else $sticker.removeClass('visible');
    });
});