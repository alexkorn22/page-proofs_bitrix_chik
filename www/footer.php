</section>

<section id="footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 contacts">
                    <p class="title_footer text_with_margin_bottom">Контакты</p>
                    <p>(066) 773-23-23 (077) 949-14-15</p>
                    <p class="text_with_margin_bottom">(050) 823-43-52 (044) 244-15-15</p>
                    <p class="text_with_margin_bottom">info@chikiss.com.ua</p>
                    <p class="title_footer">График работы</p>
                    <p>пн-пт 09:00 - 18:00</p>
                </div>
                <div class="col-md-offset-1 col-md-3 info_footer">
                    <p class="title_footer text_with_margin_bottom">Информация</p>
                    <ul class="list-unstyled">
                        <li class="item_first"><a href="#">Оплата</a></li>
                        <li class="item"><a href="#">Доставка</a></li>
                        <li class="item"><a href="#">Возврат и обмен</a></li>
                        <li class="item"><a href="#">Как подобрать товар</a></li>
                        <li class="item"><a href="#">Как подобрать размер?</a></li>
                        <li class="item"><a href="#">Сотрудничество</a></li>
                        <li class="item"><a href="#">Политика конфиденциальности</a></li>
                    </ul>
                </div>
                <div class="col-md-offset-2 col-md-3 text-right social">
                    <a href="#" class=""><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href="#" class=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#" class=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
</section>

<section id="feedback">
    <!--Кнопка обратной связи-->
    <a href="#feedbackModalBox" id="popup_toggle" onclick="return false;" style="z-index: 1;" data-toggle="modal">
        <div class="circlephone" style="transform-origin: center;"></div>
        <div class="circle-fill" style="transform-origin: center;"></div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div>
        </div>
    </a>
    <!--Всплывающее окно обратная связь -->
    <div id="feedbackModalBox" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Заголовок модального окна
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Заголовок модального окна</h4>
                </div>-->

                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <img src="img/call-back-icon.jpg" alt="Обратный звонок">
                            </div>
                            <div class="col-md-9">
                                <p class="title">Обратный звонок</p>
                                <p>
                                    Дорогие посетители!
                                    <br>
                                    Хотите получить консультацию по любому интересующему Вас вопросу или сделать заказ
                                    <br>
                                    по телефону? Закажите обратный звонок
                                    <br>
                                    Укажите свой номер и мы позвоним вам в указанное время
                                </p>
                            </div>
                            <div class="col-md-1">
                                <a type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="icon-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <form action="" class="form-horizontal">
                            <div class="form_group">
                                <div class="form-group">
                                    <div class="col-md-2 label_feedback">Ваше имя:</div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="feedback_name" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-2 label_feedback">Телефон:</div>
                                    <div class="col-md-8">
                                        <input type="tel" class="form-control" id="feedback_tel" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-2 label_feedback">Комментарий:</div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" id="feedback_comment"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-offset-2 col-md-8">
                                        <button type="submit" class="btn btn-default btn_requestcall">Заказать звонок</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<!--Подключаем библиотеку Jquery UI-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Библиотека слайдера -->
<script src="js/slick.min.js"></script>
<!-- Библиотека зумер -->
<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
<!--Подключаем собственные скрипты -->
<script src="js/script.js"></script>

</body>
</html>