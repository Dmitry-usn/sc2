<?php
    $themeStyleSheet = 'light-mode.css';
    if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
      $themeStyleSheet = 'dark-mode.css';
    }
    
    function active($currect_page) {
        $url = $_SERVER['REQUEST_URI'] ;
        

        if ($currect_page == $url){
            echo 'nav_active'; //class name in css 
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" href="./ico/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/chief-slider.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <!-- php-css light/dark mode -->
    <link rel="stylesheet" href="./css/<?php echo $themeStyleSheet; ?>" id="theme">

    <title>Krsk-Tour</title>
    <script src="./js/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=0490f1e1-8615-4a8c-828a-021f1724ca4e&lang=ru_RU" type="text/javascript"></script> 
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(89128395, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/89128395" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <button onclick="topFunction()" id="toTopBtn" title="Go to top"><img src="./ico/top.png" alt=""></button>
    <div class="cite-wrapper">
        <!-- Top-menu -->
        
        <div class="top-menu" id="topMenu">
            <a class="top-menu__link icon" href="javascript:void(0);" onclick="resizeMenu()">
                <i>
                    <div class="fa-bars"></div>
                </i>
            </a>

            <?php if (isset($_SESSION['email']) && $_SESSION['role'] == 'Super Admin' ) { ?>
                <a class="top-menu__link" href="/login?exit=1">Выход</a>
                <a class="top-menu__link" href="/admin">Кабинет</a>
            <?php } elseif (isset($_SESSION['email']) && $_SESSION['role'] == 'manager' ) { ?>
                <a class="top-menu__link" href="/login?exit=1">Выход</a>
                <a class="top-menu__link" href="/blog">Блог</a>
            <?php } else { ?>
                <a class="top-menu__link" href="/login" >Войти</a>
                <a class="top-menu__link" href="/registration">Регистрация</a>
            <?php } ?>

            <a class="top-menu__link noactive" href="/">Главная</a>
            <a class="top-menu__link noactive" href="/restaurant" style="color:#64a930">| - Где поесть</a>
            <a class="top-menu__link noactive" href="/places" style="color:#64a930">| - Что посмотреть</a>
            <a class="top-menu__link noactive" href="/reserve" style="color:#64a930">| - Где остановиться</a>
            <a class="top-menu__link noactive" href="/tours">Экскурсии</a>
            <a class="top-menu__link noactive" href="/reviews">Отзывы</a>
            <a class="top-menu__link noactive" href="/about">О нас</a>
            <a class="top-menu__link noactive" href="/contacts">Контакты</a>
            
        </div>
        <!-- End_Top-menu -->

        <header class="cite-header">
            <!-- Logo -->
            <div class="logo">
                <img src="../img/logo.jpg" alt="logo" class="logo__image" />
            </div>
            <!-- Logo_end -->
            
            <!-- Navigation -->
            <nav class="main-navigation">

                <div class="main-navigation__wrap">
                    <div class="main-navigation__dropdown">
                        <button class="dropbtn">
                            <a class="main-navigation__link <?php active('/');?>" href="/">
                                главная
                            </a><img src="./ico/icon-caret-down.png" style="width:10px;height:10px"/>
                        </button>
                        <div class="main-navigation__dropdown-content">
                            <div class="main-navigation__wrap"><a class="main-navigation__link-dropdown <?php active('/restaurant');?>" href="/restaurant">Где поесть</a></div>
                            <div class="main-navigation__wrap"><a class="main-navigation__link-dropdown <?php active('/reserve');?>" href="/reserve">Где остановиться</a></div>
                            <div class="main-navigation__wrap"><a class="main-navigation__link-dropdown <?php active('/places');?>" href="/places">Что посмотреть</a></div>
                        </div>
                    </div>
                </div>
                
                <div class="main-navigation__wrap"><a class="main-navigation__link <?php active('/tours');?>" href="/tours">экскурсии</a></div>
                <div class="main-navigation__wrap"><a class="main-navigation__link <?php active('/reviews');?>" href="/reviews">отзывы</a></div>
                <div class="main-navigation__wrap"><a class="main-navigation__link <?php active('/about');?>" href="/about">о нас</a></div>
                <div class="main-navigation__wrap"><a class="main-navigation__link <?php active('/contacts');?>" href="/contacts">контакты</a></div>
            </nav>

            <!-- Navigation_end -->
            <button id="switchMode" class="btn-moon"></button>
            
        </header>