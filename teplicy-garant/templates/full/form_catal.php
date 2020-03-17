<p class="text-center alert_catal" style="display: none;">Ваша заявка отправлена</p>
<form action="#" class="catal_form">
    <div class="pr_gr">
        <label for="">Выберите длину теплицы:</label>
        <!--        <input type="text" class="catal_width" placeholder="4, 6, 8, 10 м">-->
        <select class="catal_width">
            <option value="Не выбрано" disabled selected>Длина теплицы</option>
            <option value="4м">4 м.</option>
            <option value="6м">6 м.</option>
            <option value="8м">8 м.</option>
            <option value="10м">10 м.</option>
        </select>
    </div>
<!--    <div class="pr_gr">-->
<!--        <label for="">Введите имя:</label>-->
<!--        <input type="text" class="catal_name" placeholder="Имя">-->
<!--    </div>-->
    <div class="pr_gr">
        <label for="">Введите регион доставки:</label>
        <input type="text" class="region" placeholder="Регион доставки">
    </div>
    <div class="pr_gr">
        <label for="">Введите номер телефона:</label>
        <input type="text" class="catal_phone phone_mask" name="posPhone" placeholder="+7 (***) ***-**-**">
    </div>
    <input type="hidden" name="utm_term" value="">
    <input type="hidden" name="utm_source" value="">
    <input type="hidden" name="utm_medium" value="">
    <input type="hidden" name="utm_campaign" value="">
    <input type="hidden" name="utm_content" value="">
    <button class="send_catal">Узнать стоимость</button>
</form>