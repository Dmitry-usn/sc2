// нужна внешняя переменная points

function init() {
    // ссылка на внешние переменные, замыкание, для переиспользования данной функции
    referencePoints = points;

    multiRoute = new ymaps.multiRouter.MultiRoute({
            referencePoints: referencePoints,
            // замыкание
            params: { routingMode: routing_Mode }
        }, {
            // Внешний вид путевых точек.
            wayPointStartIconColor: "#fff",
            wayPointStartIconFillColor: "#f00",
            // Задаем собственную картинку для последней путевой точки.
            wayPointFinishIconColor: "#fff",
            wayPointFinishIconFillColor: "#f00",
            // Позволяет скрыть иконки путевых точек маршрута.
            // wayPointVisible:false,

            // Внешний вид транзитных точек.
            viaPointIconRadius: 7,
            viaPointIconFillColor: "#000088",
            viaPointActiveIconFillColor: "#E63E92",
            // Транзитные точки можно перетаскивать, при этом
            // маршрут будет перестраиваться.
            
            // Позволяет скрыть иконки транзитных точек маршрута.
            // viaPointVisible:false,

            // Внешний вид точечных маркеров под путевыми точками.
            pinIconFillColor: "#000088",
            pinActiveIconFillColor: "#B3B3B3",
            // Позволяет скрыть точечные маркеры путевых точек.
            // pinVisible:false,

            // Внешний вид линии маршрута.
            routeStrokeWidth: 2,
            routeStrokeColor: "#000088",
            routeActiveStrokeWidth: 6,
            routeActiveStrokeColor: "#E63E92",

            // Внешний вид линии пешеходного маршрута.
            routeActivePedestrianSegmentStrokeStyle: "solid",
            routeActivePedestrianSegmentStrokeColor: "#00CDCD",

            // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
            boundsAutoApply: true
    });

    function customizeSecondPoint() {
        /**
         * Ждем, пока будут загружены данные мультимаршрута и созданы отображения путевых точек.
         */
        multiRoute.model.events.once("requestsuccess", function () {
            var lastIndex = referencePoints.length - 1;
            
            var startPoint = multiRoute.getWayPoints().get(0);
            var finishPoint = multiRoute.getWayPoints().get(lastIndex);
            
            // Создаем балун у метки  точки.
            ymaps.geoObject.addon.balloon.get(startPoint);
            ymaps.geoObject.addon.balloon.get(finishPoint);
            startPoint.options.set({
                preset: "islands#redStretchyIcon",
                iconContentLayout: ymaps.templateLayoutFactory.createClass(
                    'Старт'
                ),
                balloonContentLayout: ymaps.templateLayoutFactory.createClass(
                    '{{ properties.address|raw }}'
                )
            });
            finishPoint.options.set({
                preset: "islands#redStretchyIcon",
                iconContentLayout: ymaps.templateLayoutFactory.createClass(
                    'Финиш'
                ),
                balloonContentLayout: ymaps.templateLayoutFactory.createClass(
                    '{{ properties.address|raw }}'
                )
            });

        });
    }

    customizeSecondPoint();

    var myMap = new ymaps.Map('ymap', {
        center: referencePoints[0],
        zoom: 17,
        controls: [ ]
    }, {autoFitToViewport: 'always'});

    myMap.geoObjects.add(multiRoute);
}

//ymaps.ready(init);