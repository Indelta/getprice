// для работы методов класса обязательно нужен JQuery
class Controller {
    constructor () {
        this.answers = {};
        this.modalWrap = null;
        this.modalClass = null;
        this.sendTo = null;
        this.stepNames = [
            'Куда вы хотите поставить шкаф-купе?',
            'Какой тип шкафа выберем?',
            'Выберите дизайн дверей',
            'Срок изготовления шкафа',
            'По вашим критериям подобраны 2 предложения от производителей. Выбирайте наиболее выгодные для вас'
        ];
    }
    // забираем utm метки из url
    setUtmsFromUrl () {
        let urlStr = window.location.href;
        let url = new URL(urlStr);
        this.answers.utm_term = url.searchParams.get('utm_term') || null;
        this.answers.utm_source = url.searchParams.get('utm_source') || null;
        this.answers.utm_medium = url.searchParams.get('utm_medium') || null;
        this.answers.utm_campaign = url.searchParams.get('utm_campaign') || null;
        this.answers.utm_content = url.searchParams.get('utm_content') || null;
    }
    // устанавливает id обертки модальных окон
    setModalWrap (wrapId) {
        if (!wrapId || wrapId[0] !== '#') throw new Error("Modal wrap must be sting id like '#wrap'");
        this.modalWrap = wrapId;
    }
    // устанавливает общий класс для модальных окон
    setModalClassName (className) {
        if (!className || className[0] !== '.') throw new Error("Modal class must be string class like '.class'");
        this.modalClass = className;
    }

    // вызывает модальное окно с определенным класом
    openModal (modalClass) {
        if (!this.modalWrap || !this.modalClass) throw new Error("Modal wrap id and modal class are required");
        $(this.modalWrap).fadeIn();
        $(`${this.modalWrap} ${this.modalClass}`).hide();
        $(this.modalWrap).find(modalClass).fadeIn();
    }

    // закрывает модальные окна
    closeModal () {
        $(`${this.modalWrap} ${this.modalClass}`).fadeOut();
        $(this.modalWrap).fadeOut();
    }

    // плавный скролл к определенному контейнеру
    scrollTo (container) {
        if (!container || container.length < 1) return false;
        let top = $(container).offset().top;
        $('body, html').animate({scrollTop: top}, 500);
    }

    // случайное число от min до max
    getRandomInt (min = 0, max = 1) {
        let rand = min - 0.5 + Math.random() * (max - min + 1);
        return Math.round(rand);
    }

    // устанавливает количество заявок в день
    setAppsCount () {
        let oldNum = sessionStorage.getItem('appCount');
        if (!oldNum) {
            let initCount = this.getRandomInt(100, 400);
            sessionStorage.setItem('appCount', initCount);
            return initCount;
        }
        else {
            let counter = this.getRandomInt(1, 4);
            sessionStorage.setItem('appCount', +oldNum + counter);
            return (+oldNum + counter);
        }
    }

    // получает текущий год
    getFullYear () {
        return new Date().getFullYear();
    }

    // устанавливает поля в обьект ответа
    setInputData (e) {
        this.answers[e.target.name] = e.target.name == "phone" ? e.target.value.replace(/\D+/gim, "") : e.target.value;
    }

    // проверка правильности номера телефона
    checkPhone (phoneNumber) {
        return phoneNumber.replace(/\D+/gim, "").length < 12 ? false : true;
    }

    // отправка форм
    sendForm (e, callback) {
        e.preventDefault();
        this.sendTo = e.target.action;
        this.answers.formType = $(e.target).find('input[name="form-type"]').val() || e.target.formType;
        if (this.answers.phone && this.answers.phone.length == 12) {
            $.ajax({
                method: 'POST',
                url: this.sendTo,
                data: this.answers,
                success: callback
            });
        }
        else callback({error: true});
    }

    // Заголовок шага в зависимости от номера слайда калькулятора
    getStepName (num) { return this.stepNames[num] || ''; }

    // показать два рандомных купона на последнем шаге (убрать лишние купоны)
    shakeCupons (cupons) {
        let randCount = this.getRandomInt(0, 3);
        $(cupons).css({display: 'block'});
        $(cupons).map((index, item) => {
            index !== randCount && index !== $(cupons).length - 1 && $(item).css({display: 'none'});
        });
    }

    // получить оригинальный номер телефона (как был введен)
    getOriginalPhone () {
        if (!this.answers.phone || !this.answers.phone.length) return "";
        let countryCode = this.answers.phone.slice(0, 3);
        let phoneCode = this.answers.phone.slice(3, 5);
        let first = this.answers.phone.slice(5, 8);
        let second = this.answers.phone.slice(8, 10);
        let third = this.answers.phone.slice(10);
        return `+${countryCode} (${phoneCode}) ${first} ${second} ${third}`;
    }
}