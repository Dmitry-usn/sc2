<?php require_once './templates/header.php'?>

<main class="cite-main">
    <div class="info">
        <hr />
        <h2 class="info__header">Что посмотреть</h2>
        <hr />
        <p class="info__text"></p>
    </div>

    <div class="places-ymap" id="places-ymap"></div>



    <form method="post" class="places-search__form">
        <select class="places-search__form-select" name="" id="" onChange="filterSelection(this.value)">
            <option value="">Выберите место</option>
            <option value="nature">Природа</option>
            <option value="parks">Парки</option>
        </select>
        <button type="submit" class="places-search__form-button">Поиск</button>
    </form>

    <div class="places-cards__container">

        <div class="place-card filterDiv parks">
            <a href="./item_page?id=4" class="place-card__link">
                <img src="./img/items/bobr_log/1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Фанпарк Бобровый лог</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

        <div class="place-card filterDiv nature">
            <a href="./item_page?id=8" class="place-card__link">
                <img src="./img/items/stolbu/1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Национальный парк "Красноярские Столбы"</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

        <div class="place-card filterDiv nature">
            <a href="./item_page?id=9" class="place-card__link">
                <img src="./img/items/torgash_hrebet/1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Торгашинский Хребет</h4>
                    
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
                coordinates: [55.96074687247808, 92.79526162167376]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Фанпарк Боборовый лог'
            }
        }),
        bulgakovGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [55.91332333021925, 92.73384503891477]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Национальный парк «Красноярские Столбы»'

            }
        }),
        semSlonaGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [55.954257708612445, 92.85918887663524]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Торгашинский хребет'
            }
        });;

        myMap.geoObjects
            .add(bulgakovGeoObject)
            .add(brugeGeoObject)
            .add(semSlonaGeoObject)

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