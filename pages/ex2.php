<?php require_once './templates/header.php'?>

<div class="info">
    <hr class="excursion__hr" />
    <h2 class="info__header">По Астафьевским местам</h2>
    <hr class="excursion__hr" />
</div>

<div class="excursion-wrap">
    <main class="excursion-main">
        <div class="articles">
            <div class="article-main">
                <div class="article-heading__wrap">
                    <div class="article-slider__wrap">
                        <div class="main-slider-container">


                            <!-- Full-width images with number text -->
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/a1.png" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/a2.png" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/a3.png" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/a4.png" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/a5.png" style="width:100%">
                            </div>
                            

                            <!-- Next and previous buttons -->
                            <a class="main-prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="main-next" onclick="plusSlides(1)">&#10095;</a>

                            <!-- Image text -->
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>

                            <!-- Thumbnail images -->
                            <div class="main-slider__row">
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/a1.png" style="width:100%" onclick="currentSlide(1)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/a2.png" style="width:100%" onclick="currentSlide(2)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/a3.png" style="width:100%" onclick="currentSlide(3)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/a4.png" style="width:100%" onclick="currentSlide(4)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/a5.png" style="width:100%" onclick="currentSlide(5)" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="article-container">
                    <h3 class="article-header">По Астафьевским местам</h3>
                </div>

                <div class="article-container">
                    <p class="article-text">
                        Экскурсия познакомит вас с историей жизни и творчества знаменитого русского писателя. 
                        Вы побываете на родине Виктора Петровича Астафьева — в селе Овсянка, где посетите 
                        мемориальный комплекс: дом В.П. Астафьева и бабушкин дом. Кроме того, 
                        вы заедете на известную смотровую площадку в д. Слизнево, которая находится 
                        на краю отвесной скалы над Енисеем, где увидите красивую скульптуру, 
                        посвященную известному произведению В.П. Астафьева «Царь-Рыба»
                    </p>
                    <h3 class="article-header">Вы увидите:</h3>
                    <ul class="article-list">
                        <li class="article-list__element">Смотровая площадка "Царь-Рыба"</li>
                        <li class="article-list__element">Экскурсия в мемориальном музее В.П. Астафьева</li>
                    </ul>
                    

                    <h3 class="article-header">Что вас ожидает:</h3>
                    <p class="article-text">
                        Экскурсия познакомит вас с историей жизни и творчества знаменитого русского 
                        писателя. Вы побываете на родине Виктора Петровича Астафьева — в селе Овсянка, 
                        где посетите мемориальный комплекс: дом В.П. Астафьева и бабушкин дом. Кроме 
                        того, вы заедете на известную смотровую площадку в д. Слизнево, которая 
                        находится на краю отвесной скалы над Енисеем, где увидите красивую 
                        скульптуру, посвященную известному произведению В.П. Астафьева «Царь-Рыба».
                    </p >

                    <h4 class="article-header">Важно знать:</h4>
                    <p class="article-text">
                        <ul class="article-list">
                            <li class="article-list__element">Экскурсия подходит для детей старше 10 лет. </li>
                            <li class="article-list__element">Цены для школьных групп – по запросу.</li>
                            <li class="article-list__element">Продолжительность 3,5 часа для групп до 10 человек, 4 часа для групп от 11 чел.</li>
                            <li class="article-list__element">В понедельник в музее выходной</li>
                        </ul>
                    </p>
                    <hr class="excursion__hr" />
                </div>
            </div>
        </div>

    </main>
    <aside class="excursion-aside">
        <div class="org-sticky">
            <div class="organizer">
                <h3 class="organizer-header">Организатор</h3>
                <div class="organizer__wrap">
                    <div class="organizer-image_wrap">
                        <a href="./about#about-employes2">
                            <img class="organizer-image" src="./img/ex2.jpg" alt="" />
                        </a>
                    </div>
                    <p class="organizer-text">Ирина Н.</p>
                </div>
                <ul class="organizer-list">
                    <li class="organizer-element">Длительность: 4 часа</li>
                    <li class="organizer-element">Индивидуальная экскурсия</li>
                    <li class="organizer-element">На русском языке</li>
                    <li class="organizer-element">Цена: 1500 руб. с человека</li>
                </ul>

                
                <hr class="excursion__hr" />
                <div class="article-ymap__container">
                    <div id="ymap" class="ymap"></div>
                </div>
            </div>
            
            <div class="container">
                <form class="article-form" method="post">
                    <label for="fname">Имя</label>
                    <input class="article-form__input" type="text" id="fname" name="firstname" placeholder="Ваше имя" required>

                    <label for="lname">Телефон</label>
                    <input class="article-form__input" type="tel" id="lname" name="tel" placeholder="Ваш телефон" required>

                    <input type="submit" value="Заказать экскурсию" class="article-btn" id="article-btn">
                </form>
            </div>

        </div>
    </aside>
    <script src="./js/maps.js"></script>
    <script src="./js/mainSliderScript.js"></script>
    <script>
        window.onload = function() {
            // pedestrian = пешая маршрутизация
            // auto = автомобиль
            routing_Mode = 'auto';
            points = [
                [55.96169730336052,92.57019736278082],    // овсянка
                [55.96023072847754,92.6123695287565]      // царь рыба
            ];
            ymaps.ready(init);
        }
    </script>
</div>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->