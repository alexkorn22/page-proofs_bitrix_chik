<? include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

    <div class="container">
        <div id="order_page">

            <!--ПУТЬ -->
            <div class="row">
                <div class="col-md-12">
                    <div class="path">
                        <span><a href="#">Главная</a> </span>
                        <i class="fa fa-angle-right"></i>
                        <span>Оформление заказа</span>
                    </div>
                </div>
            </div>
            <!-- СОДЕРЖИМОе ЗАКАЗА -->
            <div class="row block_order">
                <!-- CART -->
                <div class="col-md-5">
                    <div class="data_cart">
                        <div class="title">
                            Корзина
                        </div>
                        <hr>
                        <div class="cart_products">
                            <!-- ТОВАР -->
                            <div class="cart_product">
                                <div class="row">
                                    <!-- IMAGE PRODUCT -->
                                    <div class="col-md-3 img_prod">
                                        <img src="https://dummyimage.com/100/ede1ed/1e27a6.jpg" alt="">
                                        <div class="liked">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- DATA OF PRODUCT -->
                                    <div class="col-md-8 detail_cart_prod ">
                                        <!-- MAIN DATA -->
                                        <div class="row">
                                            <div class="col-md-9 text-left no_horiz_padding">
                                                <p class="name_product">Бюстгальтер на косточках</p>
                                            </div>
                                            <div class="col-md-3 text-right  no_horiz_padding">
                                                <p class="without_discount">820 грн</p>
                                            </div>
                                        </div>
                                        <!-- ARTICLE AND DISCOUNT -->
                                        <div class="row">
                                            <div class="col-md-7 text-left no_horiz_padding">
                                                <p class="name_article">4567HP</p>
                                            </div>
                                            <div class="col-md-5 text-right no_horiz_padding">
                                                <p class="with_discount">723,35 грн</p>
                                            </div>
                                        </div>
                                        <!-- DETAIL DATA FOR ORDER -->
                                        <div class="row">
                                            <div class="col-md-7 no_horiz_padding">
                                                <div class="cart_props">
                                                    <!-- COLOR -->
                                                    <div class="row">
                                                        <div class="col-md-3 title_prop">Цвет</div>
                                                        <div class="col-md-8 value">черный</div>
                                                    </div>
                                                    <!-- SIZE -->
                                                    <div class="row">
                                                        <div class="col-md-3 title_prop">Размер</div>
                                                        <div class="col-md-8 value">S</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- КОЛИЧЕСТВО и редактировать заказ -->
                                            <div class="col-md-5 no_horiz_padding">
                                                <div class="row text-right">
                                                    <div class="col-md-6 title_prop">Количество</div>
                                                    <div class="col-md-6 value_quantity">
                                                        <a href="#" class="btn_small_del btn-number"
                                                           data-type="minus"
                                                           data-field="quant[2]"
                                                        >
                                                            <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                                        </a>

                                                        <input type="text"  name="quant[2]"
                                                               class="input-number text-center"
                                                               value="1" min="1" max="10"
                                                               readonly=true
                                                        >
                                                        <a href="#" class="btn_small_add btn-number"
                                                           data-type="plus"
                                                           data-field="quant[2]"
                                                        >
                                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row text-right">
                                                    <div class="col-md-12">
                                                        <div class="edit_order">
                                                            <a href="#">
                                                                Редактировать заказ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#" class="btn_small_del">
                                            <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- ТОВАР 2 -->
                            <div class="cart_product">
                                <div class="row">
                                    <!-- IMAGE PRODUCT -->
                                    <div class="col-md-3 img_prod">
                                        <img src="https://dummyimage.com/100/ede1ed/1e27a6.jpg" alt="">
                                        <div class="liked">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    <!-- DATA OF PRODUCT -->
                                    <div class="col-md-8 detail_cart_prod ">
                                        <!-- MAIN DATA -->
                                        <div class="row">
                                            <div class="col-md-9 text-left no_horiz_padding">
                                                <p class="name_product">Бюстгальтер на косточках</p>
                                            </div>
                                            <div class="col-md-3 text-right  no_horiz_padding">
                                                <p class="without_discount">820 грн</p>
                                            </div>
                                        </div>
                                        <!-- ARTICLE AND DISCOUNT -->
                                        <div class="row">
                                            <div class="col-md-7 text-left no_horiz_padding">
                                                <p class="name_article">4567HP</p>
                                            </div>
                                            <div class="col-md-5 text-right no_horiz_padding">
                                                <p class="with_discount">723,35 грн</p>
                                            </div>
                                        </div>
                                        <!-- DETAIL DATA FOR ORDER -->
                                        <div class="row">
                                            <div class="col-md-7 no_horiz_padding">
                                                <div class="cart_props">
                                                    <!-- COLOR -->
                                                    <div class="row">
                                                        <div class="col-md-3 title_prop">Цвет</div>
                                                        <div class="col-md-8 value">черный</div>
                                                    </div>
                                                    <!-- SIZE -->
                                                    <div class="row">
                                                        <div class="col-md-3 title_prop">Размер</div>
                                                        <div class="col-md-8 value">S</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- КОЛИЧЕСТВО и редактировать заказ -->
                                            <div class="col-md-5 no_horiz_padding">
                                                <div class="row text-right">
                                                    <div class="col-md-6 title_prop">Количество</div>
                                                    <div class="col-md-6 value_quantity">
                                                        <a href="#" class="btn_small_del btn-number"
                                                           data-type="minus"
                                                           data-field="quant[1]"
                                                        >
                                                            <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                                        </a>

                                                        <input type="text"  name="quant[1]"
                                                               class="input-number text-center"
                                                               value="1" min="1" max="10"
                                                               readonly=true
                                                        >
                                                        <a href="#" class="btn_small_add btn-number"
                                                           data-type="plus"
                                                           data-field="quant[1]"
                                                        >
                                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row text-right">
                                                    <div class="col-md-12">
                                                        <div class="edit_order">
                                                            <a href="#">
                                                                Редактировать заказ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="#" class="btn_small_del">
                                            <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- ИТОГИ -->
                            <div class="results">
                                <div class="row">
                                    <div class="col-md-5 cart_count">
                                        Товаров в корзине 4
                                    </div>
                                    <div class="col-md-7 text-right">
                                        <div class="row sum">
                                            <div class="col-md-6 no_horiz_padding">
                                                Заказ на сумму:
                                            </div>
                                            <div class="col-md-5 ">
                                                1223,00 грн
                                            </div>
                                        </div>
                                        <div class="row discount">
                                            <div class="col-md-6 no_horiz_padding">
                                                Скидка:
                                            </div>
                                            <div class="col-md-5 ">
                                                243,45 грн
                                            </div>
                                        </div>
                                        <div class="row sum_with_disc">
                                            <div class="col-md-6 no_horiz_padding">
                                                Итого к оплате:
                                            </div>
                                            <div class="col-md-5 ">
                                                987,60 грн
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- Заказ в 1 клик -->
                            <div class="row text-center">
                                <button type="button" class="btn btn_main">Купить в 1 клик</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DATA ORDER -->
                <div class="col-md-7">
                    <div class="main_title">
                        <span>Оформление заказа</span>
                        <button type="submit" class="btn btn_main">Оформить как гость</button>
                        <button type="submit" class="btn btn_addit">Войти</button>
                    </div>
                    <!-- Секция данных покупателя -->
                    <div class="section_checkout">
                        <div class="title_section title">
                            <a href="#">1. Данные получателя</a>
                        </div>
                        <div class="data_section">
                            <!-- Фамилия -->
                            <div class="row">
                                <div class="col-md-2">
                                     <span class="title_data">
                                            Фамилия
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <!-- Имя -->
                            <div class="row">
                                <div class="col-md-2">
                                     <span class="title_data">
                                            Имя
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <!-- Отчество -->
                            <div class="row">
                                <div class="col-md-2">
                                     <span class="title_data">
                                            Отчество
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <!-- Телефон -->
                            <div class="row">
                                <div class="col-md-2">
                                     <span class="title_data">
                                            Телефон
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" name="">
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="row">
                                <div class="col-md-2">
                                     <span class="title_data">
                                            E-mail
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Итоги -->
                    <div class="section_checkout">
                        <div class="title_section title">
                            >5. Итог
                        </div>
                        <div class="data_section">
                            <!-- Заказ на сумму -->
                            <!-- Скикда -->
                            <!-- Итого к оплате -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>