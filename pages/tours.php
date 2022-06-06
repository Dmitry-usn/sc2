<?php require_once './templates/header.php'?>
<!-- header_end -->
<?php 

    // функционал для сохранения <select> которое выбрал пользователь
    
    $_SESSION['number_of_persons'] = $_POST['number_of_persons'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['duration'] = $_POST['duration'];
    $_SESSION['ex_type'] = $_POST['ex_type'];
     // var_dump($_SESSION);
    $numOfPersons = array("0" => "количество участников", "4" => "от 4", "6" => "от 6", "8" => "больше 8");
    $priceExcursion = array("10000" => "цена, руб.", "1000" => "до 1000", "3000"=>"до 3000", "5000"=>"до 5000");
    $excursionDuration = array("10000" => "продолжительность, часы", "4"=>"до 4","6"=>"до 6","8"=>"до 8");
    $excursionType = array("0" => "вид экскурсии", "1" => "пешая" , "2" => "автомобиль")
    
?>


<main class="cite-main">
    <div class="info">
        <h2 class="info__header">Экскурсии по Красноярску</h2>
    </div>

    <div class="tour__search-bar_wrap">
        <div class="tour__search-bar">

            <div class="tour__search-container">
                <form method="post" class="tour__search-form">
                    
                    <select name="number_of_persons" id="" class="tour-select" >

                        <?php foreach ($numOfPersons as $value => $option) { 
                            $selected = '';
                            if ($_SESSION['number_of_persons'] == $value)
                                $selected = 'selected';
                            ?>
                            <option value='<?=$value; ?>' <?=$selected; ?>> <?=$option; ?> </option>
                        <?php } ?>

                    </select>
                    <select name="price" id="" class="tour-select">

                        <?php foreach ($priceExcursion as $value => $option) { 
                            $selected = '';
                            if ($_SESSION['price'] == $value)
                                $selected = 'selected';
                            ?>
                            <option value='<?=$value; ?>' <?=$selected; ?>> <?=$option; ?> </option>
                        <?php } ?>
            
                    </select>
                    <select name="duration" id="" class="tour-select">

                        <?php foreach ($excursionDuration as $value => $option) { 
                            $selected = '';
                            if ($_SESSION['duration'] == $value)
                                $selected = 'selected';
                            ?>
                            <option value='<?=$value; ?>' <?=$selected; ?>> <?=$option; ?> </option>
                        <?php } ?>

                    </select>
                    <select name="ex_type" id="" class="tour-select">

                        <?php foreach ($excursionType as $value => $option) { 
                            $selected = '';
                            if ($_SESSION['ex_type'] == $value)
                                $selected = 'selected';
                            ?>
                            <option value='<?=$value; ?>' <?=$selected; ?>> <?=$option; ?> </option>
                        <?php } ?>

                    </select>


                    <!--<input type="text" placeholder="Поиск..." name="search" /> -->
                    <button type="submit" class="toursBtnSearch">Поиск</button>
                </form>
            </div>
        </div>
    </div>


    
    <div class="tours-cards-container">
        <aside class="tours-cards-aside">
            <table class="tours-table">
                <tr class="tours-table-tr">
                    <th class="tours-table-th" >Тематика:</th>
                </tr>
                <tr class="tours-table-tr"><td class="tours-table-td" id="tourAll">Все </td></tr> 
                <tr class="tours-table-tr"><td class="tours-table-td" id="tourNature">Природа</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td" id="tourCity">Город</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td" id="tourHistorical">Исторические</td></tr>
                
                  
                    
            </table>
                   
        </aside>
        <div class="tours-cards">
            <?php
            global $db;
            $sql = "SELECT * FROM `tours_card` WHERE (`number_of_persons` BETWEEN '{$_POST['number_of_persons']}' AND '1000')
                    AND (`price` BETWEEN '0' AND '{$_POST['price']}') AND (`duration` BETWEEN '0' AND '{$_POST['duration']}') 
                    AND ( IF('{$_POST['ex_type']}' = 0, `ex_type` BETWEEN '0' AND '1000', `ex_type` = '{$_POST['ex_type']}') )";



            // var_dump($sql);
            $data = mysqli_query($db, $sql);
            while ($item = mysqli_fetch_array($data)) { ?>
                <div class="tour-card <?=$item['tag_type']; ?>">
                    <div class="tour-card__image-holder ">
                        <img class="card__image" src=<?=$item['image_src']?> alt=<?=$item['image_alt']?> />
                    </div>
                    <div class="tour-card-title">
                        <a href="#" class="toggle-info btn">
                            <span class="tour-left"></span>
                            <span class="tour-right"></span>
                        </a>
                        <h2 class="tour-card__heading"><?=$item['heading']?></h2>
                        <ul class="tour-list">
                            <li>Количество участников: <b class="bold">от <?=$item['number_of_persons']?> человек</b></li>
                            <li>Продолжительность: <b class="bold"><?=$item['duration']?> ч.</b></li>
                            <li>Цена: <b class="bold"><?=$item['price']?> руб.</b></li>
                        </ul>
                    </div>
                    <div class="tour-card-flap flap1">
                        <div class="tour-card-description">
                            

                            <?=$item['description']?>
                        </div>
                        <div class="tour-card-flap flap2">
                            <div class="tour-card-actions">
                                <a href='<?=$item['page_link']?>' class="btn" onclick="javascript:location.href='<?=$item['page_link']?>'">Читать далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }; ?>

        </div>
    </div>

    <script>
        

        function TourFilterCards(elemId, excClass) {
            let elem = document.getElementById(elemId);
            elem.onclick = function() {
                let tourCards = document.querySelectorAll('div.tour-card');
                
                for (let i = 0; i < tourCards.length; i++) {
                    tourCards[i].style.display = 'none';
    
                    if (tourCards[i].classList.contains(excClass)) {
                        tourCards[i].style.display = '';
                    } 

                }
            }
        }

        TourFilterCards('tourAll', 'all');
        TourFilterCards('tourNature', 'nature');
        TourFilterCards('tourCity', 'city');
        TourFilterCards('tourHistorical', 'historical');
        
    </script>
</main>





<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->
