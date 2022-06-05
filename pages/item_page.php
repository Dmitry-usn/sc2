<?php require_once './templates/header.php'?>
<?php 
//var_dump($_SESSION);
//var_dump($_GET['id']);
global $db;
$sql = "  SELECT * FROM `places` WHERE `id`='{$_GET['id']}'  ";
$data = mysqli_fetch_assoc(mysqli_query($db, $sql));

//var_dump($data["slider_image_path"]);


?>

<main class="cite-main item-main">
    <div class="info">
        <hr />
        <h2 class="info__header"><?= $data["header"]; ?></h2>
        <hr />
    </div>

    <div class="item__heading-container">

        <div class="item__slider-wrap">
            <div class="item__slider-container">

                <?php for ($i = 1; $i < 6; $i++) { ?>

                    <div class="item-slider__slide">
                        <div class="item-slider__text"></div>
                        <img class="item-slider__img" src="<?= $data["slider_image_path"] . "/" . $i . ".jpg" ?>" style="width:100%">
                    </div>

                <?php }; ?>
                
                

                <!-- Next and previous buttons -->
                <a class="item-prev" onclick="itemPlusSlides(-1)">&#10094;</a>
                <a class="item-next" onclick="itemPlusSlides(1)">&#10095;</a>

                <!-- Image text 
                <div class="item-caption-container">
                    <p id="item-caption"></p>
                </div>-->

                <!-- Thumbnail images -->
                <div class="item-slider__row">
                    <?php for ($i = 1; $i < 6; $i++) { ?>
                        <div class="item-slider__column">
                            <img class="item-slider__img-small item-demo item-cursor" src="<?= $data["slider_image_path"] . "/" . $i . ".jpg" ?>"  style="width:100%" onclick="itemCurrentSlide(<?= $i; ?>)" >
                        </div>
                    <?php }; ?>

                    
                </div>
            </div>
        </div>

        <div class="item__map" id="item__ymap">

        </div>
    </div>



    <article class="item__article">
        <h2 class="item__article-header"><?= $data["header"]; ?></h2>
        <p class="item__text"><?= $data["text"]; ?></p>
    </article>


</main>

<script src='./js/itemSliderScript.js'></script>
<script>
    let itemMap;
    ymaps.ready(init);

    function init () {
        let center = [<?= $data["map_coords"]; ?>];
        itemMap = new ymaps.Map('item__ymap', {
            center: center, 
            zoom: 15,
            controls: [ ]
        }, {
            autoFitToViewport: 'always'
        });
        itemMap.geoObjects
            .add(new ymaps.Placemark(center, {
                //balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            }))
    }

</script>

<?php require_once './templates/footer.php' ?>
