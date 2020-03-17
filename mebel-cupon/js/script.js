let shkaf = new Controller();

function changeStepNum (slide) {
    let calcNav = $('.calculator .nav ul li');
    if (calcNav.length === slide) {
        $('.calculator .nav').hide();
        $('.calculator .nav + .warning').show();
    }
    calcNav.map(index => {
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
$(document).ready(() => {
    // ставим utm метки в тело данных
    shkaf.setUtmsFromUrl();
    // устанавливаем id обертки модальных окон
    shkaf.setModalWrap('#modal-wrap');
    // устанавливаем общий класс для модальных окон
    shkaf.setModalClassName('.modal');
    // отменяем стандартные действия при клике на ссылки и кнопки
    $('a').on('click', e => e.preventDefault());

    // установка количества заявок за сегодня
    $('header .center span').text(shkaf.setAppsCount());

    // устанавливаем маску для телефона
    $('input[name="phone"]').inputmask({mask: "+375(99)999 99 99"});

    // количество просмотров в слайдере купонов
    $('#cupons .slide').map((index, item) => $(item).find('.num').text(shkaf.getRandomInt(150, 480)));


    $('#cupons').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: 0, 
        arrows: true,
        autoHeight: 0,
        infinite: true,
        autoplay: true
    });

    // получить купон кнопка на главном экране
    $('#get-cupon').on('click', () => {
        $('.inner-block').hide();
        $('.calculator').show();
        constructCalculator();
    });

    // calculator
    function constructCalculator () {
        const calcOptions = {
            slidesToScroll: 1,
            slidesToShow: 1,
            arrows: true,
            dots: false,
            infinite: false,
            swipe: false,
            adaptiveHeight: true
        }
        $('#calc').slick(calcOptions);
        $('#calc').on('beforeChange', (e, slick, currentSlide, nextSlide) => {
            $('.calculator .step-name').text(shkaf.getStepName(nextSlide));
            changeStepNum(nextSlide);
            if ($($('#calc .step')[nextSlide]).hasClass('final')) {
                let prev = $('#calc').find('.slick-prev');
                $(prev).css({display: 'none'});
                shkaf.shakeCupons('.calculator .step.final .cupons .cupon');
            }
        });
    }

    // установка актуального года в футере
    $('footer p.year').text(shkaf.getFullYear());
    // осталось бесплатных купонов * из 100
    $('.calculator .step .cupons .cupon').map((index, item) => {
        $(item).find('.late-count .min').text(shkaf.getRandomInt(10, 30));
    });
    
    function changeInput (e) {
        let input = $(e.target);
        input.closest('.inputs').find('.input').removeClass('active');
        input.closest('.input').addClass('active');
        shkaf.setInputData(e);
        e.target.name !== "phone" && e.target.name !== 'review' && setTimeout(() => $('#calc').slick('slickNext'), 400);
    }
    function clickLabel(e) {
        if ($(this).hasClass('active')) {
            e.preventDefault();
            setTimeout(() => $('#calc').slick('slickNext'), 400);
        }
    }
    $('input').on('change', changeInput);
    $('textarea').on('input', changeInput);
    $('.input').on('click', clickLabel);

    // открытие и закрытие модальных окон
    $('#set-review').on('click', () => shkaf.openModal('.set-review'));
    $('.get-catalog').on('click', () => shkaf.openModal('.catalog-modal'));
    $('.modal .close').on('click', () => shkaf.closeModal());
    $(document).on('click', e => {
        e.target.id === 'modal-wrap' && shkaf.closeModal();
        return true;
    });

    $('.thankyou .close').on('click', getThankyou.bind(this, false));
    // правильный action в форму get-catalog-form
    $('.get-catalog').on('click', e => {
        if ($(e.target).hasClass('modern')) $('#get-catalog-form').attr('action', 'sendModern.php');
        else if ($(e.target).hasClass('shum')) $('#get-catalog-form').attr('action', 'sendShum.php');
        else $('#get-catalog-form').attr('action', 'sendUs.php');
    });

    // открытие/закрытие thankyou block
    function getThankyou (bul) {
        if (bul) {
            $('.user-phone').text(shkaf.getOriginalPhone());
            $('.calculator').hide();
            $('.inner-block').hide();
            $('.calculator .warning').hide();
            $('.calculator .nav').show();
            $('.calculator .nav ul li').removeClass('done').removeClass('active');
            $($('.calculator .nav ul li')[0]).addClass('active');
            $('.thankyou').show();
        }
        else {
            $('.thankyou').hide();
            $('.inner-block').show();
            $('#cupons').slick('reinit');
            $('#calc').slick('unslick');
        } 
    }
    // отправка форм

    //калькулятор
    $('.cupon .btn').on('click', e => {
        e.preventDefault();
        let btn = $(e.target);
        let btnText = btn.text();
        let cupon = btn.closest('.cupon');
        let sendTo = cupon.hasClass('shum') ? 'sendShum.php' : cupon.hasClass('modern') ? 'sendModern.php' : 'sendUs.php';
        let phone = cupon.find('input[name="phone"]');
        e.target.action = sendTo;
        e.target.formType = "Калькулятор";
        btn.text("Отправка...");
        shkaf.sendForm(e, res => {
            btn.text(btnText);
            if (res.error) {
                phone.addClass('error');
                setTimeout(() => phone.removeClass('error'), 500);
            }
            else {
                $(phone).val("");
                ym(56938240, 'reachGoal', 'CalcCupon');
                gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'CalcCupon' });
                _tmr.push({ id: '3156242', type: 'reachGoal', goal: 'CalcCupon' });
                getThankyou(true);
            }
        });
    });

    // отправить отзыв
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
            ym(56938240, 'reachGoal', 'Otzuv');
            gtag('event', 'send', {'event_category': 'Event', 'event_action': 'Send', 'event_label': 'Otzuv' });
            _tmr.push({ id: '3156242', type: 'reachGoal', goal: 'Otzuv' });
            form.next('.success').fadeIn();
        }
    }));

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
    
});