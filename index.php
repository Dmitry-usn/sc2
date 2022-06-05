<?php
require_once './db.php';
require './system/Routing.php'; 
    $data = mysqli_query($db, "SELECT * FROM `blog` WHERE `status`='ok' ");

    $url = key($_GET);

    $r = new Router();
    $r->addRoute("/", "main.php");
    $r->addRoute("/tours", "tours.php");
    $r->addRoute("/reviews", "reviews.php");
    $r->addRoute("/about", "about.php");
    $r->addRoute("/contacts", "contacts.php");
    $r->addRoute("/registration", "registration.php");
    $r->addRoute("/login", "login.php");
    $r->addRoute("/manager", "manager.php");
    $r->addRoute("/blog", "blog.php");
    $r->addRoute("/museums", "articles_page.php");
    $r->addRoute("/reserve", "reserve.php");
    $r->addRoute("/places", "places.php");
    $r->addRoute("/restaurant", "restaurant.php");
    $r->addRoute("/sayan", "ex1.php");
    $r->addRoute("/astafev", "ex2.php");
    $r->addRoute("/stolbu", "ex3.php");
    $r->addRoute("/krasnoyarsk-night", "ex4.php");
    $r->addRoute("/item_page", "item_page.php");
    
    while($post = mysqli_fetch_array($data)) { 
        $r->addRoute("/" . $post['id'], 'news.php');
    }

    $r->route("/".$url);


?>

