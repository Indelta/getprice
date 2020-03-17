<?php 
    $year = date("Y");

?>
<section id="gost" class="">
    <div class="container-fluid">
        <div class="row row_960">
            <div class="title">Отличный выбор тех, кто понимает в качестве!</div>
            <div class="content">
                <p class="desc">НОВАЯ МОДЕЛЬ - Теплица "Гарант-Триумф" с усиленным каркасом</p>
                <div class="l">
                    <img src="images/garant/catalog/triumf.jpg" alt="">
                    <div class="garantt">
                        <span>ГАРАНТИРОВАНО:</span><br>
                        цена<br>
                        дешевле<br>
                        аналогов
                    </div>
                </div>
                <div class="r">
                    <ul>
                        <li>Ширина 3м. Высота 2 м. Шаг дуги 67 см.</li>
                        <li>Оцинкованная труба 40х20 мм., 2 двери, 2 форточки</li>
                        <li>Сверхпрочная, не нужно убирать на зиму</li>
                        <li>Специальный поликарбонат для теплицы с двойной УФ защитой</li>
                    </ul>
                    <div class="gost">
                        <img src="images/gost.png" alt="">
                    </div>
                </div>
                <form action="#" id="gost_form">
                    <div class="gr">
                        <select name="width">
                            <option value="Не выбрано" disabled selected>Длина теплицы</option>
                            <option value="4м">4 м.</option>
                            <option value="6м">6 м.</option>
                            <option value="8м">8 м.</option>
                            <option value="10м">10 м.</option>
                        </select>
                    </div>
                    <div class="gr">
                        <input type="text" name="region" class="region" placeholder="Регион доставки"> 
                    </div>
                    <div class="gr">
                        <input type="text" name="posPhone"  class="phone_mask" placeholder="+7 (***) ***-**-**">
                        <input type="text" class="hidden" name="type" value="Заказ на новую теплицу Белтеплица-Советская">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                    </div>
                    <div class="gr">
                        <button type="submit">Узнать стоимость</button>
                    </div>
                </form>
            </div>
            <div class="mobile-content">
                <p class="mobile-title">НОВАЯ МОДЕЛЬ - Теплица "Гарант-Триумф" с усиленным каркасом</p>
                <div class="mobile-img">
                    <img src="images/catal/triumf1.jpg" alt="">
                    <div class="garantt">
                        <span>ГАРАНТИРОВАНО:</span><br>
                        цена<br>
                        дешевле<br>
                        аналогов
                    </div>
                </div>
                <div class="desc">
                    <ul>
                        <li>Ширина 3м. Высота 2 м. Шаг дуги 67 см.</li>
                        <li>Оцинкованная труба 40х20 мм., 2 двери, 2 форточки</li>
                        <li>Сверхпрочная, не нужно убирать на зиму</li>
                        <li>Специальный поликарбонат для теплицы с двойной УФ защитой</li>
                    </ul>
                </div>
                <a href="" class="mob-btn" data-toggle="modal" data-target="#mobile-modal-carcas">Узнать стоимость</a>
            </div>
        </div>
    </div>
</section>
<section id="catalog">
    <div class="container-fluid">
        <div class="row row_960">
            <div class="catalog_title">
                Лучшие теплицы по оценкам покупателей в&nbsp;2019&nbsp;г.
            </div>
            <div class="ocenka">
                <div class="line">
                    Оценка наших покупателей:
                    <img src="images/star.png" alt="">
                    <img src="images/star.png" alt="">
                    <img src="images/star.png" alt="">
                    <img src="images/star.png" alt="">
                    <img src="images/halfstar.png" alt="">
                    <span class="number">4.78*</span>
                </div>
                <div class="text">
                    *Нас оценили 2812 клиентов в <?php echo $year;?> году
                </div>
            </div>
            <div class="catalog_cont">
                <!-- Гарант Лидер -->
                <div class="product product1">
                    <p class="pr_title">Теплица "Гарант-Лидер"</p>
                    <div class="product-img">
                        <img src="images/garant/catalog/lider.jpg" alt="">
                        <div class="count">Осталось 6 шт.</div>
                    </div>
                    <div class="desc" data-toggle="modal" data-target="#catalog-form">
                        <ul>
                            <li>
                                ширина – <nobr>3 м</nobr>, высота – <nobr>2 м</nobr>,
                                длину выбираете сами (от 4 до 12 м)
                            </li>
                            <li>
                                Стальная труба оцинкована полностью с наружной и с внутренней стороны <nobr>20х20мм</nobr>
                            </li>
                            <li>Поликарбонат для теплиц - двойная УФ защита</li>
                            <li>две двери на торцах с форточками</li>
                        </ul>
                        <a href="#catalog-form" class="product-btn">Узнать стоимость</a>
                    </div>
                </div>

                <!-- Гарант-Лидер разборная-->
                <div class="product product2">
                    <p class="pr_title">Теплица "Гарант-Лидер" (разборная)</p>
                    <div class="product-img">
                        <img src="images/garant/catalog/lider-razb.jpg" alt="">
                        <div class="count few">Осталось 3 шт.</div>
                    </div>
                    <div class="desc" data-toggle="modal" data-target="#catalog-form">
                        <ul>
                            <li>
                                <nobr>ширина – 3 м,</nobr> <nobr>высота – 2 м,</nobr> длину выбираете сами <nobr>(от 4 до 12 м)</nobr>
                            </li>
                            <li>
                                стальная труба оцинкована полностью с наружной и с внутренней стороны <nobr>40х20мм</nobr>
                            </li>
                            <li>расстояние между дугами <nobr>0,67 м</nobr></li>
                            <li>новое поколение поликарбоната 4мм</li>
                            <li>двойная защита от ультрафиолета</li>
                            <li>две двери на торцах с форточками</li>
                        </ul>
                        <a href="#catalog-form" class="product-btn">Узнать стоимость</a>
                    </div>
                </div>

                <!-- Гарант-Мастер -->
                <div class="product product3">
                    <p class="pr_title">Теплица "Гарант-Мастер"</p>
                    <div class="product-img">
                        <img src="images/garant/catalog/master.jpeg" alt="">
                        <div class="count">Осталось 3 шт.</div>
                    </div>
                    <div class="desc" data-toggle="modal" data-target="#catalog-form">
                        <ul>
                            <li>
                                <nobr>ширина – 2,4 м,</nobr> <nobr>высота – 2 м,</nobr> длину выбираете сами <nobr>(от 4 до 12 м)</nobr>
                            </li>
                            <li>
                                стальная труба оцинкована полностью с наружной и с внутренней стороны <nobr>20х20мм</nobr>
                            </li>
                            <li>расстояние между дугами <nobr>1 м</nobr></li>
                            <li>новое поколение поликарбоната 4мм</li>
                            <li>двойная защита от ультрафиолета</li>
                            <li>две двери на торцах с форточками</li>
                        </ul>
                        <a  href="#catalog-form" class="product-btn">Узнать стоимость</a>
                    </div>
                </div>

                <!-- БелТеплица-Компакт -->
                <div class="product product4">
                    <p class="pr_title">Теплица "Гарант-Компакт"</p>
                    <div class="product-img">
                        <img src="images/garant/catalog/compact.jpg" alt="">
                        <div class="count">Осталось 10 шт.</div>
                    </div>
                    <div class="desc" data-toggle="modal" data-target="#catalog-form">
                        <ul>
                            <li>
                                <nobr>ширина – 2 м,</nobr> <nobr>высота – 2 м,</nobr> длину выбираете сами <nobr>(от 4 до 12 м)</nobr>
                            </li>
                            <li>
                                стальная труба оцинкована полностью с наружной и с внутренней стороны <nobr>20х20мм</nobr>
                            </li>
                            <li>расстояние между дугами <nobr>1 м</nobr></li>
                            <li>новое поколение поликарбоната 4мм</li>
                            <li>двойная защита от ультрафиолета</li>
                            <li>две двери на торцах с форточками</li>
                        </ul>
                        <a href="#catalog-form" class="product-btn">Узнать стоимость</a>
                    </div>
                </div>

                <!-- БелТеплица-Мини -->
                <div class="product product5">
                    <p class="pr_title">Теплица "Гарант-Мини"</p>
                    <div class="product-img">
                        <img src="images/garant/catalog/mini.jpg" alt="">
                        <div class="count">Осталось 7 шт.</div>
                    </div>
                    <div class="desc" data-toggle="modal" data-target="#catalog-form">
                        <ul>
                            <li>
                                <nobr>ширина – 1,66 м,</nobr> <nobr>высота – 1,64 м,</nobr> длину выбираете сами <nobr>(от 4 до 12 м)</nobr>
                            </li>
                            <li>
                                стальная труба оцинкована полностью с наружной и с внутренней стороны <nobr>20х20мм</nobr>
                            </li>
                            <li>расстояние между дугами <nobr>1 м</nobr></li>
                            <li>новое поколение поликарбоната 4мм</li>
                            <li>двойная защита от ультрафиолета</li>
                            <li>две двери на торцах с форточками</li>
                        </ul>
                        <a href="#catalog-form" class="product-btn">Узнать стоимость</a>
                    </div>
                </div>

                <!-- БелТеплица-Капелька -->
                <div class="product product6">
                    <p class="pr_title">Теплица "Гарант-Капелька"</p>
                    <div class="product-img">
                        <img src="images/garant/catalog/kapelka.jpg" alt="">
                        <div class="count">Осталось 2 шт.</div>
                    </div>
                    <div class="desc" data-toggle="modal" data-target="#catalog-form">
                        <ul>
                            <li>
                                <nobr>ширина – 3 м,</nobr> <nobr>высота – 2 м,</nobr> длину выбираете сами <nobr>(от 4 до 12 м)</nobr>
                            </li>
                            <li>
                                стальная труба оцинкована полностью с наружной и с внутренней стороны <nobr>25х25мм</nobr>
                            </li>
                            <li>расстояние между дугами <nobr>0,65 м</nobr></li>
                            <li>новое поколение поликарбоната 4мм</li>
                            <li>двойная защита от ультрафиолета</li>
                            <li>две двери на торцах с форточками</li>
                        </ul>
                        <a href="#catalog-form" class="product-btn">Узнать стоимость</a>
                    </div>
                </div>

                <!-- БелТеплица-Триумф -->
                
                <div class="product horizont">
                    <p class="pr_title">Теплица "Гарант-Кабриолет"</p>
                    <div class="leftPart">
                        <div class="product-img">
                            <img src="images/garant/catalog/cabriolet.jpg " alt="">
                            <div class="desc" data-toggle="modal" data-target="#catalog-form">
                                <ul>
                                    <li>ширина – 3 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)</li>
                                    <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 40х20мм + 20x20мм</li>
                                    <li>расстояние между дугами 1 м</li>
                                    <li>новое поколение поликарбоната 4мм</li>
                                    <li>двойная защита от ультрафиолета</li>
                                    <li>две двери на торцах с форточками</li>
                                </ul>
                            </div>
                            <!-- <img src="images/sticker_1000.png" alt="" class="sale-sticker"> -->
                        </div>
                    </div>
                    <div class="rightPart">
                        <form action="#" class="catal_form">
                            <div class="pr_gr">
                                <label for="">Выберите длину теплицы:</label>
                                <select class="catal_width" name="width">
                                    <option value="Не выбрано" disabled selected>Длина теплицы</option>
                                    <option value="4м">4 м.</option>
                                    <option value="6м">6 м.</option>
                                    <option value="8м">8 м.</option>
                                    <option value="10м">10 м.</option>
                                </select>
                            </div>
                            <div class="pr_gr">
                                <label for="">Введите регион доставки:</label>
                                <input type="text" class="region" name="region" placeholder="Регион доставки">
                            </div>
                            <div class="pr_gr">
                                <label for="">Введите номер телефона:</label>
                                <input type="text" class="catal_phone phone_mask" name="posPhone" placeholder="+7 (***) ***-**-**">
                            </div>
                            <input type="hidden" name="type" value="">
                            <input type="hidden" name="utm_term" value="">
                            <input type="hidden" name="utm_source" value="">
                            <input type="hidden" name="utm_medium" value="">
                            <input type="hidden" name="utm_campaign" value="">
                            <input type="hidden" name="utm_content" value="">
                            <input type="submit" value="Узнать стоимость">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="catalog-mobile">
        <div class="product">
            <p class="pr_title">Теплица "Гарант-Лидер"</p>
            <a href="#" class="product-img">
                <img src="images/garant/catalog/lider.jpg" alt="">
                <div class="count">Осталось 6 шт.</div>
            </a>
            <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                <ul>
                    <li>
                        ширина&nbsp;–&nbsp;3&nbsp;м, высота&nbsp;–&nbsp;2&nbsp;м,
                        длину выбираете сами (от 4 до 12 м)
                    </li>
                    <li>Стальная труба оцинкована полностью с наружной и с внутренней стороны 20х20мм</li>
                    <li>новое поколение поликарбоната 4мм</li>
                    <li>двойная защита от ультрафиолета</li>
                    <li>две двери на торцах с форточками</li>
                </ul>
            </div>
            <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
        </div>
        <div class="product">
            <p class="pr_title">Теплица "Гарант-Лидер" (разборная)</p>
            <a href="#" class="product-img">
                <img src="images/garant/catalog/lider-razb.jpg" alt="">
                <div class="count few">Осталось 3 шт.</div>
            </a>
            <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                <ul>
                    <li>ширина – 3 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)</li>
                    <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 20х20мм</li>
                    <li>расстояние между дугами 0,67 м</li>
                    <li>новое поколение поликарбоната 4мм</li>
                    <li>двойная защита от ультрафиолета</li>
                    <li>две двери на торцах с форточками</li>
                </ul>
            </div>
            <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
        </div>
        <div class="product">
            <p class="pr_title">Теплица "Гарант-Мастер"</p>
            <a href="#" class="product-img">
                <img src="images/garant/catalog/master.jpeg" alt="">
                <div class="count">Осталось 3 шт.</div>
            </a>
            <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                <ul>
                    <li>ширина – 2,4 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)</li>
                    <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 20х20мм</li>
                    <li>расстояние между дугами 1 м</li>
                    <li>новое поколение поликарбоната 4мм</li>
                    <li>двойная защита от ультрафиолета</li>
                    <li>две двери на торцах с форточками</li>
                </ul>
            </div>
            <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
        </div>
        <div class="more collapse" id="more">
            <div class="product">
                <p class="pr_title">Теплица "Гарант-Компакт"</p>
                <a href="#" class="product-img">
                    <img src="images/garant/catalog/compact.jpg" alt="">
                    <div class="count">Осталось 10 шт.</div>
                </a>
                <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                    <ul>
                        <li>ширина – 2 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)</li>
                        <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 20х20мм</li>
                        <li>расстояние между дугами 1 м</li>
                        <li>новое поколение поликарбоната 4мм</li>
                        <li>двойная защита от ультрафиолета</li>
                        <li>две двери на торцах с форточками</li>
                    </ul>
                </div>
                <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
            </div>
            <div class="product">
                <p class="pr_title">Теплица "Гарант-Мини"</p>
                <a href="#" class="product-img">
                    <img src="images/garant/catalog/mini.jpg" alt="">
                    <div class="count">Осталось 7 шт.</div>
                </a>
                <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                    <ul>
                        <li>ширина – 1,66 м, высота – 1,64 м, длину выбираете сами (от 4 до 12 м)</li>
                        <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 20х20мм</li>
                        <li>расстояние между дугами 1 м</li>
                        <li>новое поколение поликарбоната 4мм</li>
                        <li>двойная защита от ультрафиолета</li>
                        <li>две двери на торцах с форточками</li>
                    </ul>
                </div>
                <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
            </div>
            <div class="product">
                <p class="pr_title">Теплица "Гарант-Капелька"</p>
                <a href="images/catal/kapelka1.jpg" class="product-img">
                    <img src="images/catal/kapelka1.jpg" alt="">
                    <div class="count">Осталось 23 шт.</div>
                    <!-- <div class="luchsh">от 20 300 руб.</div> -->
                </a>
                <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                    <ul>
                        <li>ширина – 3 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)</li>
                        <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 25х25мм</li>
                        <li>расстояние между дугами 0,65 м</li>
                        <li>новое поколение поликарбоната 4мм</li>
                        <li>двойная защита от ультрафиолета</li>
                        <li>две двери на торцах с форточками</li>
                    </ul>
                </div>
                <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
            </div>
            <div class="product">
                <p class="pr_title">Теплица "Гарант-Кабриолет"</p>
                <a href="#" class="product-img">
                    <img src="images/garant/catalog/cabriolet.jpg" alt="">
                </a>
                <div class="desc" data-toggle="modal" data-target="#mobile-catalog-form">
                    <ul>
                        <li>В усиленную комплектацию входят (дополнительно к базовой компл.):
                            Боковое усиление, расширенная гарантия 5 лет.
                        </li>
                        <li>ширина – 3 м, высота – 2 м, длину выбираете сами (от 4 до 12 м)</li>
                        <li>стальная труба оцинкована полностью с наружной и с внутренней стороны 40х20мм + 20x20мм</li>
                        <li>расстояние между дугами 1 м</li>
                        <li>новое поколение поликарбоната 4мм</li>
                        <li>двойная защита от ультрафиолета</li>
                        <li>две двери на торцах с форточками</li>
                    </ul>
                </div>
                <a href="#mobile-catalog-form" class="product-btn" data-toggle="modal" data-target="#mobile-catalog-form">Узнать стоимость</a>
            </div>
        </div>
        <p data-toggle="collapse" data-target="#more" class="more-btn">Смотреть больше теплиц</p>
    </div>
</section>
<div id="catalog-form" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="catal_form">
                    <div class="pr_gr">
                        <label for="">Выберите длину теплицы:</label>
                        <select class="catal_width" name="width">
                            <option value="Не выбрано" disabled selected>Длина теплицы</option>
                            <option value="4м">4 м.</option>
                            <option value="6м">6 м.</option>
                            <option value="8м">8 м.</option>
                            <option value="10м">10 м.</option>
                        </select>
                    </div>
                    <div class="pr_gr">
                        <label for="">Введите регион доставки:</label>
                        <input type="text" class="region" name="region" placeholder="Регион доставки">
                    </div>
                    <div class="pr_gr">
                        <label for="">Введите номер телефона:</label>
                        <input type="text" class="catal_phone phone_mask" name="posPhone" placeholder="+7 (***) ***-**-**">
                    </div>
                    <input type="hidden" name="type" value="">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" value="Узнать стоимость">
                </form>
            </div>
        </div>
    </div>
</div>
<div id="mobile-catalog-form" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="catal_form">
                    <div class="pr_gr">
                        <label for="">Выберите длину теплицы:</label>
                        <select class="catal_width" name="width">
                            <option value="Не выбрано" disabled selected>Длина теплицы</option>
                            <option value="4м">4 м.</option>
                            <option value="6м">6 м.</option>
                            <option value="8м">8 м.</option>
                            <option value="10м">10 м.</option>
                        </select>
                    </div>
                    <div class="pr_gr">
                        <label for="">Введите регион доставки:</label>
                        <input type="text" class="region" name="region" placeholder="Регион доставки">
                    </div>
                    <div class="pr_gr">
                        <label for="">Введите номер телефона:</label>
                        <input type="text" class="catal_phone phone_mask" name="posPhone" placeholder="+7 (***) ***-**-**">
                    </div>
                    <input type="hidden" name="type" value="">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="submit" value="Узнать стоимость">
                </form>
            </div>
        </div>
    </div>
</div>

<div id="mobile-modal-carcas" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="gost_form-mob">
                <p class="mobile-title">"Теплица ГОСТ" с усиленным каркасом</p>
                <div class="gr">
                    <select name="width">
                        <option value="Не выбрано" disabled selected>Длина теплицы</option>
                        <option value="4м">4 м.</option>
                        <option value="6м">6 м.</option>
                        <option value="8м">8 м.</option>
                        <option value="10м">10 м.</option>
                    </select>
                </div>
                <div class="gr">
                    <input type="text" class="region" name="region" placeholder="Регион доставки">
                    
                </div>
                <div class="gr">
                    <input type="text" name="posPhone"  class="phone_mask" placeholder="+7 (***) ***-**-**">
                    <input type="text" class="hidden" name="type" value="Заказ на новую теплицу Белтеплица-Советская">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_source" value="">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_campaign" value="">
                    <input type="hidden" name="utm_content" value="">
                </div>
                <div class="gr">
                    <input type="submit" value="Узнать стоимость">
                </div>
            </form>
        </div>
    </div>
</div>