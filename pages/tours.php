<?php require_once './templates/header.php'?>
<!-- header_end -->
<?php 

    // функционал для сохранения <select> которое выбрал пользователь
    
    $_SESSION['number_of_persons'] = $_POST['number_of_persons'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['duration'] = $_POST['duration'];
    var_dump($_SESSION);
    $numOfPersons = array("0" => "количество участников", "4" => "от 4", "6" => "от 6", "8" => "больше 8");
    $priceExcursion = array("10000" => "цена, руб.", "1000" => "до 1000", "3000"=>"до 3000", "5000"=>"до 5000");
    $excursionDuration = array("10000" => "продолжительность, часы", "4"=>"до 4","6"=>"до 6","8"=>"до 8");

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
                    <!--<input type="text" placeholder="Поиск..." name="search" /> -->
                    <button type="submit">Поиск</button>
                </form>
            </div>
        </div>
    </div>


    
    <div class="tours-cards-container">
        <aside class="tours-cards-aside">
            <table class="tours-table">
                <tr class="tours-table-tr">
                    <th class="tours-table-th">Тематика:</th>
                </tr>
                <tr class="tours-table-tr"><td class="tours-table-td">Все</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td">Природа</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td">Город</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td">Исторические</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td">Пешие</td></tr>
                <tr class="tours-table-tr"><td class="tours-table-td">Автомобиль</td></tr>
                  
                    
            </table>
                   
        </aside>
        <div class="tours-cards">
            <?php
            global $db;
            $sql = "SELECT * FROM `tours_card` WHERE (`number_of_persons` BETWEEN '{$_POST['number_of_persons']}' AND '1000')
                    AND (`price` BETWEEN '0' AND '{$_POST['price']}') AND (`duration` BETWEEN '0' AND '{$_POST['duration']}')";



            // var_dump($sql);
            $data = mysqli_query($db, $sql);
            while ($item = mysqli_fetch_array($data)) { ?>
                <div class="tour-card">
                    <div class="tour-card__image-holder">
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

        var tableElem = document.querySelectorAll('td');
        console.log(tableElem);
        tableElem.onclick = function() { }
    </script>
</main>





<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->
