
<?php require_once './templates/header.php'?>
<!-- header_end -->

<main class="cite-main">
    <div class="info">
        <h2 class="info__header">Отзывы</h2>
        <!-- <p class="info__text">Здесь собраны интересные места Красноярска</p> -->
    </div>

    <div class="container">
        <div class="slider">
            <div class="slider__container">
                <div class="slider__wrapper">
                    <div class="slider__items">
                        <div class="slider__item">
                            <img class="slider__content_img" 
                                src="./img/foto1.png" 
                                alt="..." 
                                
                                loading="lazy" 
                            />
                        </div>
                        <div class="slider__item">
                        <img class="slider__content_img" 
                                src="./img/foto2.png" 
                                alt="..." 
                                
                                loading="lazy" 
                            />
                        </div>
                        <div class="slider__item">
                        <img class="slider__content_img" 
                                src="./img/foto3.png" 
                                alt="..." 
                                
                                loading="lazy" 
                            />
                        </div>
                        <div class="slider__item">
                        <img class="slider__content_img" 
                                src="./img/foto4.png" 
                                alt="..." 
                                
                                loading="lazy" 
                            />
                        </div>
                        <div class="slider__item">
                        <img class="slider__content_img" 
                                src="./img/foto5.png" 
                                alt="..." 
                                
                                loading="lazy" 
                            />
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="slider__control" data-slide="prev"></a>
            <a href="#" class="slider__control" data-slide="next"></a>
        </div>
    </div>


    <div class="reviewer-cards">

        <div class="reviewer">
            <div class="reviewer__image-wrap">
                <img src="./img/reviews1.png" alt="11" class="rewiever__image"/>
            </div>
            <div class="reviewer__text-wrap">
                <h3 class="reviewer__name">Наталья Ш.</h3>
                <p class="reviewer__text">
                    Ночная экскурсия по Красноярску. Гид Дмитрий и водитель Максим. Это восторг!!! 
                    Давно не получала такого удовольствия от экскурсии. 5 баллов из 5, 10 из 10, 
                    100 из 100! Великолепный рассказчик, отменная подача материала, маршрут 
                    классно построен. Город открылся и заиграл всеми гранями, да с ночной 
                    подсветкой. Красноярцы, у вас очень красиво, а интересно то как. 
                    Спасибо от всей души!
                </p>
            </div>
        </div>

        <div class="reviewer">
            <div class="reviewer__image-wrap">
                <img src="./img/reviews4.png" alt="11" class="rewiever__image"/>
            </div>
            <div class="reviewer__text-wrap">
                <h3 class="reviewer__name">Юлия Юксеева</h3>
                <p class="reviewer__text">
                    Экскурсия очень понравилась! Я увидела что хотела и услышала много 
                    нового и интересного! Рада, что не ошиблась с гидом и выбрала 
                    Максима: с ним было интересно и легко!
                </p>
            </div>
        </div>

        <div class="reviewer">
            <div class="reviewer__image-wrap">
                <img src="./img/reviews3.png" alt="11" class="rewiever__image"/>
            </div>
            <div class="reviewer__text-wrap">
                <h3 class="reviewer__name">Андрей Смирнов</h3>
                <p class="reviewer__text">
                    У Вас было такое, что при встрече с незнакомым человеком начинает 
                    казаться, что ты знал его раньше? Или только тебя он и ждал, чтобы 
                    показать свой город ? Вот такое впечатление у меня возникло сразу при 
                    встрече с Натальей . Все сложилось в этот день. Мы много ходили и много 
                    ездили, поэтому удалось побывать в разных уголках города. Ее кругозор, 
                    опыт и любознательность восхищает. Она очень чувствует аудиторию, с 
                    котрой работает . Наталья спокойно и уверенно водит машину ( и это важно ) 
                    А какой прекрасный чай и вкуснейшие конфеты ждали нас в конце путешествия - мечта! 
                    Спасибо огромное за гостеприимство Красноярский край . Спасибо Наталья за 
                    любовь в гостям, к городу, к профессии.
                </p>
            </div>
        </div>

    </div>
</main>
<script defer src="../js/chief-slider.min.js"></script>
<script defer src="../js/chiefSlider.js"></script>


<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->
