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
                        <div class="row">
                            <div class="col-md-5">
                                <div class="title_section_main no_auth">Оформление заказа</div>
                                <!-- ИМЯ ПОЛЬЗОВАТЕЛЯ -->
                                <!-- <div class="name_user">Гость</div> -->
                            </div>
                            <div class="col-md-7 buttons">
                                <button type="submit" class="btn btn_main">Оформить как гость</button>
                                <button type="submit" class="btn btn_addit">Войти</button>
                            </div>
                        </div>
                    </div>
                    <!-- Секция данных покупателя -->
                    <div class="section_checkout open_section" id="data_order_customer">
                        <div class="title_section title">
                            <span>1. Данные покупателя</span>
                        </div>
                        <div class="data_section" >
                            <!-- Фамилия -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
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
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
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
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
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
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Телефон
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" name="" id="form_tel_1" placeholder="+38 (0__) ___-__-__">
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="row input_item has_succes">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            E-mail
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8 block_input">
                                    <input type="email" class="form-control" name="">
                                    <span class="fa fa-check form-control-feedback"></span>
                                </div>
                                <div class="col-md-2 block_next_step">
                                    <a href="#" class="next_step">
                                        > Далее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Секция данных получателя -->
                    <div class="section_checkout open_section " id="data_order_addressee">
                        <div class="title_section title">
                            <span>2. Данные получателя</span>
                        </div>
                        <div class="data_section" >
                            <!-- Фамилия -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Фамилия
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8 block_input">
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <!-- Имя -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Имя
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8 block_input">
                                    <input type="text" class="form-control" name="">
                                </div>
                            </div>
                            <!-- Отчество -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
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
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Телефон
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" name="" id="form_tel_2" placeholder="+38 (0__) ___-__-__">
                                </div>
                            </div>
                            <!-- E-mail -->
                            <div class="row input_item has_error">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            E-mail
                                        </span>
                                    <span class="important_title">*</span>
                                </div>
                                <div class="col-md-8 block_input">
                                    <input type="email" class="form-control" name="">
                                    <span class="fa fa-close form-control-feedback"></span>
                                </div>
                                <div class="col-md-2 block_next_step">
                                    <a href="#" class="next_step">
                                        > Далее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Секция данных доставки -->
                    <div class="section_checkout open_section " id="data_order_delivery">
                        <div class="title_section title">
                            <span>3. Служба доставки</span>
                        </div>
                        <div class="data_section" >
                            <div class="block_checkboxes">
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_1_1" name="delivery">
                                      <label for="value_1_1">Новая почта</label>
                                </div>
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_1_2" name="delivery">
                                    <label for="value_1_2">Деливери</label>
                                </div>
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_1_3" name="delivery">
                                    <label for="value_1_3">Интайм</label>
                                </div>
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_1_4" name="delivery">
                                    <label for="value_1_4">Мист-експресс</label>
                                </div>
                            </div>
                            <!-- Вид доставки -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data small_letter_spacing">
                                            Вид доставки
                                        </span>
                                </div>
                                <div class="col-md-8">
                                    <select class="turnintodropdown" id = 'type_delivery_ord'>
                                        <option selected="selected">До склада</option>
                                        <option>До двери</option>
                                    </select> <!-- .img_arrow_bottom -->
                                </div>
                            </div>
                            <!-- Город -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Город
                                        </span>
                                </div>
                                <div class="col-md-8 block_input">
                                    <input type="text" class="form-control img_arrow_right" name="">
                                    <span class="fa fa-close form-control-feedback"></span>
                                </div>
                            </div>
                            <!-- Склад -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            № Склада
                                        </span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control img_arrow_right" name="">
                                </div>
                            </div>
                            <!-- Адрес -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Адрес
                                        </span>
                                </div>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control" name="">
                                </div>
                            </div>
                            <!-- Комментарий -->
                            <div class="row input_item">
                                <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Комментарий
                                        </span>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="">
                                </div>
                                <div class="col-md-2 block_next_step">
                                    <a href="#" class="next_step">
                                        > Далее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Секция метод оплаты -->
                    <div class="section_checkout open_section " id="data_order_payments">
                        <div class="title_section title">
                            <span>4. Метод оплаты</span>
                        </div>
                        <div class="data_section" >
                            <div class="block_checkboxes">
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_2_1" name="delivery">
                                    <label for="value_2_1">Наложеный платеж</label>
                                </div>
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_2_2" name="delivery">
                                    <label for="value_2_2">На карту приват</label>
                                </div>
                                <div class="div_checkbox">
                                    <input type="radio" class="checkbox" id="value_2_3" name="delivery">
                                    <label for="value_2_3">Безналичный расчет</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Итоги -->
                    <div class="order_results">
                        <div class="row">
                            <div class="col-md-12 title">
                                5. Итог
                            </div>
                        </div>
                        <!-- Заказ на сумму -->
                        <div class="row">
                            <div class="col-md-8">Заказ на сумму:</div>
                            <div class="col-md-4 text-left">1234,00 грн</div>
                        </div>
                        <!-- Скидка -->
                        <div class="row discount">
                            <div class="col-md-8">Скидка:</div>
                            <div class="col-md-4 text-left">234,45 грн</div>
                        </div>
                        <!-- Итого к оплате -->
                        <div class="row sum_with_disc">
                            <div class="col-md-8">Итого к оплате:</div>
                            <div class="col-md-4 text-left">987,56 грн</div>
                        </div>
                    </div>
                    <!-- Итоги КНОПКИ -->
                    <div class="button_order">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <p>*Подтверждая заказ, вы соглашаетесь</p>
                                <p>с <a href="#">пользовательским соглашением</a></p>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" class="btn btn_main">Оформить заказ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Выпадающее окно корзины -->
    <div id="basket_list" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="loader">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="block_load text-center hidden">
                                <img src="img/load.gif" alt="Ожидание загрузки">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data_cart ">
                    <div class="title">
                        Корзина
                    </div>
                    <hr>
                    <div class="addit_product">
                        <div class="row">
                            <div class="col-md-12">
                                <span>Также в вашей корзине</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart_products cart_products_scroll">
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
                                            <p class="name_product">
                                                <a href="#">Бюстгальтер на косточках</a>
                                            </p>
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
                        <!-- ТОВАР 3 -->
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
                                                       data-field="quant[3]"
                                                    >
                                                        <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                                    </a>

                                                    <input type="text"  name="quant[3]"
                                                           class="input-number text-center"
                                                           value="1" min="1" max="10"
                                                           readonly=true
                                                    >
                                                    <a href="#" class="btn_small_add btn-number"
                                                       data-type="plus"
                                                       data-field="quant[3]"
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
                    <div class="row ">
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn btn_addit">Купить в 1 клик</button>
                        </div>
                        <div class="col-md-6 text-left">
                            <button type="button" class="btn btn_main">Оформить заказ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно окно авторизации -->
    <div id="auth_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal_container">
                    <div class="title_modal">
                        <div class="row">
                            <div class="col-md-10">
                                Авторизация пользователя
                            </div>
                            <div class="col-md-2 text-right">
                                <a class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="icon-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="modal_content">
                        <div class="row">
                            <!-- Начало Блок авторизации  -->
                            <div class="col-md-5">
                                <div class="title_block">
                                    Авторизация
                                </div>
                                <div class="form_auth">
                                    <form  action="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Пароль</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                        <div class="buttons">
                                            <button type="submit" class="btn btn_main">Вход</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Конец Блок авторизации  -->
                            <!-- Begin Registration -->
                            <div class="col-md-offset-1 col-md-6">
                                <div class="title_block">
                                    Регистрация
                                </div>
                                <div class="descr_registration">
                                    <p>Регистрация позволит Вам:</p>
                                    <p>- Воспользоваться преимуществами более быстрого процесса оплаты</p>
                                    <p>- Повторно использовать данные при оформлении заказа</p>
                                    <p>- Проверять статус заказов и историю</p>
                                    <p>- Первым получать информацию об акциях и скидках</p>
                                </div>
                                <button type="submit" class="btn btn_main">Регистрация</button>
                            </div>
                            <!-- End registratiom -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="registration_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal_container">
                    <div class="title_modal">
                        <div class="row">
                            <div class="col-md-10">
                                Регистрация пользователя
                            </div>
                            <div class="col-md-2 text-right">
                                <a class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="icon-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="modal_content">
                        <div class="row">
                            <!-- Начало Блок  -->
                            <div class="col-md-12">
                                <div class="form_auth">
                                    <form  action="">
                                        <div class="form-group">
                                            <label for="registration_modal_input_1">Имя <span>*</span></label>
                                            <input type="text" class="form-control" id="registration_modal_input_1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="registration_modal_input_2">Фамилия <span>*</span></label>
                                            <input type="text" class="form-control" id="registration_modal_input_2" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="registration_modal_input_3">Логин <span>*</span></label>
                                            <input type="text" class="form-control" id="registration_modal_input_3" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Пароль</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Подтверждение пароля</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="registration_modal_input">E-mail</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                                        </div>

                                        <div class="buttons text-center">
                                            <button type="submit" class="btn btn_main">Зарегистрироваться</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Конец Блок  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>