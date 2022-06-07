<?php require_once './templates/header.php'?>

<div class="info">
    <hr class="excursion__hr" />
    <h2 class="info__header">Красноярск под покровом ночи</h2>
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
                                <img class="main-slider__img" src="./img/exjpg/c1.jpg" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/c2.jpg" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/c3.jpg" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/c4.jpg" style="width:100%">
                            </div>
                            <div class="main-slider__slide">
                                <div class="main-slider__text"></div>
                                <img class="main-slider__img" src="./img/exjpg/c5.jpeg" style="width:100%">
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
                                    <img class="main-slider__img-small demo" src="./img/exjpg/c1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/c2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/c3.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/c4.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
                                </div>
                                <div class="main-slider__column">
                                    <img class="main-slider__img-small demo" src="./img/exjpg/c5.jpeg" style="width:100%" onclick="currentSlide(5)" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>
                <div class="article-container">
                    <h3 class="article-header">Красноярск под покровом ночи</h3>
                    
                </div>

                <div class="article-container">
                    <p class="article-text">
                    Вас ждет атмосферное путешествие по Красноярску после заката, когда 
                    старинные здания, мосты и памятники нарядно подсвечены. 
                    Вы рассмотрите главные достопримечательности в новом ракурсе, 
                    услышите о прошлом города и узнаете, чем он живет и дышит сегодня. 
                    А также впечатлитесь панорамным видом на огни ночного Красноярска с 
                    часовни Святой великомученицы Параскевы Пятницы!
                    </p>

                    <h3 class="article-header">Что вас ожидает:</h3>
                    <h4 class="article-header">Красноярск сквозь века</h4>
                    <p class="article-text">
                    
                    Вы узнаете, какими были первооткрыватели Сибири, зачем они пришли в 
                    наши края и как строили будущий город Красный Яр. Услышите о нравах 
                    первых диких народностей, населявших берега Енисея, и о суровом характере 
                    местных женщин. Проследите историю города на протяжении столетий и раскроете, 
                    почему именно здесь в советское время появилось первое в стране казино. 
                    Кроме того, я обязательно расскажу о перспективах, которые открываются перед 
                    Красноярском сегодня.
                    </p >

                    <h4 class="article-header">Магия ночного Красноярска</h4>
                    <p class="article-text">
                    Красноярск славится не только богатой историей, но и любопытными 
                    достопримечательностями и живописными видами. Вы увидите переливающуюся в 
                    вечернем свете гладь могучего Енисея, посмотрите шоу поющих фонтанов на 
                    Театральной площади и оцените Вантовый и Коммунальный мосты. А еще 
                    рассмотрите Триумфальную арку и памятник командору Резанову на площади Мира, 
                    отыщете скульптуру «Лошадь белая» и посетите мемориал Победы.
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
                        <a href="./about#about-employes4">
                            <img class="organizer-image" src="./img/ex4.jpg" alt="" />
                        </a>
                    </div>
                    <p class="organizer-text">Максим Ф.</p>
                </div>
                <ul class="organizer-list">
                    <li class="organizer-element">Длительность: 2 часа</li>
                    <li class="organizer-element">Индивидуальная экскурсия</li>
                    <li class="organizer-element">На русском языке</li>
                    <li class="organizer-element">Цена: 3500 руб. с человека</li>
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
    <script src="./js/maps.js">
        
    </script>
    <script src="./js/mainSliderScript.js"></script>
    <script>
        window.onload = function() {
            // pedestrian = пешая маршрутизация
            // auto = автомобиль
            routing_Mode = 'pedestrian';
            points = [
                [56.00876414940184,92.87051136096088],    // театр площадь    
                [56.00678116300701,92.87463004220979],  // коммунальный мост
                [56.01332065461845,92.89776141275422], // вант мост
                [56.01325386355697,92.89490717135608], // рязанов
                [56.02276579698232,92.88655401319365], // мем победы
                [56.02388993002667,92.85930342019788], // часовня

            ];
            ymaps.ready(init);
        }
    </script>

</div>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->