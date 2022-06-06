<?php require_once './templates/header.php'?>

<main class="cite-main">
    <div class="info">
        <hr />
        <h2 class="info__header">Где остановиться</h2>
        <hr />
        <p class="info__text"></p>
    </div>

    <div class="places-ymap" id="places-ymap"></div>



    <form method="post" class="places-search__form">
        <select class="places-search__form-select" name="" id="" onChange="filterSelection(this.value)">
            <option value="">Выберите место</option>
            <option value="inn">Гостиница</option>
            <option value="hotel">Отель</option>
        </select>
        <button type="submit" class="places-search__form-button">Поиск</button>
    </form>

    <div class="places-cards__container">

        <div class="place-card filterDiv inn">
            <a href="./item_page?id=5" class="place-card__link">
                <img src="./img/items/hilton/1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Хилтон Гарден Инн Красноярск</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

        <div class="place-card filterDiv inn">
            <a href="./item_page?id=6" class="place-card__link">
                <img src="./img/items/hotel_krasnoyarsk/1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Гостиница Красноярск</h4> 
                    <p class="place-card__text"></p> 
                </div>
            </a>
        </div>

        <div class="place-card filterDiv hotel">
            <a href="./item_page?id=7" class="place-card__link">
                <img src="./img/items/ibis_hotel/1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Отель Ибис Красноярск Центр</h4>
                    
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
                coordinates: [56.035731663152, 92.89756109815383]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Хилтон Гарден Инн Красноярск'
            }
        }),
        bulgakovGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [56.00933665697535, 92.87088639457347]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Гостиница Красноярск'
            }
        }),
        semSlonaGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [56.01017213155509, 92.86904103477123]
            },
            // Свойства.
            properties: {
                // Контент метки.
                
                hintContent: 'Отель Ибис Красноярск Центр'
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