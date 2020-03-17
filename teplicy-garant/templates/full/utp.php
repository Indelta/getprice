<?php 
    $utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : "";
?>
<section id="utp">
    <div class="header">
        <div class="cont row_1035">
            <img src="images/garant/logo.png" alt="" class="logo">
            <p class="sitename">
                Официальный филиал-<br>
                склад в Минске
                <span>г. Дзержинск, ул. 2-ая Ленинская, д. 85а</span>
            </p>
            <div class="contacts">
                <button data-toggle="modal" data-target=".bs-example-modal-lg" onclick="zvon();">Обратный звонок</button>
                <a href="tel:+74951085634" class="tel"><img src="images/utp/phone.png" alt=""><span class="phone_alloka"><small>+7 495</small> 108 56 34</span></a>
            </div>
            <div class="worktime">
                <img src="images/utp/clock.png" alt="">
                <p> 
                    Время работы:<br>
                    9:00 – 19:00 без выходных
                </p>
            </div>
        </div>
    </div>
    <div class="w-utp belzavod">
        <div class="cont row_1035">
            <div class="sticker-spec belzavod" data-toggle="modal" data-target="#spec-predlog">
                <img src="images/redesign/winner-utp/sticker.png" alt="">
            </div>
            <div class="plashka">
                <h1>Теплицы с завода &laquo;Гарант&raquo; <br> к вам на <span>участок!</span></h1>
                <p><span>Только мы даем 5-ти летнюю гарантию!</span>
            </div>
            <div class="stickers <?php echo $utp_class;?>">
                <a class="sale" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="discount();">
                    <p>защита</p>
                    <p>от подделок голограммой</p>
                    <img src="images/redesign/sticker_skidka.png" alt="">
                </a>
                <a class="free-dost" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="shipping();">
                    <p>доставка</p>
                    <p style="text-transform:initial;">по всей Беларуси</p>
                    <img src="images/redesign/sticker_dostavka.png" alt="">
                </a>
            </div>
        </div>
        <img src="images/garant/madeRB.png" class="madeSticker">
    </div>
</section>