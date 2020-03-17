<?php
    $month_arr = array(
        ".01." => "январе",
        ".02." => "феврале",
        ".03." => "марте",
        ".04." => "апреле",
        ".05." => "мае",
        ".06." => "июне",
        ".07." => "июле",
        ".08." => "августе",
        ".09." => "сентябре",
        ".10." => "октябре",
        ".11." => "ноябре",
        ".12." => "декабре"
    );
    $month = $month_arr[date('.m.')];

?>
<section id="discount">
    <div class="container-fluid">
        <div class="row row_960">
            <div class="leftpart">
                <p>Только в <?php echo $month;?> мы дарим</p>
                <img src="images/skidkaleft.png" alt="" class="skidkaleft">
                <div class="text">
                    скидку
                    <span>3%</span>
                </div>
                <img src="images/skidkaright.png" alt="" class="skidkaright">
            </div>
            <div class="rightpart">
                <form action="" id="skidka_form">
                    <p>Оставьте заявку и получите гарантированную скидку</p>
                    <input type="text" name="posName" placeholder="Имя">
                    <input type="text" name="posPhone" class="phone_mask" placeholder="+7 (***) ***-**-**">
                    <input type="text" class="hidden" name="type" value="Скидка 3%">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <button type="submit">ПОЛУЧИТЬ СКИДКУ</button>
                </form>
            </div>
        </div>
    </div>
</section>