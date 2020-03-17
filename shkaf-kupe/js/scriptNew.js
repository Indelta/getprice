const navigate = {
    next: e => {
        e && e.preventDefault();
        let prev = $(e.target).closest('.screen');
        let next = prev.next('.screen');
        if (next) {
            $(next).show();
            $('body, html').animate({scrollTop: $(next).offset().top}, 600);
            if ($(prev).hasClass('last')) {
                getAllFormData();
                var $target = $('#screen7 .quest li');
                var hold = 800;
                $.each($target,function(i,t){
                    var $this = $(t);
                    setTimeout(function(){ $this.show('normal'); },i*hold);
                });
            }
        }
    },
    prev: e => {
        e && e.preventDefault();
        let prev = $(e.target).closest('.screen');
        let next = $(prev).prev('.screen');
        if (next) {
            $('body, html').animate({scrollTop: $(next).offset().top}, 600);
            setTimeout(() => prev.hide(), 1000);
        }
    },
    last: () => {
        let prev = $('.screen.last');
        let next = prev.next('.screen').next('.screen');
        if(next) {
            $(next).show();
            $('body, html').animate({scrollTop: $(next).offset().top}, {
                duration: 600,
                complete: () => {
                    var bonuses = $('#screen8 .quest li');
                    $.each(bonuses, function(i,t) {
                        var $this = $(t);
                        setTimeout(function() {
                            $this.addClass('animated');
                        }, i*500);
                    });
                }
            });
        }
    },
    reset: () => {
        const form = document.getElementById('kalkulatorForm');
        $(form).trigger('reset');
        $(form.children).hide();
        $(form.children[0]).show();
    },
    makeNavigation: (activeStepIndex) => {
        const steps = document.getElementsByClassName('calcScreen');
        const stepsCount = steps.length;
        const nav = document.createElement('nav');
        nav.classList.add('navigation');
        const container = document.createElement('div');
        container.classList.add('container');
        const prevBtn = document.createElement('p');
        prevBtn.classList.add('prev');
        const prevAngle = document.createElement('span');
        prevAngle.classList.add('angle');
        prevAngle.innerText = "❬";
        const prevText = document.createElement('span');
        prevText.innerText = "Предыдущий шаг";
        prevBtn.append(prevAngle);
        prevBtn.append(prevText);
        container.append(prevBtn);
        const stepsList = document.createElement('ul');
        stepsList.classList.add('steps');
        for(let i = 0; i < stepsCount; i++) {
            const item = document.createElement('li');
            if (i < activeStepIndex) item.classList.add('done');
            else if (i === activeStepIndex) item.classList.add('active');
            const innerBlock = document.createElement('p');
            innerBlock.innerText = `${i + 1}`;
            item.append(innerBlock);
            item.style.margin = "0 3px";
            stepsList.append(item);
        }
        container.append(stepsList);
        const nextBtn = document.createElement('p');
        nextBtn.classList.add('next');
        const nextAngle = document.createElement('span');
        nextAngle.classList.add('angle');
        nextAngle.innerText = "❭";
        const nextText = document.createElement('span');
        nextBtn.append(nextText);
        nextText.innerText = "Следующий шаг";
        nextBtn.append(nextAngle);
        container.append(nextBtn);
        nav.append(container);
        return nav;
    }
}

// устанавливает все utm метки из строки запроса в скрытые поля
const setUtms = () => {
    const params = new URLSearchParams(window.location.search);
    $('input[name="utm_term"]').val(params.get('utm_term'));
    $('input[name="utm_source"]').val(params.get('utm_source'));
    $('input[name="utm_medium"]').val(params.get('utm_medium'));
    $('input[name="utm_campaign"]').val(params.get('utm_campaign'));
    $('input[name="utm_content"]').val(params.get('utm_content'));
}

// собирает все введенные данные
const getAllFormData = () => {
    let place = $('input[name="shkafPlace"]:checked').val() || "Не определено";
    let type = $('input[name="shkafType"]:checked').val() || "Не определено";
    let width = $('input[name="width"]').val();
    let height = $('input[name="height"]').val();
    let deep = $('input[name="deep"]').val();
    let config = $('input[name="otdely"]:checked').val() || "Не определено";
    let cover = $('input[name="ZshkafCover"]:checked').val() || "Не определено";

    let count = Math.round(Math.random() * (400 - 63) + 63);

    $('.otvetKuda').text(place);
    $('.otvetTip').text(type);
    $('.otvetRazmer .w').text(width);
    $('.otvetRazmer .h').text(height);
    $('.otvetRazmer .d').text(deep);
    $('.otvetConfig').text(config);
    $('.otvetOtdelka').text(cover);

    $('.resultCount span').animate({ num: count }, {
        duration: 3000,
        step: function (num){
            this.innerHTML = (num).toFixed(0);
        },
        complete: function() {
            $(this).addClass("blink");
            navigate.last();
        }
    });
}


$(document).ready(function() {
    // set utms
    setUtms();
    //make navigation for all steps
    const steps = document.getElementsByClassName('calcScreen');
    Array.prototype.map.call(steps, (item, index) => item.children[0].prepend(navigate.makeNavigation(index)));

    // first screen sticker 
    setTimeout(() => {
        $('.rightSide').animate(
            {right: 0},
            {duration: 3000, easing: "easeInOutBack"}
        )}, 2000
    );
    // main carousel
    $('.owl-carousel').owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });

    // navigation
    $('.next').on('click', navigate.next);
    $('.prev').on('click', navigate.prev);
    $('input[type="radio"]').on('change', navigate.next);

    // count sliders
    $('#sliderH').slider({
        range: "min",
        min: 120,
        max: 400,
        value: 270,
        slide: (e, ui) => $('input[name="height"]').val(ui.value)
    });
 
     $('#sliderW').slider({
         range: "min",
         min: 60,
         max: 1000,
         value: 250,
         slide: (e, ui) => $('input[name="width"]').val(ui.value)
     });
 
     $('#sliderD').slider({
         range: "min",
         min: 20,
         max: 100,
         value: 60,
         slide: ( e, ui ) => $('input[name="deep"]').val(ui.value)
     });
     $('input[name="height"]').on( "change", () => $("#sliderH").slider( "value", $(this).val()));
     $('input[name="width"]').on("change", () => $("#sliderW").slider( "value", $(this).val()));
     $('input[name="deep"]').on("change", () => $("#sliderD").slider( "value", $(this).val()));

     $('.input-slider').on('mouseenter', e => {
        let el = $(e.target).closest('.input-slider');
        $('.center img').hide();
        if ($(el).hasClass('deep')) $('.center img.deep').show();
        else if ($(el).hasClass('height')) $('.center img.height').show();
        else if ($(el).hasClass('width')) $('.center img.width').show();
        else $('.center img.default').show();
     });
     $('.input-slider').on('mouseleave', () => {
        $('.center img').hide();
        $('.center img.default').show();
     });

     // появление стикера на втором экране
    $('.fancy').fancybox({padding: 0});
    $(document).on('scroll', function() {
        const windowHeight = window.innerHeight;
        const scrollPosition = window.scrollY;
        const form = document.getElementById('kalkulatorForm');
        const lastScreen = form.children[form.children.length - 1];
        const lastScreenPosition = $(lastScreen).offset().top;
        if (scrollPosition < windowHeight - 50) $('.sticker_100').fadeOut(400);
        else if(lastScreenPosition && lastScreenPosition > scrollPosition - windowHeight) $('.sticker_100').fadeOut(400);
        else $('.sticker_100').fadeIn(400);
    });


    // send forms

    //Отправка формы

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
                        navigate.reset();
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