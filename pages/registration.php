<?php
if (isset($_POST['email'])) {
    if (strlen($_POST['password']) < 6) {
        $errmsg = 'Ваш пароль меньше 6 символов';
    } else {
        global $db;
        $_POST['password'] = md5($_POST['password']);
        $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('{$_POST['email']}', '{$_POST['password']}')";

        if ($db->query($sql)) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['user_id'] = $result['id'];
            $okmsg = "Регистрация завершена. <a href='/'>Перейти на главную страницу</a>";
        } else {
            $errmsg = "Ошибка: " . $db->error;
        }

    }
}

?>



<?php require_once './templates/header.php'?>
<!-- header_end -->

<main class="cite-main">
    <form method="post">
        <div class="form-container">
            <h2 class="form-header">Форма регистрации</h2>
            <p class="form-text">Заполните поля для регистрации</p>
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
            <input class="form-input" type="text" placeholder="Введите Email" name="email" id="email" value='<?=$_POST['email']?>' required >

            <label class="form-label" for="psw"><b>Пароль</b></label>
            <input class="form-input" type="password" placeholder="Введите Пароль" name="password" id="psw" required>

            <hr>

            <button type="submit" class="registerbtn">Зарегистрироваться</button>
        </div>
    
      <div class="form-container signin">
          <p class="form-text">Уже есть аккаунт? <a class="form-link" href="/login">Войти</a>.</p>
      </div>
  </form>
</main>

<!-- footer -->
<?php require_once './templates/footer.php' ?>
<!-- footer_end -->