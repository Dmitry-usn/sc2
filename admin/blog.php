<?php

if($_SESSION['role'] != "manager")
{
    include "../db.php";
    include "./includes/header.php";
    
} else { 
    include "./db.php";
    include "./admin/includes/header-manager.php";
}


if ($_GET['del_post'] > 0) {
    $sql = "UPDATE `blog` SET `status`='del' WHERE `id`= '{$_GET['del_post']}' ";
    mysqli_query($db, $sql);
}

if (isset($_POST['h1'])) {

    $email = explode("@", $_SESSION['email']);
    $sql = "INSERT INTO `blog`(`h1`, `text`, `file`, `author`) 
            VALUES ('{$_POST['h1']}', '{$_POST['text']}', '', '{$email[0]}')";
    mysqli_query($db, $sql);
    $res = mysqli_fetch_assoc(mysqli_query($db, "SELECT max(`id`) as `id` from `blog` WHERE `h1`='{$_POST['h1']}' AND author='{$email[0]}'"));

    $f = "".rand(100, 999);
    if ($_SESSION['role'] == 'manager') {
        $path = "./uploads/{$f[0]}/{$f[1]}/{$f[2]}/";
    } else { 
        $path = "../uploads/{$f[0]}/{$f[1]}/{$f[2]}/";
    }
    
    $extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

    if ($extension == "jpg" or $extension == "jpeg" or $extension == "gif" or $extension == "png") {
        mkdir($path, 0755, true);
        $filename = $path.$res['id'].".".$extension;
        move_uploaded_file($_FILES['file']['tmp_name'], $filename);
        mysqli_query($db, "UPDATE `blog` SET `file`='{$filename}' WHERE `id`='{$res['id']}'");
    }
}
?>
<div class="blog-form__wrap">
<form method="post" enctype='multipart/form-data'>
    <div class="blog-form-container">
        <h2>Добавить новость</h2>
        <hr/>
        <label for="h1">Заголовок</label>
        <input class="blog-form__input" type="text" placeholder="Введите заголовок" name="h1" required />
      
        <label for="text">Текст</label>
        <textarea class="blog-form__input" name="text" cols="30" rows="10" style="height:200px" required></textarea>         
        
        <label for="image">Картинка</label>
        <input class="blog-form__input" type="file" placeholder="Выберите файл" name="file">
        <hr/>

        <div class="container signin">
            <button type="submit" class="blog-form__btn-send">Отправить</button>
        </div>
    </div>
</form>

<hr/>

<table class="table" style="overflow-x:auto;">
<thead>
    <tr>
        <th>#</th>
        <th>заголовок</th>
        <th>текст</th>
        <th>изображение</th>
        <th>удалить</th>
    </tr>
</thead>
<tbody>
<?php
$data = mysqli_query($db, "SELECT * FROM `blog` WHERE `status`='ok' ORDER BY `id` DESC");
$cnt = 0;
while($post = mysqli_fetch_array($data)) {
?>
    <tr>
        <td><?=++$cnt; ?></td>
        <td><?=$post['h1']?></td>
        <td><?=substr($post['text'], 0, 170); ?></td>
        <td><img src='<?=$post['file']; ?>' width='100px'></td>
        <td><a href="?del_post=<?=$post['id']; ?>" class="registerbtn">Удалить</a></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>