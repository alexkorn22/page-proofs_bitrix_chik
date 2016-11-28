<? include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>
    <div class="container">
        <div class="row catalog">
            <!-- ФИЛЬТРА -->
            <div class="col-md-3">
                <div class="filters">
                    <form action="" method="post">
                        <div class="row">
                            <!-- ТИП ЧАШКИ -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Тип чашки</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_1">
                                        <label for="value_1_1">Формированная чашка</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_2">
                                        <label for="value_1_2">Пуш-ап</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_3">
                                        <label for="value_1_3">Аплиф (приподнимающий)</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_4">
                                        <label for="value_1_4">Поддерживающий</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_5">
                                        <label for="value_1_5">Винг-кап (уплотненный)</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_6">
                                        <label for="value_1_6">Жэлли пэд</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_1_7">
                                        <label for="value_1_7">Магический пуш-ап</label>
                                    </div>
                                </div>
                            </div>
                            <!-- РАЗМЕР -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Размер</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_1">
                                        <label for="value_2_1">65O</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_2">
                                        <label for="value_2_2">70A</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_3">
                                        <label for="value_2_3">70B</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_4">
                                        <label for="value_2_4">70C</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_5">
                                        <label for="value_2_5">75A</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_6">
                                        <label for="value_2_6">75B</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_2_7">
                                        <label for="value_2_7">75C</label>
                                    </div>
                                </div>
                            </div>
                            <!-- ЦВЕТ -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Цвет</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox_img">
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_1">
                                        <label for="value_3_1"
                                               style="background-image: url('img/colors/1.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_2">
                                        <label for="value_3_2"
                                               style="background-image: url('img/colors/2.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_3">
                                        <label for="value_3_3"
                                               style="background-image: url('img/colors/3.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_4">
                                        <label for="value_3_4"
                                               style="background-image: url('img/colors/4.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_5">
                                        <label for="value_3_5"
                                               style="background-image: url('img/colors/5.jpg')"></label>
                                    </div>
                                    <div class="div_checkbox_img">
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_6">
                                        <label for="value_3_6"
                                               style="background-image: url('img/colors/1.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_7">
                                        <label for="value_3_7"
                                               style="background-image: url('img/colors/2.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_8">
                                        <label for="value_3_8"
                                               style="background-image: url('img/colors/3.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_9">
                                        <label for="value_3_9"
                                               style="background-image: url('img/colors/4.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_10">
                                        <label for="value_3_10"
                                               style="background-image: url('img/colors/5.jpg')"></label>
                                    </div>
                                    <div class="div_checkbox_img">
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_11">
                                        <label for="value_3_11"
                                               style="background-image: url('img/colors/1.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_12">
                                        <label for="value_3_12"
                                               style="background-image: url('img/colors/2.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_13">
                                        <label for="value_3_13"
                                               style="background-image: url('img/colors/3.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_14">
                                        <label for="value_3_14"
                                               style="background-image: url('img/colors/4.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_15">
                                        <label for="value_3_15"
                                               style="background-image: url('img/colors/5.jpg')"></label>
                                    </div>
                                    <div class="div_checkbox_img">
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_16">
                                        <label for="value_3_16"
                                               style="background-image: url('img/colors/1.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_17">
                                        <label for="value_3_17"
                                               style="background-image: url('img/colors/2.jpg')"></label>
                                        <input type="checkbox" class="checkbox checkbox_img" id="value_3_18">
                                        <label for="value_3_18"
                                               style="background-image: url('img/colors/3.jpg')"></label>
                                    </div>
                                </div>
                            </div>
                            <!-- МАТЕРИАЛ -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Материал</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_4_1">
                                        <label for="value_4_1">Хлопок</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_4_2">
                                        <label for="value_4_2">Модал</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_4_3">
                                        <label for="value_4_3">Полиамид</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_4_4">
                                        <label for="value_4_4">Поддерживающий</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_4_5">
                                        <label for="value_4_5">Полиэстр</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_4_6">
                                        <label for="value_4_6">Вискоза</label>
                                    </div>
                                </div>
                            </div>
                            <!-- ПРОИЗВОДИТЕЛЬ -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Производитель</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_5_1">
                                        <label for="value_5_1">Atlantic</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_5_3">
                                        <label for="value_5_3">Cornette</label>
                                    </div>
                                </div>
                            </div>
                            <!-- КОЛЛЕКЦИЯ -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Коллекция</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_6_1">
                                        <label for="value_6_1">Весна-лето</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_6_2">
                                        <label for="value_6_2">Осень-зима</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_6_3">
                                        <label for="value_6_3">База</label>
                                    </div>
                                </div>
                            </div>
                            <!-- НОВИНКИ/РАСПРОДАЖИ -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Новинка/Распродажи</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_7_1">
                                        <label for="value_7_1">Новинка</label>
                                    </div>
                                    <div class="div_checkbox">
                                        <input type="checkbox" class="checkbox" id="value_7_2">
                                        <label for="value_7_2">Распродажа</label>
                                    </div>
                                </div>
                            </div>
                            <!-- ЦЕНА -->
                            <div class="filter">
                                <div class="col-md-12 filter_title">
                                    <a href="javascript:void(0)" class="" onclick="OnClickFilterTitle(this)">
                                        <span>Цена</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div class="col-md-12 filter_value">
                                    <span>
                                        Диапазон: <span id="contentSlider0"></span> грн - <span
                                            id="contentSlider1"></span> грн
                                    </span>
                                    <div id="slider"></div>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn_main btn_clear_filter">Очистить фильтр</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- СПИСОК ТОВАРОВ -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="path">
                            <span><a href="#">Каталог товаров</a> </span>
                            <i class="fa fa-angle-right"></i>
                            <span> <a href="#">Женщины</a> </span>
                            <i class="fa fa-angle-right"></i>
                            <span>Бюстгальтеры </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="category">
                            <span class="name_category">Бюстгальтеры</span>
                            <span class="count">(2347 товаров)</span>
                        </div>
                    </div>
                </div>
                <div class="row row_show_all">
                    <div class="col-md-12">
                        <div class="top_line">
                            <hr>
                        </div>
                        <div class="show_all text-right">
                            <a href="#">Показать все</a>
                        </div>
                        <div class="bottom_line">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="list_products">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="container_product">
                                <a href="product.php">
                                <div class="product">
                                    <div class="img_catalog">
                                        <img src="img/products/1.jpg" alt="Картинка"
                                             class="img-responsive center-block">
                                    </div>
                                    <div class="price text-left">
                                        <span>от </span>
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                    <div class="name_product">

                                            <span class="brand">Atlantic / </span>
                                            <span>Бюстгальтер женский для беременных и кормящих мягкая чашка</span>

                                    </div>
                                    <a href="product.php">
                                        <!--
                                        data-toggle="modal" data-target="#ModalFastViewProduct"
                                        onclick="$('.slider-nav').slick('slickGoTo',1);"
                                        -->
                                        <div class="fast_view text-center">
                                            <span>Быстрый просмотр </span>
                                            <i class="fa  fa-eye"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale_new">
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="liked">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <div class="container_product">
                                <div class="product">
                                    <div class="img_catalog">
                                        <img src="img/products/2.jpg" alt="Картинка"
                                             class="img-responsive center-block">
                                    </div>
                                    <div class="price text-left">
                                        <span>от </span>
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                    <div class="name_product">
                                        <a href="#">
                                            <span class="brand">Atlantic / </span>
                                            <span>Бюстгальтер женский для беременных и кормящих мягкая чашка</span>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="fast_view text-center">
                                            <span>Быстрый просмотр </span>
                                            <i class="fa  fa-eye"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale_new">
                                    <span class="new">New</span>
                                </div>
                                <div class="liked">
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_product">
                                <div class="product">
                                    <div class="img_catalog">
                                        <img src="img/products/1.jpg" alt="Картинка"
                                             class="img-responsive center-block">
                                    </div>
                                    <div class="price text-left">
                                        <span>от </span>
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                    <div class="name_product">
                                        <a href="#">
                                            <span class="brand">Atlantic / </span>
                                            <span>Бюстгальтер женский для беременных и кормящих мягкая чашка</span>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="fast_view text-center">
                                            <span>Быстрый просмотр </span>
                                            <i class="fa  fa-eye"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale_new">
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="liked">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="container_product">
                                <div class="product">
                                    <div class="img_catalog">
                                        <img src="img/products/1.jpg" alt="Картинка"
                                             class="img-responsive center-block">
                                    </div>
                                    <div class="price text-left">
                                        <span>от </span>
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                    <div class="name_product">
                                        <a href="#">
                                            <span class="brand">Atlantic / </span>
                                            <span>Бюстгальтер женский для беременных и кормящих мягкая чашка</span>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="fast_view text-center">
                                            <span>Быстрый просмотр </span>
                                            <i class="fa  fa-eye"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale_new">
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="liked">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_product">
                                <div class="product">
                                    <div class="img_catalog">
                                        <img src="img/products/1.jpg" alt="Картинка"
                                             class="img-responsive center-block">
                                    </div>
                                    <div class="price text-left">
                                        <span>от </span>
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                    <div class="name_product">
                                        <a href="#">
                                            <span class="brand">Atlantic / </span>
                                            <span>Бюстгальтер женский для беременных и кормящих мягкая чашка</span>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="fast_view text-center">
                                            <span>Быстрый просмотр </span>
                                            <i class="fa  fa-eye"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale_new">
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="liked">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_product">
                                <div class="product">
                                    <div class="img_catalog">
                                        <img src="img/products/1.jpg" alt="Картинка"
                                             class="img-responsive center-block">
                                    </div>
                                    <div class="price text-left">
                                        <span>от </span>
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                    <div class="name_product">
                                        <a href="#">
                                            <span class="brand">Atlantic / </span>
                                            <span>Бюстгальтер женский для беременных и кормящих мягкая чашка</span>
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="fast_view text-center">
                                            <span>Быстрый просмотр </span>
                                            <i class="fa  fa-eye"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="sale_new">
                                    <span class="sale">Sale</span>
                                </div>
                                <div class="liked">
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row_show_all show_all_bottom">
                    <div class="col-md-12 text-center">
                        <div class="top_line">
                            <hr>
                        </div>
                        <div class="number_pages">

                            <a href="#"><div class="number_page"><span class="fa fa-angle-left"></span></div></a>
                            <a href="#"><div class="number_page">1</div></a>
                            <a href="#"><div class="number_page">2</div></a>
                            <a href="#"><div class="number_page">3</div></a>
                            <a href="#"><div class="number_page">...</div></a>
                            <a href="#"><div class="number_page"><span class="fa fa-angle-right"></span></div></a>
                        </div>
                        <div class="show_all text-right">
                            <a href="#">Показать все</a>
                        </div>
                        <div class="bottom_line">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ModalFastViewProduct" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <!--КАРТИНКИ ТОВАРА-->
                    <div class="col-md-5">
                        <div class="images">
                            <div class="full_img">
                                <div class="slider-for">
                                    <div class="item_full_img">
                                        <img src="http://lorempicsum.com/simpsons/370/400/1" alt="1">
                                    </div>
                                    <div class="item_full_img">
                                        <img src="http://lorempicsum.com/simpsons/370/400/2" alt="1">
                                    </div>
                                    <div class="item_full_img">
                                        <img src="http://lorempicsum.com/simpsons/370/400/3" alt="1">
                                    </div>
                                    <div class="item_full_img">
                                        <img src="http://lorempicsum.com/simpsons/370/400/4" alt="1">
                                    </div>
                                    <div class="item_full_img">
                                        <img src="http://lorempicsum.com/simpsons/370/400/5" alt="1">
                                    </div>
                                    <div class="item_full_img">
                                        <img src="http://lorempicsum.com/simpsons/370/400/6" alt="1">
                                    </div>
                                </div>
                            </div><!-- /.block-text -->
                            <div class="preview_img">

                                <div class="slider-nav">
                                    <div class="item_preview_img">
                                        <img src="http://lorempicsum.com/simpsons/170/170/1" alt="1">
                                    </div>
                                    <div class="item_preview_img">
                                        <img src="http://lorempicsum.com/simpsons/170/170/2" alt="2">
                                    </div>
                                    <div class="item_preview_img">
                                        <img src="http://lorempicsum.com/simpsons/170/170/3" alt="3">
                                    </div>
                                    <div class="item_preview_img">
                                        <img src="http://lorempicsum.com/simpsons/170/170/4" alt="4">
                                    </div>
                                    <div class="item_preview_img">
                                        <img src="http://lorempicsum.com/simpsons/170/170/5" alt="3">
                                    </div>
                                    <div class="item_preview_img">
                                        <img src="http://lorempicsum.com/simpsons/170/170/6" alt="3">
                                    </div>
                                </div>
                            </div><!-- /.block-media -->
                        </div>
                    </div>
                    <!--ДАННЫЕ ТОВАРА-->
                    <div class="col-md-6">
                        <div class="basic_info">
                            <div class="row">
                                <!--ОСНОВНЫЕ СВОЙСТВА -->
                                <div class="col-md-8 props_block">
                                    <h3 class="brand">Atlantic</h3>
                                    <h4 class="name_product">Бюстгальтер на косточках</h4>
                                    <!--ОСНОВНЫЕ СВОЙСТВА -->
                                    <div class="main_props">
                                        <div class="props">
                                            <span class="name_props">артикул:</span>
                                            <span class="value_props">45Н67</span>
                                        </div>
                                        <div class="props">
                                            <span class="name_props">код товара:</span>
                                            <span class="value_props">567843</span>
                                        </div>
                                    </div>
                                    <!--СОСТАВ -->
                                    <div class="props">
                                        <div class="name_props">состав:</div>
                                        <div class="value_props">76% нейлон; 16% эластан; 8% вискоза</div>
                                    </div>
                                    <!--ЦЕНА -->
                                    <div class="price">
                                        <span class="without_discount">820 грн</span>
                                        <span class="with_discount">723,35 грн</span>
                                    </div>
                                </div>
                                <!-- Наличие -->
                                <div class="col-md-4">
                                    <div class="availability "> <!-- Нет в наличие none -->
                                        <span>Есть в наличии</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr>
                                    <!--ЦВЕТ И РАЗМЕР И КОЛИЧЕСТВО-->
                                    <form action="" method="post">
                                        <!--ЦВЕТ-->
                                        <div class="colors">
                                            <div class="name_props">
                                                Цвет:
                                            </div>
                                            <div class="value_props">
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_1">
                                                <label for="color_3_1"
                                                       style="background-image: url('img/colors/1.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_2">
                                                <label for="color_3_2"
                                                       style="background-image: url('img/colors/2.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_3">
                                                <label for="color_3_3"
                                                       style="background-image: url('img/colors/3.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_4">
                                                <label for="color_3_4"
                                                       style="background-image: url('img/colors/4.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_5">
                                                <label for="color_3_5"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_6">
                                                <label for="color_3_6"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_7">
                                                <label for="color_3_7"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_8">
                                                <label for="color_3_8"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_9">
                                                <label for="color_3_9"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_10">
                                                <label for="color_3_10"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_11">
                                                <label for="color_3_11"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_12">
                                                <label for="color_3_12"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                                <input type="radio" name="color" class="checkbox checkbox_img"
                                                       id="color_3_13">
                                                <label for="color_3_13"
                                                       style="background-image: url('img/colors/5.jpg')"></label>
                                            </div>
                                        </div>
                                        <!--РАЗМЕР-->
                                        <div class="size">
                                            <div class="name_props">
                                                Размер:
                                            </div>
                                            <div class="value_size text-center">
                                                <select class="turnintodropdown">
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                </select>
                                            </div>

                                        </div>
                                        <!--КОЛИЧЕСТВО-->
                                        <div class="quantity">
                                            <div class="name_props">
                                                Количество:
                                            </div>
                                            <div class="value_quantity">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number"
                                                              disabled="disabled" data-type="minus"
                                                              data-field="quant[1]">
                                                          <span class="">-</span>
                                                      </button>
                                                  </span>
                                                    <input type="text" name="quant[1]" class="form-control input-number text-center"
                                                           value="1" min="1" max="10">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number"
                                                                data-type="plus" data-field="quant[1]">
                                                            <span class="">+</span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <!--КНОПКИ-->
                                        <div class="row buttons">
                                            <div class="col-md-5">
                                                <button type="button" class="btn btn_main buy">Добавить в корзину
                                                </button>
                                            </div>
                                            <div class="col-md-5">
                                                <button type="button" class="btn btn_addit one_click">Заказать в 1
                                                    клик
                                                </button>
                                            </div>
                                            <div class="col-md-2 liked_block">
                                                <a href="javascript:void(0)" class="liked">
                                                    <span class="fa fa-heart-o"></span>
                                                    <!-- Уже добавлен в избранное fa-heart  -->
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    <!--ОПИСАНИЕ И ХАРАКТЕРИСТИКИ-->
                                    <div class="characteristics">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#panel1">Описание</a></li>
                                            <li><a data-toggle="tab" href="#panel2">Характеристики</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="panel1" class="tab-pane fade in active">
                                                <p>
                                                    Бюстгальтер Atlantic – это отличный выбор для ценителей
                                                    качественного и комфортного нижнего белья, изготовленного по
                                                    передовым технологиям. Если Вам покажется, что это обычный
                                                    хлопчатобумажный лиф, Вы сильно ошибетесь, поскольку мы предлагаем
                                                    широкий ассортимент разных коллекций практически на любой случай и
                                                    для разных типов бюста.
                                                </p>
                                            </div>
                                            <div id="panel2" class="tab-pane fade">
                                                <p>Содержимое 2 панели...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--ИКОНКА ЗАКРЫТИЯ-->
                    <div class="col-md-1">
                        <a type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="icon-cancel"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');

?>
