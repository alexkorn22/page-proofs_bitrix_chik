<? include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

    <div class="container">
        <div id="registration">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="data_section">
                        <!-- Фамилия -->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                 <span class="title_data">
                                     Фамилия
                                 </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <!-- Имя -->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                 <span class="title_data">
                                     Имя
                                 </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <!-- Отчество -->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                 <span class="title_data">
                                     Отчество
                                 </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                        <!-- E-mail -->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                <span class="title_data">
                                    E-mail
                                </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                <span class="title_data">
                                    Пароль
                                </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="password" class="form-control" name="pass">
                            </div>
                        </div>
                        <!-- Password confirm-->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                <span class="title_data">
                                    Подтверждение пароля
                                </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="password" class="form-control" name="pass_confirm">
                            </div>
                        </div>
                        <!-- Captcha-->
                        <div class="row input_item">
                            <div class="col-md-4 block_title">
                                <span class="title_data">
                                    Слово на картинке
                                </span>
                            </div>
                            <div class="col-md-8 block_input">
                                <input type="password" class="form-control" name="pass_confirm">
                            </div>
                        </div>
                    </div>

                    <div class="row buttons">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn_main">Зарегистрироваться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>