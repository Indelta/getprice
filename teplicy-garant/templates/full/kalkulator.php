<section id="kalkulator" class="">
    <div class="container-fluid">
        <div class="row row_1035">
            <div class="kalkulatorBody">
                <form action method="post" id="kalkulatorForm">
                    <h2>Подберите подходящую теплицу за 2 минуты,</h2>
                    <div class="description">
                        ответив на 4 простых вопроса
                    </div>
                    
                    <div class="step step2">
                        <div class="question">
                            Вопрос 1 из 4
                        </div>
                        <h3>
                            Какого размера нужна теплица?
                        </h3>
                        <ul>
                            <li>
                                <input type="radio" name="width" value="4 метра" id="w4">
                                <label for="w4">4 метра</label>
                            </li>
                            <li>
                                <input type="radio" name="width" value="6 метров" id="w6">
                                <label for="w6">6 метров</label>
                            </li>
                            <li>
                                <input type="radio" name="width" value="8 метров" id="w8">
                                <label for="w8">8 метров</label>
                            </li>
                            <li>
                                <input type="radio" name="width" value="10 метров" id="w10">
                                <label for="w10">10 метров</label>
                            </li>
                            <li>
                                <input type="radio" name="width" value="Нужна консультация" id="wdn">
                                <label for="wdn">Нужна консультация</label>
                            </li>
                        </ul>
                        <nav>
                            <p class="next">Далее</p>
                        </nav>
                    </div>
                    <div class="step step1" style="display:none;">
                        <div class="question">Вопрос 2 из 4</div>
                        <h3>Что планируете выращивать в теплице?</h3>
                        <ul>
                            <li>
                                <label for="what1">
                                    <img src="images/kalkulator/step1/1.jpg" alt="">
                                    <div class="input">
                                        <input type="checkbox" name="what[]" value="Овощи" id="what1">
                                        Овощи
                                    </div>
                                </label>
                            </li>
                            <li>
                                <label for="what2">
                                    <img src="images/kalkulator/step1/2.jpg" alt="">
                                    <div class="input">
                                        <input type="checkbox" name="what[]" value="Ягоды" id="what2">
                                        Ягоды
                                    </div>
                                </label>
                            </li>
                            <li>
                                <label for="what3">
                                    <img src="images/kalkulator/step1/3.jpg" alt="">
                                    <div class="input">
                                        <input type="checkbox" name="what[]" value="Зелень" id="what3">
                                        Зелень
                                    </div>
                                </label>
                            </li>
                            <li>
                                <label for="what4">
                                    <img src="images/kalkulator/step1/4.jpg" alt="">
                                    <div class="input">
                                        <input type="checkbox" name="what[]" value="Фрукты" id="what4">
                                        Фрукты
                                    </div>
                                </label>
                            </li>
                            <li>
                                <label for="what5">
                                    <img src="images/kalkulator/step1/5.jpg" alt="">
                                    <div class="input">
                                        <input type="checkbox" name="what[]" value="Цветы" id="what5">
                                        Цветы
                                    </div>
                                </label>
                            </li>
                        </ul>
                        <nav>
                            <p class="next">Далее</p>
                            <p class="prev">< Назад</p>
                        </nav>
                    </div>
                    <!-- <div class="step step3" style="display: none">
                        <div class="question">
                            Вопрос 3 из 4
                        </div>
                        <h3>
                            В какой бюджет планируете уложиться?
                        </h3>
                        <ul>
                            <li>
                                <input type="radio" name="price" value="до 15 тыс. руб." id="p15">
                                <label for="p15">до 15 000 руб.</label>
                            </li>
                            <li>
                                <input type="radio" name="price" value="до 19.5 тыс. руб." id="p17">
                                <label for="p17">до 19 500 руб.</label>
                            </li>
                            <li>
                                <input type="radio" name="price" value="до 24.5 тыс. руб." id="p20">
                                <label for="p20">до 24 500 руб.</label>
                            </li>
                            <li>
                                <input type="radio" name="price" value="до 30 тыс. руб." id="p25">
                                <label for="p25">до 30 000 руб.</label>
                            </li>
                        </ul>
                        <nav>
                            <p class="next">Далее</p>
                            <p class="prev">< Назад</p>
                        </nav>
                    </div> -->
                    <?php
                        $monthes = array(
                            '01' => 'Январь',
                            '02' => 'Февраль',
                            '03' => 'Март',
                            '04' => 'Апрель',
                            '05' => 'Май',
                            '06' => 'Июнь',
                            '07' => 'Июль',
                            '08' => 'Август',
                            '09' => 'Сентябрь',
                            '10' => 'Октябрь', 
                            '11' => 'Ноябрь',
                            '12' => 'Декабрь'
                        );

                        $month0 = date('m');
                        $month1 = date('m', strtotime('+1 month', strtotime(date('d.m.Y'))));
                        $month2 = date('m', strtotime('+2 month', strtotime(date('d.m.Y'))));
                        $month3 = date('m', strtotime('+3 month', strtotime(date('d.m.Y'))));
                    ?>
                    <div class="step step4" style="display: none">
                        <div class="question">
                            Вопрос 3 из 4
                        </div>
                        <h3>
                            Когда планируете установку теплицы?
                        </h3>
                        <ul>
                            <li>
                                <input type="radio" name="month" value="<?php echo $monthes[$month0];?>" id="march">
                                <label for="march"><?php echo $monthes[$month0];?></label>
                            </li>
                            <li>
                                <input type="radio" name="month" value="<?php echo $monthes[$month1];?>" id="april">
                                <label for="april"><?php echo $monthes[$month1];?></label>
                            </li>
                            <li>
                                <input type="radio" name="month" value="<?php echo $monthes[$month2];?>" id="may">
                                <label for="may"><?php echo $monthes[$month2];?></label>
                            </li>
                            <li>
                                <input type="radio" name="month" value="<?php echo $monthes[$month3];?>" id="june">
                                <label for="june"><?php echo $monthes[$month3];?></label>
                            </li>
                            <li>
                                <input type="radio" name="month" value="Пока только присматриваюсь" id="dnmonth">
                                <label for="dnmonth">Пока только присматриваюсь</label>
                            </li>
                        </ul>
                        <nav>
                            <p class="next">Далее</p>
                            <p class="prev">< Назад</p>
                        </nav>
                    </div>
                    <div class="step step5" style="display: none">
                        <div class="question">
                            Вопрос 4 из 4
                        </div>
                        <h3>
                            В какой регион покупаете теплицу?
                        </h3>
                        <ul class="chooseWithoutPhoto">
                            <li>
                                <input type="radio" name="region" value="Чеховский р-н" id="rn1">
                                <label for="rn1">Чеховский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Воскресенский р-н" id="rn2">
                                <label for="rn2">Воскресенский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Раменский р-н" id="rn3">
                                <label for="rn3">Раменский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Ногинский р-н" id="rn4">
                                <label for="rn4">Ногинский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Пушкинский р-н" id="rn5">
                                <label for="rn5">Пушкинский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Дмитровский р-н" id="rn6">
                                <label for="rn6">Дмитровский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Солнечногорский р-н" id="rn7">
                                <label for="rn7">Солнечногорский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Истринский р-н" id="rn8">
                                <label for="rn8">Истринский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Рузский р-н " id="rn9">
                                <label for="rn9">Рузский р-н </label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Одинцовский р-н" id="rn10">
                                <label for="rn10">Одинцовский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Наро-Фоминский р-н" id="rn11">
                                <label for="rn11">Наро-Фоминский р-н</label>
                            </li>
                            <li>
                                <input type="radio" name="region" value="Другой р-н" id="rn12">
                                <label for="rn12">Другой р-н</label>
                            </li>
                        </ul>
                        <p class="nota">Бесплатная доставка 50 км от МКАД!</p>
                        <p class="nota2">Вы можете купить теплицу и оставить на хранение до весны.</p>
                        <nav>
                            <p class="next">Далее</p>
                            <p class="prev">< Назад</p>
                        </nav>
                    </div>
                    <div class="step step6" style="display:none;">
                        <h3>
                            Мы уже подобрали модели теплиц, которые подойдут именно Вам!<br>
                            Оставьте свои контакты и наш специалист свяжется с Вами в ближайшее время.
                        </h3>
                        <div class="input">
                            <p>Введите Ваше имя</p>
                            <input type="text" placeholder="Ваше имя" name="posName">
                        </div>
                        <div class="input">
                            <p>Введите Ваш номер телефона</p>
                            <input type="text" class="phone_mask" placeholder="+7 (***) ***-**-**" name="posPhone" required>
                        </div>
                        <input type="hidden" name="type" value="Калькулятор">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <nav>
                            <input type="submit" class="button" value="Узнать подходящие теплицы">
                            <p class="prev">< Назад</p>
                        </nav>
                    </div>
                </form>
                <div class="thankYou" style="display: none">
                    <div class="title">
                        Ваша заявка принята!
                    </div>
                    <div class="postTille">
                        В ближайшее время с Вами свяжется специалист по теплицам,
                        расскажет о результате подбора и проконсультирует по ценам.
                    </div>
                    <img src="images/kalkulator/thankyou.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>