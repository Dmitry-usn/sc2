<?php

session_start();
$dbhost = "localhost";
$dbname = "tour"; 
$username = "root"; 
$password = "root"; 

//class to connect in DB
$db = new mysqli($dbhost, $username, $password, $dbname);
if ($db->connect_error) {
    die("Ошибка: " . $db->connect_error);
}

?>