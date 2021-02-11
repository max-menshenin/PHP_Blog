<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);}}
if (isset($_POST['password`'])) { $password = $_POST['password']; if ($password == '') { unset($password);}}
if (empty($login) or empty($password))
{
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    // подключаемся к базе
    include ("bd.php");
    $result = mysql_query("SELECT id FROM user", $db);















}
