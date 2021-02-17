<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Блог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<a href="add.php">Добавить новость</a>
<?php
    if ($_SESSION['login'] == 'ok'):
?>
<h1>Форма регистрации</h1>
<form action="db.php" method="post">
    <input type="text" class="form-control" name="login" id="login"
           placeholder="Enter login">
    <br>
    <input type="text" class="form-control" name="name" id="name"
           placeholder="Enter name">
    <br>
    <input type="password" class="password" name="pass" id="pass"
           placeholder="Enter pass">
    <br>
    <button class="btn btn-success" type="submit">Submit</button>
    <br>
</body>
<?php endif; ?>
</html>