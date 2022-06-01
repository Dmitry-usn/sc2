<?php
if($_SESSION['user_id'] < 1 || $_SESSION['role'] != "Super Admin")
{
    header("location: ../login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" href="../ico/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="../css/reset.css">
    
    <link rel="stylesheet" href="../css/styles.css">
    <!-- php-css light/dark mode -->
    <!--<link rel="stylesheet" href="./css/<?php echo $themeStyleSheet; ?>" id="theme"> -->

    <title>my site</title>
    <script src="../js/jquery.min.js"></script>
    
</head>

<body>
    <div class="cite-wrapper">
        <div class="top-menu" id="topMenu">
            
            <h2 class="admin-header">Панель Админитратора</h2>
            
            <div class="dropdown">
                <button class="dropbtn">Списки</button>
                <div class="dropdown-content">
                    <a href="./list-role.php">Роли пользователей</a>
                    <a href="./list-status.php">Статусы пользователей</a>
                    
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Настройки</button>
                <div class="dropdown-content">
                    <a href="./settings-user-role.php">Настройки</a>
                </div>
            </div> 

            
            <?php if (isset($_SESSION['email'])) { ?>
                <a class="top-menu__link" href="/login?exit=1">Выход</a>
                <a class="top-menu__link" href="/" class="active">Сайт</a>
            <?php } else { ?>
                <a class="top-menu__link" href="/login" class="active">Войти</a>
                <a class="top-menu__link" href="/registration">Регистрация</a>
            <?php } ?>    
            <a class="top-menu__link" href='./blog.php'>Блог</a>
            <a class="top-menu__link" href="javascript:void(0);" class="icon" onclick="resizeMenu()">
                
            </a>

        </div>
    </div>
    
</body>
</html>
