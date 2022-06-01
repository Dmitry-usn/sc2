<?php
if($_GET['exit'] == 1) {
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    unset($_SESSION['user_id']);
    unset($_SESSION['status']);


    header("location: login");
    
}

if (isset($_POST['password'])) {
    global $db;
    $_POST['password']=MD5($_POST['password']);
    $sql = "SELECT * FROM `users` WHERE `email`='{$_POST['email']}' AND `password`='{$_POST['password']}'";
    $result = mysqli_fetch_assoc( $db->query($sql));
    
    if (isset($result['id']) && $result['status'] != 'del') {
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['status'] = $result['status'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['role'] = $result['role'];
        $okmsg = "Поздравляем! Вы успешно вошли на сайт. <a href='/'>Вернуться на главную страницу</a>";
    } elseif ($result['status'] == 'del') {
        $errmsg = "Ваша учетная запись удалена";
    } else {
        $errmsg = "Неправильный логин или пароль";

    }
}
?>




<?php require_once './templates/header.php'?>
<!-- header_end -->

<main class="cite-main">
    <form method="post">
        <div class="form-container">
            <h2 class="form-header">Войти</h2>
            <p class="form-text">Введите данные для входа</p>
            <hr>

            <!-- Error msg-->
            <?php if(isset($errmsg)) { ?>
                <div class="alert alert-danger">
                    <strong>Ошибка!</strong> <?=$errmsg?>
                </div>
                <?php }; ?>

                <?php if(isset($okmsg)) { ?>
                    <div class="alert success">
                        <strong>Поздравляем!</strong> <?=$okmsg?>
                    </div>
            <?php }; ?>
            <!-- Error msg_end -->

            <label class="form-label" for="email"><b>Email</b></label>
            <input class="form-input" type="text" placeholder="Введите Email" name="email" id="email" value='<?=$_POST['email']?>' required>

            <label class="form-label" for="psw"><b>Пароль</b></label>
            <input class="form-input" type="password" placeholder="Введите Пароль" name="password" id="psw" required>

            <hr>

            <button type="submit" class="registerbtn">Войти</button>
        </div>
    
        <div class="form-container signin">
            <p class="form-text">Нет аккаунта? <a class="form-link" href="/registration">Зарегистрироваться</a>.</p>
        </div>
    </form>
</main>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->