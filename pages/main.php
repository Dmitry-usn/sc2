<?php require_once './templates/header.php'?>
<!-- header_end -->

<!-- main -->
<main class="cite-main">
    <!-- info -->
    <div class="info">
        <h2 class="info__header">Красноярск — один из крупнейших 
            городов России, крупнейший культурный, 
            образовательный, экономический и 
            промышленный центр Восточной Сибири
        </h2>
        <p class="info__text">Красноярск является одним из самых 
            перспективных городов Сибири — он имеет удачное 
            месторасположение и богатую историю, высокий 
            экономический потенциал, современную производственную 
            и сервисную инфраструктуру, высокий научно-образовательный и 
            культурный потенциал. Город раскинулся по обоим берегам могучего 
            Енисея, одной из крупнейших рек нашей планеты. Он органично вписан 
            в огромную котловину как раз в том месте, где река вырывается из горного 
            плена северных отрогов Саян на простор Западно-Сибирской равнины. 
            На правом берегу, с юга, его окаймляют холмы и нетронутая тайга. 
            На левом берегу, к востоку и северу, сопки переходят в лесостепь. В 
            непосредственной близости от города находятся уникальный природный 
            парк «Столбы», зоопарк «Роев Ручей» и «Красноярское море».
        </p>
    </div>
    <!-- end_info -->
    
        
    <!-- new slider-->
    <div class="slider-wrap">
        <div class="main-slider-container">


            <!-- Full-width images with number text -->
            <div class="main-slider__slide">
                <div class="main-slider__text"></div>
                <img class="main-slider__img" src="./img/krasnoyarsk1.jpg" style="width:100%">
            </div>
            <div class="main-slider__slide">
                <div class="main-slider__text"></div>
                <img class="main-slider__img" src="./img/krasnoyarsk2.jpg" style="width:100%">
            </div>
            <div class="main-slider__slide">
                <div class="main-slider__text"></div>
                <img class="main-slider__img" src="./img/krasnoyarsk3.jpg" style="width:100%">
            </div>
            <div class="main-slider__slide">
                <div class="main-slider__text"></div>
                <img class="main-slider__img" src="./img/krasnoyarsk4.jpg" style="width:100%">
            </div>
            <div class="main-slider__slide">
                <div class="main-slider__text"></div>
                <img class="main-slider__img" src="./img/krasnoyarsk5.jpg" style="width:100%">
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
                    <img class="main-slider__img-small demo" src="./img/krasnoyarsk1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Остров отдыха">
                </div>
                <div class="main-slider__column">
                    <img class="main-slider__img-small demo" src="./img/krasnoyarsk2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Часовня Параскевы Пятницы">
                </div>
                <div class="main-slider__column">
                    <img class="main-slider__img-small demo" src="./img/krasnoyarsk3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Театр оперы и балета">
                </div>
                <div class="main-slider__column">
                    <img class="main-slider__img-small demo" src="./img/krasnoyarsk4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Органный зал">
                </div>
                <div class="main-slider__column">
                    <img class="main-slider__img-small demo" src="./img/krasnoyarsk5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Заповедник Столбы">
                </div>
            </div>
        </div>
    </div>
    <!-- end new slider-->


    <div class="info">
        <h2 class="info__header">Новости</h2>
    </div>


    <div class="news-card-container">
    <?php
        global $db;
        $data = mysqli_query($db, "SELECT * FROM `blog` WHERE `status`='ok' ORDER BY `id` DESC LIMIT 3 ");
        while($post = mysqli_fetch_array($data)) { 
    ?>
        <div class="news-card news-card-1">
            <div class="news-card__img" style="background-image: url(<?=$post['file']; ?>)"></div>
            <a href="<?=$post['id']?>" class="news-card-link">
                <div class="news-card__img-hovered" style="background-image: url(<?=$post['file']; ?>)"></div>
            </a>
            <div class="news-card-info">
                <div class="news-card-about">
                    <a class="news-card-tag tag-news">Новости</a>
                    <div class="news-card-time"><?=date('j/n/Y', strtotime($post['date'])); ?></div>
                </div>
                <h1 class="news-card-title"><?=$post['h1']?></h1>
                <br/>
                <div class="news-card-creator"></div>
            </div>
        </div>
    <? } ?>
    </div>




    <div class="info">
        <h2 class="info__header">Места</h2>
    </div>


    <div class="cards">

        <a class="card__link" href="./restaurant">
            <div class="main-card__wrap">
                <div class="main-card" style="background: url('./img/main/card7.jpg') center center no-repeat;background-size: cover;">
                    <div class="main-card-title-content">
                        <h3 class="main-card-header">ГДЕ ПОЕСТЬ</h3>
                        <hr class="main-card-hr" />
                        <div class="intro">Рестораны, кафе, столовые</div>
                    </div><!-- /.title-content -->
                    <div class="main-card-info">
                        <p class="main-card-text">Посмотреть</p>
                    </div><!-- /.card-info -->
                        
                    <!-- overlays -->
                    <div class="gradient-overlay"></div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->    
            </div>
        </a>

        <a class="card__link" href="./places">
            <div class="main-card__wrap">
                <div class="main-card" style="background: url('./img/main/card11.jpg') center center no-repeat;background-size: cover;">
                    <div class="main-card-title-content">
                        <h3 class="main-card-header">ГДЕ ОСТАНОВИТЬСЯ</h3>
                        <hr class="main-card-hr" />
                        <div class="intro">Гостиницы, хостел</div>
                    </div><!-- /.title-content -->
                    <div class="main-card-info">
                        <p class="main-card-text">Посмотреть</p>
                    </div><!-- /.card-info -->
                        
                    <!-- overlays -->
                    <div class="gradient-overlay"></div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->    
            </div>
            
        </a>

        <a class="card__link" href="./reserve">
            <div class="main-card__wrap">
                <div class="main-card" style="background: url('./img/main/card1.jpg') center center no-repeat;background-size: cover;">
                    <div class="main-card-title-content">
                        <h3 class="main-card-header">ЧТО ПОСМОТРЕТЬ</h3>
                        <hr class="main-card-hr" />
                        <div class="intro">Достопримечательности Красноярска</div>
                    </div><!-- /.title-content -->
                    <div class="main-card-info">
                        <p class="main-card-text">Посмотреть</p>
                    </div><!-- /.card-info -->
                        
                    <!-- overlays -->
                    <div class="gradient-overlay"></div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->    
            </div>
        </a>




        


    </div>




    <div class="partners">
        <h2 class="partners-header">наши партнеры</h2>
        <div class="partners-cards">
            <div class="partner__wrap">
                <a href="" class="partner__link"><img src="./img/partner1.png" alt="our partner" class="partner__img" /></a>
            </div>

            <div class="partner__wrap">
                <a href="" class="partner__link"><img src="./img/partner2.jpg" alt="our partner" class="partner__img" /></a>
            </div>

            <div class="partner__wrap">
                <a href="" class="partner__link"><img src="./img/partner3.jpg" alt="our partner" class="partner__img" /></a>
            </div>

            <div class="partner__wrap">
                <a href="" class="partner__link"><img src="./img/partner4.jpg" alt="our partner" class="partner__img" /></a>
            </div>

            <div class="partner__wrap">
                <a href="" class="partner__link"><img src="./img/partner5-sber-logo.jpg" alt="our partner" class="partner__img" /></a>
            </div>
        </div>
    </div>

</main>
<script src="./js/mainSliderScript.js"></script>

<!-- main_end -->

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->

