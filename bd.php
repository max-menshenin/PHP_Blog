<?php
$servername = "localhost";
$username = "root";
$pass = "root";
$db = "blog";
$conn = new mysqli($servername, $username, $pass, $db);

if ($conn->connect_error){
    die($conn->connect_error);
}
$message = $_POST['input-text'];
echo $message;
$conn->query("INSERT INTO `data` (`id`, `message`) VALUES (NULL, '$message') ");
?>