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

    <form method='post' class="places-search__form">
        <select name="" id="">
            <option value="">val1</option>
            <option value="">val2</option>
            <option value="">val3</option>
        </select>

    </form>

    <div class="places-card__container">
        <div class="places-card"></div>
    </div>




    <div class="articles">
        <div class="article-main">
            <img class="article-image" src="./img/articles/bulgakov.jpg" alt="stolby" style="width:100%">
            <div class="article-container">
                <h3 class="article-header">Булгаков</h3>
                
            </div>

            <div class="article-container">
                <p class="article-text">
                Бар «Булгаков» открылся в 2012 году в здании обувной фабрики, построенной в 
                20-х годах прошлого века, став первым проектом ресторанной группы Berrywood 
                Family и «Открытием года» по версии Luxury Lifestyle Awards 2012. За годы своей 
                работы заведение завоевало большую популярность среди красноярцев и гостей города, 
                что подтверждают верхние строчки в ресторанных рейтингах Tripadvisor, Flamp и 
                «Афиша Красноярск». Эклектичный интерьер, в котором соседствует винтаж с русским 
                авангардом, уникальная карта бара, изобилующая авторскими наливками и коктейлями 
                на их основе и оригинальная гастрономия в стиле новой русской кухни, с 
                использованием локальных продуктов и сибирских специалитетов, позволили бару 
                «Булгаков» стать гастрономической достопримечательностью города. В 2016 году 
                московский интернет-портал Afisha Daily внес бар Булгаков в TOP-40 лучших ресторанов 
                России. За кухню в баре отвечает шеф-повар Михаил Михайлов. Он является 
                адептом современного симпла, а во главе его гастрономического мировоззрения 
                стоят вкус и качество основных продуктов блюда - локальных или сезонных. 
                Михаил является сторонником ярких, взрывных вкусов, считая их главными 
                составляющими гастрономических впечатлений.
                </p>
                
            </div>
            <hr/>
        </div>

        <div class="article-main">
            <img class="article-image" src="./img/articles/taiga.jpg" alt="" style="width:100%">
            <div class="article-container">
                <h3 class="article-header">Хозяин Тайги</h3>
            </div>

            <div class="article-container">
                <p class="article-text">
                «Хозяин Тайги» – это не просто красивое название, взятое из одноименного 
                советского фильма. Это место, где вы попадаете в сибирскую лесную сказку.
                Здесь вас всегда ждут первоклассная сибирская кухня и высокий уровень 
                обслуживания. Душевная атмосфера, вид на горы и реку, потрескивание березовых 
                дров в камине настраивают на неспешную трапезу и приятную беседу. 
                Изюминка меню ресторана «Хозяин Тайги» - авторские блюда из традиционных 
                северных продуктов, деликатесы из дичи и первоклассного мяса. Отдельного 
                внимания заслуживает интерьер заведения, который выполнен в стиле 
                альпийского шале и декорирован фотографиями и памятными вещами из архива 
                съемочной группы кинофильма «Хозяин Тайги» и семьи Владимира Высоцкого.
                </p>
            </div>
            <hr/>
        </div>

        <div class="article-main">
            <img class="article-image" src="./img/articles/boho_3.jpg" alt="" style="width:100%">
            <div class="article-container">
                <h3 class="article-header">Домашняя КУХНЯ</h3>
            </div>

            <div class="article-container">
                <p class="article-text">
                Ресторан домашней кухни Boho chic запустил меню по исконно русским рецептам в 
                духе современности. В нем нет никаких сложных, несвойственных русской кухне 
                вкусовых сочетаний. Основной акцент сделан на привычных продуктах, подчеркивая 
                богатство вкусов домашней кухни, чтобы у каждого гостя пробудились в памяти самые 
                тёплые впечатления от семейных праздников. В закусках вы обязательно найдете 
                домашние соления, без которых не обходится ни один праздник. Вкус привычных салатов 
                разбавили авторскими нотками: в винегрет добавили малосольного муксуна, в оливье — 
                куриное филе и тигровые креветки. В горячих закусках, конечно, присутствуют блины: 
                с грибами, с курицей и с икрой. Горячие блюда пестрят многообразием пород рыб: треска, 
                голец, корюшка, щука, форель, окунь, сибас. Мясные блюда тоже в богатом разнообразии: 
                тут и телятина, и баранина, и кролик, и утка, и курица. В нашем специальном восточном 
                меню можно встретить грузинские домашние блюда, которые знакомы каждому русскому 
                столу: хачапури, хинкали, люля-кебаб, жареный сулугуни.
                </p>
            </div>
            <hr/>
        </div>


    </div>

</main>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->