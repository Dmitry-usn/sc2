<?php require_once './templates/header.php'?>
<!-- header_end -->

<?php 
    $article_id = basename($_SERVER['REQUEST_URI']);
    global $db;
    $data = mysqli_query($db, "SELECT * FROM `blog` WHERE `id`='{$article_id}' ");
    $result = mysqli_fetch_assoc($data);
?>
<main class="cite-main">
    <div class="news">
        
            <h1 class="news-header"><?=$result['h1']; ?></h1>
            <!-- <img class="news-image" src="<?=$result['file']; ?>" alt="" /> -->
            <p class="news-text"><?=$result['text']; ?></p>
        
    </div>

</main>


<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->