<?php
session_start();
$_SESSION['login'] = 'ok';
$servername = "localhost";
$username = "root";
$pass = "root";
$db = "blog";
$conn = new mysqli($servername, $username, $pass, $db);

if ($conn->connect_error){
    die($conn->connect_error);
}

$conn->query("SELECT FROM INTO `data` (`id`, `message`) VALUES (NULL, '$message')");
//print_r($conn);