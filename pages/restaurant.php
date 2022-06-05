<?php require_once './templates/header.php'?>

<main class="cite-main">
    <div class="info">
        <hr />
        <h2 class="info__header">Где поесть</h2>
        <hr />
        <p class="info__text"></p>
    </div>

    <div class="places-ymap" id="places-ymap"></div>

    <script>

        function init() { 
            var myMap = new ymaps.Map('places-ymap', {
                center: [56.02298527095825,92.863263479955],
                zoom: 17,
                controls: [ ]
                }, { autoFitToViewport: 'always' })

                var listBoxItems = ['Рестораны', 'Бары', 'Столовые']
                .map(function (title) {
                    return new ymaps.control.ListBoxItem({
                        data: {
                            content: title
                        },
                        state: {
                            selected: true
                        }
                    })
                }),
            reducer = function (filters, filter) {
                filters[filter.data.get('content')] = filter.isSelected();
                return filters;
            },
            // Теперь создадим список, содержащий 5 пунктов.
            listBoxControl = new ymaps.control.ListBox({
                data: {
                    content: 'Фильтр',
                    title: 'Фильтр'
                },
                items: listBoxItems,
                state: {
                    // Признак, развернут ли список.
                    expanded: true,
                    filters: listBoxItems.reduce(reducer, {})
                }
            });
        myMap.controls.add(listBoxControl);

        // Добавим отслеживание изменения признака, выбран ли пункт списка.
        listBoxControl.events.add(['select', 'deselect'], function (e) {
            var listBoxItem = e.get('target');
            var filters = ymaps.util.extend({}, listBoxControl.state.get('filters'));
            filters[listBoxItem.data.get('content')] = listBoxItem.isSelected();
            listBoxControl.state.set('filters', filters);
        });

        var filterMonitor = new ymaps.Monitor(listBoxControl.state);
        filterMonitor.add('filters', function (filters) {
            // Применим фильтр.
            objectManager.setFilter(getFilterFunction(filters));
        });

        function getFilterFunction(categories) {
            return function (obj) {
                var content = obj.properties.balloonContent;
                return categories[content]
            }
        }

        }
        ymaps.ready(init);
    </script>

    <form method="post" class="places-search__form">
        <select class="places-search__form-select" name="" id="">
            <option value="">Рестораны</option>
            <option value="">Бары</option>
            <option value="">Кафе</option>
        </select>
        <button type="submit" class="places-search__form-button">Поиск</button>
    </form>

    <div class="places-cards__container">

        <div class="place-card">
            <a href="./item_page?id=1" class="place-card__link">
                <img src="./img/articles/bar1.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Паб &#8220;Залечь на дно в Брюгге&#8220;</h4> 
                    <p class="place-card__text">Паб Залечь на дно в Брюгге</p> 
                </div>
            </a>
        </div>

        <div class="place-card">
            <a href="./item_page?id=2" class="place-card__link">
                <img src="./img/articles/bulgakov.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Ресторан &#8220;Булгаков&#8220;</h4> 
                    <p class="place-card__text">Паб Залечь на дно в Брюгге</p> 
                </div>
            </a>
        </div>

        <div class="place-card">
            <a href="./item_page?id=3" class="place-card__link">
                <img src="./img/articles/sem_slona.jpg" alt="Avatar" style="width:100%" />
                <div class="place-card__text-container">
                    <h4 class="place-card__header">Столовая &#8220;Съем Слона&#8220;</h4> 
                    <p class="place-card__text">Паб Залечь на дно в Брюгге</p> 
                </div>
            </a>
        </div>

    </div>




</main>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->