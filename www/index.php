<? include($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

    <div class="container">
        <!-- Слайдер -->
        <div id="myCarousel" class="carousel slide" data-interval="5000" data-pause="hover" data-ride="carousel">
            <!-- Индикаторы для карусели -->
            <ol class="carousel-indicators">
                <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Слайды карусели -->
            <div class="carousel-inner">
                <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
                <div class="active item">
                    <img src="img/slider/slide-1.jpg" alt="">
                </div>
                <!-- Слайд №2 -->
                <div class="item">
                    <img src="img/slider/slide-2.jpg" alt="">
                </div>
                <!-- Слайд №3 -->
                <div class="item">
                    <img src="img/slider/slide-3.jpg" alt="">
                </div>
            </div>
            <!-- Навигация для карусели -->
            <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="icon-left-arrow_thin"></span>
            </a>
            <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="icon-right-arrow_thin"></span>
            </a>
        </div>
        <!-- Преимущества -->
        <div class="row goods_main">
            <div class="col-md-4">
                <img class="img-responsive" src="img/goods/2.jpg" alt="">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/goods/2.jpg" alt="">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/goods/3.jpg" alt="">
            </div>
        </div>
        <!-- Текст о магазине -->
        <div class="main_text">
            <div class="row">
                <div class="col-md-12">
                    <h1 class = "text-center">Нижнее бельё в Украине</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu.  Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h2 class="text-left">
                        Вам на выбор мы предлагаем:
                    </h2>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-6">
                            <ul>
                                <li>
                                    100 торговых марок
                                </li>
                                <li>
                                    более 9000 моделей
                                </li>
                                <li>
                                    Размеры XS-XXL
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h2 class="text-right">
                        5 веских причин сделать покупку в Chikiss:
                    </h2>
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <ul>
                                <li>
                                    Доставка в любой уголок Украины
                                </li>
                                <li>
                                    Все вещи в наличии
                                </li>
                                <li>
                                    Консультации по подбору
                                </li>
                                <li>
                                    Предусмотрен возврат товаров
                                </li>
                                <li>
                                    Любим и радуем своих клиентов
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>