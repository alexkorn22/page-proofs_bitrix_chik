<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chikiss</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Для слайдера -->
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/slick.css"/>

    <link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="art_body">

<section id="main_top_menu">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top top_menu" role="navigation">
            <div class="container">
                <ul class="nav navbar-nav topmenu_ul">
                    <li class="item"><a href="#" class="item_main">Бренды</a></li> <!-- class="active_top_menu" -->
                    <li class="item dropdown">
                        <a href="<?='/catalog.php'?>" class="item_main">Женщины</a>
                        <!-- Выпадающее меню -->
                        <div class="nav_lvl_1">
                            <div class="container nav_lvl_1_container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Бюстгальтеры</a></li>
                                            <li><a href="#">Майки, футболки, блузки</a></li>
                                            <li><a href="#">Пижамы и домашняя одежда</a></li>
                                            <li><a href="#">Корректирующее белье</a></li>
                                            <li><a href="#">Купальники и пляжная одежда</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Для беременных и кормящих</a></li>
                                            <li><a href="#">Термобелье</a></li>
                                            <li><a href="#">Носки, колготы, чулки</a></li>
                                            <li><a href="#">Аксессуары</a></li>
                                            <li><a href="#">Трусы</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Тапки домашние</a></li>
                                            <li><a href="#">Новинки</a></li>
                                            <li><a href="#">Распродажа</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3  base_top_menu dropdown">
                                        <a href="javascript:void(0)" class="title dropdown-toggle" data-toggle="dropdown"
                                           onclick="OnClickBaseTopMenu(this)">
                                            База
                                            <span class="title_icon fa fa-angle-right">
                                            </span>
                                        </a>
                                        <ul class="list-unstyled hidden dropmenu_base">
                                            <li><a href="#">Трусы</a></li>
                                            <li><a href="#">Бюстгальтеры</a></li>
                                            <li><a href="#">Майки, футболки</a></li>
                                            <li><a href="#">Носки, колготы, чулки</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item"><a href="#" class="item_main">Мужчины</a></li>
                    <li class="item"><a href="#" class="item_main">Дети</a></li>
                    <li class="item"><a href="#" class="item_main">Новинки</a></li>
                    <li class="item sale"><a href="#" class="item_main sale">Распродажа%</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right basket_topmenu">
                    <li class="item_liked">
                        <a href="#" class="liked">
                            <span class="icon-heart_1"></span>
                            <span class="counter one_digit">7</span>
                        </a>
                    </li>
                    <li class="item_cart">
                        <a href="#" class="cart">
                            <span class="icon-cart_1"></span>
                            <span class="counter two_digit">25</span>
                        </a>
                    </li>
                    <li class="item">
                        <div class="sum">
                            <p>
                                на сумму 24 500 грн
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</section>

<section id="main_header">
    <div class="container">
        <div class="row header_logo">
            <div class="col-md-3">
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="Логотип">
                </a>
            </div>
            <div class="col-md-3 search">
                <button class="btn btn_main icon" type="submit"><i class="icon-search_0411" aria-hidden="true"></i></button>
                <input type="search" class="form-control field_search" placeholder="Поиск...">
            </div>
            <div class="col-md-3 phone">
                <div class="col_first">
                    <span>(066)</span> <span class="font_bold">773-23-23</span>&nbsp;&nbsp;&nbsp;<span> (066) </span><span class="font_bold">773-23-23</span></span>
                </div>
                <div class="col_second">
                    <span>(066)</span> <span class="font_bold">773-23-23</span>&nbsp;&nbsp;&nbsp;<span> (066) </span><span class="font_bold">773-23-23</span></span>
                </div>
            </div>
            <div class="col-md-3 user_data">
                <div class="data_user">
                    <div class="user_text">
                        <a href="#">Вход </a> |
                        <a href="#"> Регистрация </a>
                    </div>
                    <a class="btn btn_main icon" href="#"><i class="icon-user_0411" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="main_second_menu">
    <nav class="navbar navbar-default main_second_menu" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <ul class="nav navbar-nav">
                        <li class="item"><a href="#">О магазине</a></li>
                        <li class="active item"><a href="#">Оплата</a>
                        <li class="item"><a href="#">Доставка</a></li>
                        <li class="item"><a href="#">Размерная сетка</a></li>
                        <li class="item"><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>

<section id="advantages">

    <div class="container">
        <div class="row row_advantages">
            <div class="col-md-4 delivery text-right">
                <div class="row">
                    <div class="col-md-offset-4 col-md-8">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-10 text">
                                    <p>Бесплатная доставка</p>
                                    <p>при заказе от 1000 грн</p>
                                </div>
                                <div class="col-md-2 adv_img">
                                    <span class="icon-delivery_1"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2 exchange text-right">
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">
                            <div class="row">
                                <div class="col-md-9 text">
                                    <p>Беспроблемный</p>
                                    <p>обмен</p>
                                </div>
                                <div class="col-md-3 adv_img">
                                    <span class="icon-exchange_1"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-2 return text-right">
                <div class="col-md-12">
                    <a href="#">
                        <div class="row">
                            <div class="col-md-9 text">
                                <p>Возврат</p>
                                <p>за наш счет</p>
                            </div>
                            <div class="col-md-3 adv_img">
                                <span class="icon-return_1"></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<section id="content">