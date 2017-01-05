<? include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

    <div class="container">
        <div id="profile_user">

            <div class="row">
                <div class="col-md-3 block_left">
                    <!-- Навигация -->
                    <ul class="nav nav-pills nav-stacked" role="tablist">
                        <li class="active"><a href="#data_user" aria-controls="data_user" role="tab" data-toggle="tab">Мои данные</a></li>
                        <li><a href="#profile_order" aria-controls="profile_order" role="tab" data-toggle="tab">Мои заказы</a></li>
                    </ul>
                    <hr>
                    <div class="block_link">
                        <a href="#">Перейти в корзину (5)</a>
                    </div>
                    <div class="block_link">
                        <a href="#">Перейти в избранное (27)</a>
                    </div>
                    <div class="block_banner">
                        <a href="#">
                            <img src="img/banner_profile.jpg" alt="" class="">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 block_right">
                    <!--ПУТЬ -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="path">
                                <span><a href="#">Главная</a> </span>
                                <i class="fa fa-angle-right"></i>
                                <span> <a href="#">Личный кабинет</a> </span>
                                <i class="fa fa-angle-right"></i>
                                <span>Мои данные</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 welcome">
                            Здравствуйте, Петр!
                        </div>
                    </div>
                    <!-- Содержимое вкладок -->
                    <div class="tab-content">
                        <!-- Вкладка профиль -->
                        <div role="tabpanel" class="tab-pane active" id="data_user">
                            <!-- Личные данные -->
                            <div class="title">
                                <hr>
                                <span>Личные данные</span>
                                <hr>
                            </div>
                            <div class="data_section">
                                <!-- Фамилия -->
                                <div class="row input_item">
                                    <div class="col-md-2 block_title">
                                     <span class="title_data">
                                         Фамилия
                                     </span>
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
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="">
                                    </div>
                                </div>
                                <!-- E-mail -->
                                <div class="row input_item">
                                    <div class="col-md-2 block_title">
                                    <span class="title_data">
                                        E-mail
                                    </span>
                                    </div>
                                    <div class="col-md-8 block_input email">
                                        <span class="">petrpetrov@gmail.com</span>
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="row input_item">
                                    <div class="col-md-2 block_title">
                                    <span class="title_data">
                                        Пароль
                                    </span>
                                    </div>
                                    <div class="col-md-8 block_input">
                                        <button class="btn btn_addit" data-toggle="modal" data-target="#modal_change_password">Изменить</button>
                                    </div>

                                </div>
                                <div class="row line_in_section">
                                    <div class="col-md-10">
                                        <hr>
                                    </div>
                                </div>
                                <!-- Телефон -->
                                <div class="row input_item">
                                    <div class="col-md-2 block_title">
                                     <span class="title_data">
                                            Телефон
                                        </span>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="tel" class="form-control" name="" id="form_tel_profile" placeholder="+38 (0__) ___-__-__">
                                    </div>
                                </div>
                                <!-- День рождения -->
                                <div class="row input_item">
                                    <div class="col-md-2 block_title">
                                     <span class="title_data">
                                         Дата рождения
                                     </span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row block_birthday">
                                            <div class="col-md-3 day_birthday">
                                                <select class="turnintodropdown" id = 'day_birthday'>
                                                    <option selected="selected">День</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 month_birthday">
                                                <select class="turnintodropdown" id = 'month_birthday'>
                                                    <option selected="selected">Месяц</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3 year_birthday">
                                                <select class="turnintodropdown" id = 'year_birthday'>
                                                    <option selected="selected">Год</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Пол -->
                                <div class="row input_item">
                                    <div class="col-md-2 block_title">
                                     <span class="title_data">
                                         Пол
                                     </span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="btn-group group_btn_switch" data-toggle="buttons">
                                            <label class="btn btn-default active">
                                                <input type="radio" name="gender" id="male">Мужской
                                            </label>
                                            <label class="btn btn-default">
                                                <input type="radio" name="gender" id="female">Женский
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section_checkout">
                                <div class="title_section title">
                                    <hr>
                                    <span>Служба доставки</span>
                                    <hr>
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
                                            <select class="turnintodropdown" id = 'type_delivery_prof'>
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
                                            <input type="text" class="form-control" name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons text-center">
                                <button type="button" class="btn btn_addit">Сохранить</button>
                            </div>
                        </div>
                        <!-- Вкладка заказов -->
                        <div role="tabpanel" class="tab-pane" id="profile_order">
                            <div class="list_orders">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Дата</th>
                                        <th>Номер заказа</th>
                                        <th>Сумма</th>
                                        <th>Состояние</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>03.06.2016</td>
                                            <td>5442424</td>
                                            <td>1234,45 грн</td>
                                            <td>Выполнен</td>
                                        </tr>
                                        <tr>
                                            <td>05.06.2016</td>
                                            <td>5442424</td>
                                            <td>1234,45 грн</td>
                                            <td>В обработке</td>
                                        </tr>
                                        <tr>
                                            <td>05.06.2016</td>
                                            <td>534534</td>
                                            <td>1234,45 грн</td>
                                            <td>В работе</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_change_password" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal_container">
                    <div class="title_modal">
                        <div class="row">
                            <div class="col-md-10">
                                Смена пароля
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
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="modal_change_password_input_1">Введите старый пароль</label>
                                    <input type="password" class="form-control" id="modal_change_password_input_1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="modal_change_password_input_2">Введите новый пароль</label>
                                    <input type="password" class="form-control" id="modal_change_password_input_2" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="modal_change_password_input_3">Повторите новый пароль</label>
                                    <input type="password" class="form-control" id="modal_change_password_input_3" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-left block_buttons">
                                <button type="button" class="btn btn_main" data-dismiss="modal">Сохранить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </

<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>