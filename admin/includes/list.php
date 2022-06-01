<?php
include "../db.php";
include "./includes/header.php";

$url_full = basename($_SERVER['REQUEST_URI']);
if ($_GET['del'] > 0) 
{
    global $db;
    mysqli_query($db, "UPDATE `categories` SET `status`='del' WHERE `id`='{$_GET['del']}'");
}

if ($_GET['repair'] > 0)
{
    global $db;
    mysqli_query($db, "UPDATE `categories` SET `status`='ok' WHERE `id`='{$_GET['repair']}'");
}

$url_array = explode("?", $url_full);
$url = $url_array[0];

if (isset($_POST['name']))
{
    global $db;
    $sql = "INSERT INTO `categories`(`name`, `parent_id`, `order`, `url`, `user_id`)
            VALUES ('{$_POST['name']}','0','0','{$url}','{$_SESSION['user_id']}')";
    $db->query($sql);
}
?>

<div class="form-container">
    <h2>Создание списка</h2>
    <form method="post">
        <label class="form-label" for="name">Имя:</label>
        <input class="form-input" placeholder="Введите имя элемента" name="name" type="text">
        <hr>
        <button type="submit" class="registerbtn">Добавить</button>
    </form>

    <h3>Активные учетные записи</h3>
    <table class="table">
        <thead>
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $cnt = 0;
        $sql = "SELECT * FROM `categories` where `url`='{$url}' and `status`='ok'";
        $data = mysqli_query($db, $sql);
        while($item = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?=++$cnt; ?></td>
                <td><?=$item['name']; ?></td>
                <td><a href='?del=<?=$item['id'];?>'>Удалить</a></td>
            </tr> 
        <?php }; ?>
        </tbody>
    </table>

    <h3>Неактивные учетные записи</h3>
    <table class="table">
        <thead>
            <tr>
                <th>№</th>
                <th>Имя</th>
                <th>Восстановить</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $cnt = 0;
        $sql = "SELECT * FROM `categories` where `url`='{$url}' and `status`='del'";
        $data = mysqli_query($db, $sql);
        while($item = mysqli_fetch_assoc($data)) { ?>
            <tr>
                <td><?=++$cnt; ?></td>
                <td><?=$item['name']; ?></td>
                <td><a href='?repair=<?=$item['id'];?>'>Восстановить</a></td>
            </tr>    
        <?php }; ?>
        </tbody>
    </table>
</div>
