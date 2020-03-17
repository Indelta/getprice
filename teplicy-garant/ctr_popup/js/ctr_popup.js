var ctr_list = new Object();

ctr_list['stringOrderButton'] = '<span>Заказать</span> прямо сейчас';
ctr_list['stringOrderSexM'] = 'заказал';
ctr_list['stringOrderSexW'] = 'заказала';
ctr_list['stringOrderSexMW'] = 'заказал(а)';
ctr_list['stringPack01'] = 'штуку';
ctr_list['stringPack02'] = 'штуки';
ctr_list['stringPack03'] = 'штук';
ctr_list['stringNowOnSite'] = 'Сейчас на сайте: ';
ctr_list['stringPers'] = 'чел.';
ctr_list['fastDelivery'] = 'Быстрая доставка';
ctr_list['RU'] = {
    strana: 'по Московской области',
    image: 'RU.png',
    homeNumber: '+7 xxx xxxxxx',
    mobileNumber: '+7 xxx xxxxxxx'
};

var ctr_list_city = new Object();
ctr_list_city['RU'] = {city: ['Подольск', 'Мытищи', 'Красногорск', 'Раменское', 'Пушкино', 'Лобня', 'Ногинск', 'Орешки', 'Солнечногорск', 'Москва','Дмитров','Звенигород','Серпухов']};

var ctr_list_name = new Object();
ctr_list_name['RU'] = {
    w: ["Валерия", "Маргарита", "Полина", "Анна", "Алина", "София", "Анастасия", "Дарья", "Ольга", "Ирина", "Виктория", "Мария"],
    m: ["Дмитрий", "Сергей", "Андрей", "Алексей", "Александр", "Григорий", "Владимир", "Михаил"]
};

var ctr_list_teplitsi = new Object();
ctr_list_teplitsi['RU'] = {teplitsi: ['теплицу БелТеплица-Стандарт', 'теплицу БелТеплица-Народная', 'теплицу БелТеплица-Традиционная', 'теплицу БелТеплица-Компакт', 'теплицу БелТеплица-Мини', 'теплицу БелТеплица-Капелька', 'теплицу БелТеплица-Советская','теплицу БелТеплица-ГОСТ','консультацию специалиста']};


var siteName = window.location.toString();

function showVisitors() {
    //	Функция выборки случайного числа
    function getRandom(min, max) {
        var res = Math.floor(Math.random() * (max - min + 1) + min);
        return res;
    }
    //  Количество посетителей
    var countPeoples = getRandom(130, 230);
    var countPeoplesBY = getRandom(50, 100);
    var peoplesBlock = $('#peoples');
    var minBY = 80;
    var maxBY = 150;
    peoplesBlock.text(getRandom(minBY, maxBY));

    //  Показ кол-ва посетителей на сайте
    setInterval(function () {
        peoplesBlock.fadeOut(function () {
            peoplesBlock.text(getRandom(minBY, maxBY));
            peoplesBlock.fadeIn();
        });
    }, 8000);
}

function changeQuantity() {
    //Правильные окончания слов
    function declOfNum(number, titles) {
        cases = [2, 0, 1, 1, 1, 2];
        return titles[(number % 100 > 4 && number % 100 < 20) ? 2 : cases[(number % 10 < 5) ? number % 10 : 5]];
    }

    //Кол-во заказанных упаковок
    var purCnt = Math.floor(Math.random() * (6 - 3 + 1) + 1);
    var purCntString = purCnt + ' ' + declOfNum(purCnt, [ctr_list.stringPack01, ctr_list.stringPack02, ctr_list.stringPack03]);
    $('#purCnt').text(purCnt);
    $('#purCntStr').text(purCntString);
}

function randSex() {
    var isShow = Math.round(Math.random());
    if (parseInt(isShow) === 1) {
        return 'w'
    } else {
        return 'm';
    }
}

function randAtZeroToNine() {
    var rand = -0.5 + Math.random() * 10;
    rand = Math.round(rand);
    return rand;
}

function randAtZeroToThree() {
    var rand = -0.5 + Math.random() * 4;
    rand = Math.round(rand);
    return rand;
}

function changeOrderText(s) {
    if (s === 'm') {
        $('.br_mob').text(ctr_list.stringOrderSexM);
    } else if (s === 'w') {
        $('.br_mob').text(ctr_list.stringOrderSexW);
    } else {
        $('.br_mob').text(ctr_list.stringOrderSexMW);

    }
}

//  Управление показом верхнего блока
function slide_redTopBlock() {
    changeQuantity();
    $('.zd_usersinfo_top').slideDown();
    setTimeout(function () {
        $('.zd_usersinfo_top').slideUp();
    }, 5000);

    var city = cityObj.city[randAtZeroToNine()];
    $('#JScity').text('(' + city + ')');

    var teplitsa = cityObj.teplitsi[randAtZeroToNine()];
    $('#JSteplitsa').text(teplitsa);

    var s = randSex(),
        name = namesObj[s][randAtZeroToNine()];
    $('#JSname').text(name);
    changeOrderText(s);


    //Устанавливаем случайную задержку повтороного срабатывания
    var delay = Math.floor(Math.random() * (10 - 8 + 1) + 8) * 1000;
    setTimeout(slide_redTopBlock, delay);
}

//  Управление показом верхнего блока (мобильная вер)
function show_redMobile() {
    console.log('showMobile');

    changeQuantity();

    var b1 = $('.b1');
    var b2 = $('.b2');
    var b3 = $('.b3');

    function getRandom(min, max) {
        var res = Math.floor(Math.random() * (max - min + 1) + min);
        return res;
    }

    var delay1 = getRandom(8, 10) * 1000;
    var delay2 = getRandom(8, 10) * 1000;
    var delay3 = getRandom(8, 10) * 1000;
    var delay4 = delay1 + delay2 + delay3;

    b3.fadeOut(function () {
        b2.fadeIn();
    });

    setTimeout(function () {
        b2.fadeOut(function () {
            b1.fadeIn();
        });
        setTimeout(function () {
            b1.fadeOut(function () {
                b3.fadeIn();
            });
        }, delay2);
    }, delay1);

    var city = cityObj.city[randAtZeroToNine()];
    $('#JScity').text('(' + city + ')');

    var s = randSex(),
        name = namesObj[s][randAtZeroToNine()];
    $('#JSname').text(name);
    changeOrderText(s);

    setTimeout(show_redMobile, delay4);
}

function ctr_change_red(ctr) {
    showVisitors();
    if (ctr_list[ctr] == undefined)
    // $(".zd_usersinfo").hide();
        ctr_list[ctr] = ctr_list['RU'];
    //else{
    //$(".zd_usersinfo").show();
    var text = ctr_list[ctr].strana;
    var flag = ctr_list[ctr].image;
    $(".us_info_strana").text(text);
    $("head").append(
        "<style>.icoEl_flag:before {background-image: url('http://gemo-cream.org/ctr_popup/img/flags/" + flag + "');}</style>"
    );
}

var cityObj = {city: "Москва"};
var namesObj = {w: "", m: ""};

function ctr_change_redTop(ctr) {

    if (ctr_list_city[ctr] == undefined) return;

    cityObj.city = ctr_list_city[ctr].city;
    cityObj.teplitsi = ctr_list_teplitsi[ctr].teplitsi;

    namesObj = (ctr_list_name[ctr] == undefined) ? ctr_list_name['RU'] : ctr_list_name[ctr];
}


function scroll_to_form() {
    //  Прокрутка к форме заказа
    $('.ctr_popup,.zd_buy_button,.toForm').on('click', function () {
        var cform = $('form:visible:last');

        if (window.location.hostname == "a.zdorovpsori.org") {
            $('html, body').stop().animate({scrollTop: ($('.zakazat2').offset().top)}, 1000);
            return;
        }
        ;
        $('html, body').stop().animate({scrollTop: (cform.offset().top)}, 1000);
    });
}


function addTopBlock() {
    // scroll_to_form();
    //старый нижний баннер - скрыть
    $('.block_fixed').hide();
    $('#upsale').hide();
    $('#adPopup').hide();
    $('#adCount').hide();


    //  Запуск redTop - верхний блок.
    if ($(window).width() > 790) {
        slide_redTopBlock();
    } else {
        //  Иначе мобильная функция
        show_redMobile();
        //var mobile = setInterval(show_redMobile, 12000);
    }
}

$(function () {

    if (window.multilang) {
        internationalization();
    }

    if (~siteName.indexOf("iframer")) return;

    var ctr = 'RU';
    var country = 'RU';

    $("head").append(
        "<link rel='stylesheet' href='http://gemo-cream.org/ctr_popup/css/red_style.css'><style>.icoEl_flag:before {background-image: url('img/flags/<?= $countryInfo['image'] ?>');}</style>"
    );
    $("body").append(
        "<div class='zd_usersinfo'><div class='b1'><div class='zd_usersinfo_top'><b><div class='icoEl_user'><!--<span id='purCnt'>4</span>--></div><span id='JSname'>Полина</span> <span id='JScity'>(Самара)</span></b> <span class='br_mob'>заказал(а)</span> <span id='JSteplitsa'>теплицу Гарант Лидер</span><!--<span id='purCntStr'>4 штуки</span>--></div></div><div class='toForm'><div class='b3'><a class='icoEl_cart' href='#' style='outline: none' data-toggle='modal' data-target='.bs-example-modal-lg' onclick='promo()'><span class='us_info_text01'>" + ctr_list.stringOrderButton + "</span><i></i></a></div><div class='icoEl_user2'><span class='cont_online_now'>" + ctr_list.stringNowOnSite + "</span><b><span id='peoples'>...</span> <span class='cont_unit_persons'>" + ctr_list.stringPers + "</span></b></div><div class='b2'><div class='icoEl_flag'><span class='cont_fast_delivery'>" + ctr_list.fastDelivery + "</span><span class='us_info_strana'></span></div></div></div></div>"
    );

    ctr_change_red(ctr);
    ctr_change_redTop(ctr);
    addTopBlock();


    $('[name=country]').on('change', function () {

        var ctr = $(this).val();
        ctr_change_red(ctr);
        ctr_change_redTop(ctr);

        if (~siteName.indexOf("de.")) {
            reassign();
        }
        ;

    });

    // scroll_to_form();
});


$(document).ready(function () {
    $(window).scroll(function () {
        var scrollBottom = $(window).scrollTop() + $(window).height();
        var scrollHeight = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );

        if (scrollBottom < scrollHeight) {
            $(".zd_usersinfo").slideDown(1000);
        } else {
            $(".zd_usersinfo").slideUp(1000);
        }
    });
});

//интернацианализация
function internationalization() {

    console.log(window.multilang);

    if (window.multilang == 'az') {
        for (var key in ctr_list) {
            if (ctr_list_az[key]) {
                ctr_list[key].strana = ctr_list_az[key].strana;
            }
            ctr_list.stringOrderButton = ctr_list_az.stringOrderButton;
            ctr_list.stringOrderSexM = ctr_list_az.stringOrderSexM;
            ctr_list.stringOrderSexW = ctr_list_az.stringOrderSexW;
            ctr_list.stringOrderSexMW = ctr_list_az.stringOrderSexMW;
            ctr_list.stringPack01 = ctr_list_az.stringPack01;
            ctr_list.stringPack02 = ctr_list_az.stringPack02;
            ctr_list.stringPack03 = ctr_list_az.stringPack03;
            ctr_list.stringNowOnSite = ctr_list_az.stringNowOnSite;
            ctr_list.stringPers = ctr_list_az.stringPers;
            ctr_list.fastDelivery = ctr_list_az.fastDelivery;

        }
        for (var key in ctr_list_city) {
            if (ctr_list_az[key])
                ctr_list_city[key].city = ctr_list_az[key].city;
        }
    }

    if (window.multilang == 'kk') {
        for (var key in ctr_list) {
            if (ctr_list_kk[key]) {
                ctr_list[key].strana = ctr_list_kk[key].strana;
            }
            ctr_list.stringOrderButton = ctr_list_kk.stringOrderButton;
            ctr_list.stringOrderSexM = ctr_list_kk.stringOrderSexM;
            ctr_list.stringOrderSexW = ctr_list_kk.stringOrderSexW;
            ctr_list.stringOrderSexMW = ctr_list_kk.stringOrderSexMW;
            ctr_list.stringPack01 = ctr_list_kk.stringPack01;
            ctr_list.stringPack02 = ctr_list_kk.stringPack02;
            ctr_list.stringPack03 = ctr_list_kk.stringPack03;
            ctr_list.stringNowOnSite = ctr_list_kk.stringNowOnSite;
            ctr_list.stringPers = ctr_list_kk.stringPers;
            ctr_list.fastDelivery = ctr_list_kk.fastDelivery;
        }
        for (var key in ctr_list_city) {
            if (ctr_list_kk[key])
                ctr_list_city[key].city = ctr_list_kk[key].city;
        }

    }

}
