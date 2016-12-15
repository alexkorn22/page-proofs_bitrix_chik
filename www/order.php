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
            <div class="row">
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
                                    <div class="col-md-3">
                                        <img src="http://lorempicsum.com/futurama/75/80/1" alt="">
                                    </div>
                                    <!-- DATA OF PRODUCT -->
                                    <div class="col-md-8 detail_cart_prod ">
                                        <!-- MAIN DATA -->
                                        <div class="row">
                                            <div class="col-md-7 text-left">
                                                <p class="name_product">Бюстгальтер на косточках</p>
                                            </div>
                                            <div class="col-md-5 text-right">
                                                <p class="without_discount">820 грн</p>
                                            </div>
                                        </div>
                                        <!-- ARTICLE AND DISCOUNT -->
                                        <div class="row">
                                            <div class="col-md-7 text-left">
                                                <p class="name_article">4567HP</p>
                                            </div>
                                            <div class="col-md-5 text-right">
                                                <p class="with_discount">723,35 грн</p>
                                            </div>
                                        </div>
                                        <!-- DETAIL DATA FOR ORDER -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="cart_props">
                                                    <!-- COLOR -->
                                                    <div class="row">
                                                        <div class="col-md-4 title">Цвет</div>
                                                        <div class="col-md-8 value">черный</div>
                                                    </div>
                                                    <!-- SIZE -->
                                                    <div class="row">
                                                        <div class="col-md-4 title">Размер</div>
                                                        <div class="col-md-8 value">S</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- КОЛИЧЕСТВО и редактировать заказ -->
                                            <div class="col-md-4">
                                                <div class="col-md-4 title">Количество</div>
                                                <div class="col-md-8 value">- 1 +</div>
                                                <div class="change_order">
                                                    <a href="#">
                                                        Редактировать заказ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
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
                                        <div class="row">
                                            <div class="col-md-7 title">
                                                <div class="sum">
                                                    Заказ на сумму:
                                                </div>
                                                <div class="discount">
                                                    Скидка:
                                                </div>
                                                <div class="sum_with_disc">
                                                    Итого к оплате:
                                                </div>
                                            </div>
                                            <div class="col-md-5 value">
                                                <div class="sum">
                                                    1223,00 грн
                                                </div>
                                                <div class="discount">
                                                    243,45 грн
                                                </div>
                                                <div class="sum_with_disc">
                                                    987,60 грн
                                                </div>
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
                        <div class="title_section">
                            <a href="#">1. Данные получателя</a>
                        </div>
                        <div class="data_section">
                            <!-- Фамилия -->
                            <div class="row">
                                <div class="col-md-2">
                                     <span class="title">
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
                                     <span class="title">
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
                                     <span class="title">
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
                                     <span class="title">
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
                                     <span class="title">
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
                        <div class="title_section">
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