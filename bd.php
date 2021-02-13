<?php
$servername = "localhost";
$username = "root";
$pass = "root";
$db = "blog";
$conn = new mysqli($servername, $username, $pass, $db);

if ($conn->connect_error){
    die($conn->connect_error);
}
$conn->query("INSERT INTO `data` (`id`, `message`) VALUES (NULL, 'testymessage') ");
echo "string";
?>