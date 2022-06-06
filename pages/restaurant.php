<?php require_once './templates/header.php'?>

<main class="cite-main">
    <div class="info">
        <hr />
        <h2 class="info__header">Где поесть</h2>
        <hr />
        <p class="info__text"></p>
    </div>

    <div class="places-ymap" id="places-ymap"></div>


    <form method="post" class="places-search__form">
        <select class="places-search__form-select" name="" id="" onChange="filterSelection(this.value)">
            <option value="">Выберите место</option>
            <option value="restorans">Рестораны</option>
            <option value="bars">Бары</option>
            <option value="cafe">Столовые</option>
        </select>
        <button type="submit" class="places-search__form-button" >Поиск</button>
    </form>

    <div class="places-cards__container">

        <div class="place-card filterDiv bars">
            <a href="./item_page?id=1" class="place-card__link">
                <img src="./img/articles/bar1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Паб "Залечь на дно в Брюгге"</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

        <div class="place-card filterDiv restorans">
            <a href="./item_page?id=2" class="place-card__link">
                <img src="./img/articles/bulgakov.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Ресторан "Булгаков"</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

        <div class="place-card filterDiv cafe ">
            <a href="./item_page?id=3" class="place-card__link">
                <img src="./img/articles/sem_slona.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header cafe">Столовая "Съем Слона"</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

    </div>




</main>



<script>
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("places-ymap", {
            center: [56.010577871761626, 92.86459292312507],
            zoom: 11,
            controls: [ ]
        }, { 
            autoFitToViewport: 'always',
        })

        brugeGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [56.04982256868757, 92.91488799999996]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Паб «Залечь на дно в Брюгге»'
            }
        }),
        bulgakovGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [56.00958257437238, 92.87813315185825]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Булгаков'
            }
        }),
        semSlonaGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [56.01016101602213, 92.87065873209374]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Сеть столовых "Съем Слона"'
            }
        });

        

        myMap.geoObjects
            .add(bulgakovGeoObject)
            .add(brugeGeoObject)
            .add(semSlonaGeoObject);

        myMap.setBounds(myMap.geoObjects.getBounds(), {
            checkZoomRange: true,
            zoomMargin: 35

    
        });

    }
</script>
<script src="./js/filter.js"></script>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->