let shkaf = new Controller();

$(document).ready(() => {
    // ставим utm метки в тело данных
    shkaf.setUtmsFromUrl();
    // устанавливаем id обертки модальных окон
    shkaf.setModalWrap('#modal-wrap');
    // устанавливаем общий класс для модальных окон
    shkaf.setModalClassName('.modal');
    // отменяем стандартные действия при клике на ссылки и кнопки
    // $('a').on('click', e => e.preventDefault());

    // устанавливаем маску для телефона
    $('input[name="phone"]').inputmask({mask: "+375(99)999 99 99"});

    // количество просмотров в слайдере купонов
    $('#cupons .slide').map((index, item) => $(item).find('.num').text(shkaf.getRandomInt(150, 480)));

    // осталось бесплатных купонов * из 100
    $('#calc-outer .step .cupons .cupon').map((index, item) => {
        $(item).find('.late-count .min').text(shkaf.getRandomInt(10, 30));
    });

    // слайдер купонов на первом экране
    $('#cupons').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "20%",
        infinite: true,
        arrows: false, 
        dots: false,
        autoplay: true
    });

    // открытие и закрытие модальных окон
    $('#set-review').on('click', () => shkaf.openModal('.set-review'));
    $('.get-catalog').on('click', () => shkaf.openModal('.catalog-modal'));
    $('.modal .close').on('click', () => shkaf.closeModal());
    $(document).on('click', e => {
        e.target.id === 'modal-wrap' && shkaf.closeModal();
        return true;
    });

    // плавный скролл к калькулятору
    $('#get-cupon').on('click', () => shkaf.scrollTo('#calc-outer'));

    // установка количества заявок за сегодня
    $('#post-header span, .pre-footer span').text(shkaf.setAppsCount());

    // установка актуального года в футере
    $('#years').text(shkaf.getFullYear());

    function changeInput (e) {
        let input = $(e.target);
        input.closest('.inputs').find('.input').removeClass('active');
        input.closest('.input').addClass('active');
        shkaf.setInputData(e);
        e.target.name !== "phone" && setTimeout(() => $('#calculator').slick('slickNext'), 400);
    }
    function clickLabel(e) {
        if ($(this).hasClass('active')) {
            e.preventDefault();
            setTimeout(() => $('#calculator').slick('slickNext'), 400);
        }
    }
    $('input').on('change', changeInput);
    $('textarea').on('input', e => shkaf.setInputData(e));
    $('.input').on('click', clickLabel);

    // открытие/закрытие thankyou block
    function getThankyou (bul) {
        shkaf.scrollTo('#calc-outer');
        if (bul) {
            $('.user-phone').text(shkaf.getOriginalPhone());
            $('#calc-outer .step-name').hide();
            $('#calc-outer #calculator').hide();
            $('#calc-outer .calc-nav').hide();
            $('#calc-outer .warning').hide();
            $('#calc-outer .thankyou').show();
        }
        else {
            $('#calc-outer .thankyou').hide();
            $('#calc-outer .step-name').show();
            $('#calculator').slick('slickGoTo', 0);
            $('#calc-outer #calculator').show();
            $('#calc-outer .calc-nav').show();
        } 
    }
    
    // закрытие thankyou block
    $('.thankyou .close').on('click', () => getThankyou(false));

    // правильный action в форму get-catalog-form
    $('.get-catalog').on('click', e => {
        e.preventDefault();
        if ($(e.target).hasClass('modern')) $('#get-catalog-form').attr('action', 'sendModern.php');
        else if ($(e.target).hasClass('shum')) $('#get-catalog-form').attr('action', 'sendShum.php');
        else $('#get-catalog-form').attr('action', 'sendUs.php');
    });

    // отправка форм

    // отправить отзыв
    $('#set-review').on('click', e => e.preventDefault());
    $('#set-review-form').on('submit', e => shkaf.sendForm(e, res => {
        let form = $(e.target);
        let phone = form.find('input[name="phone"]');
        if (res.error) {
            phone.addClass('error');
            setTimeout(() => phone.removeClass('error'), 500);
        }
        else {
            $(phone).val("");
            form.fadeOut();
            form.next('.success').fadeIn();
            ym(56938240, 'reachGoal', 'Otzuv');
            gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'Otzuv' });
            _tmr.push({ id: '3156242', type: 'reachGoal', goal: 'Otzuv' });
        }
    }));
    // калькулятор
    $('.cupon .btn').on('click', e => {
        e.preventDefault();
        let btn = $(e.target);
        let cupon = btn.closest('.cupon');
        let sendTo = cupon.hasClass('shum') ? 'sendShum.php' : cupon.hasClass('modern') ? 'sendModern.php' : 'sendUs.php';
        let phone = cupon.find('input[name="phone"]');
        e.target.action = sendTo;
        e.target.formType = "Калькулятор";
        let btnText = btn.text();
        btn.text("Отправка...");
        shkaf.sendForm(e, res => {
            btn.text(btnText);
            if (res.error) {
                phone.addClass('error');
                setTimeout(() => phone.removeClass('error'), 500);
            }
            else {
                
                $(phone).val("");
                getThankyou(true);
                ym(56938240, 'reachGoal', 'CalcCupon');
                gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'CalcCupon' });
                _tmr.push({ id: '3156242', type: 'reachGoal', goal: 'CalcCupon' });
            }
        });
    });

    // получить каталог
    $('#get-catalog-form').on('submit', e => shkaf.sendForm(e, res => {
        let form = $(e.target);
        let phone = form.find('input[name="phone"]');
        if (res.error) {
            phone.addClass('error');
            setTimeout(() => phone.removeClass('error'), 500);
        }
        else {
            $(phone).val("");
            form.fadeOut();
            form.next('.success').fadeIn();
            ym(56938240, 'reachGoal', 'Catalog');
            gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'Catalog' });
            _tmr.push({ id: '3156242', type: 'reachGoal', goal: 'Catalog' });
        }
    }));


    // логика калькулятора

    // изменение шага калькулятора в зависимости от номера слайда
    function changeStepNum (slide) {
        let calcNav = $('.calc-nav .nav li');
        if (calcNav.length === slide) {
            $('.calc-nav').hide();
            $('.calc-nav + .warning').show();
        }
        calcNav.map(index => {
            if (slide > 0) $('.left-arrow').css({opacity: 1, cursor: 'pointer'});
            else $('.left-arrow').css({opacity: 0, cursor: 'default'});
            
            $(calcNav[index]).removeClass('done');
            $(calcNav[index]).removeClass('active');
            if (index  < slide) {
                $(calcNav[index]).removeClass('active');
                $(calcNav[index]).addClass('done');
            }
            else if (index == slide){
                $(calcNav[index]).removeClass('done');
                $(calcNav[index]).addClass('active');
            }
        });
    }

    const calc = $('#calculator');

    calc.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        infinite: false,
        swipe: false,
        adaptiveHeight: true
    });

    $('.left-arrow').on('click', () => calc.slick('slickPrev'));
    $('.right-arrow').on('click', () => calc.slick('slickNext'));

    calc.on('beforeChange', (e, slick, currentSlide, nextSlide) => {
        $('#calc-outer .step-name').text(shkaf.getStepName(nextSlide));
        changeStepNum(nextSlide);
        if ($($('#calculator .step')[nextSlide]).hasClass('final')) {
            shkaf.shakeCupons('#calc-outer .step.final .cupons .cupon');
        }
    });
});