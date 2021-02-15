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
<?php
if ($_SESSION['user'] == 'ok'):
?>
<form action="bd.php" method="post">
    <input type="text"><br>
    <button type="submit" class="btn btn-primary">Primary</button>
    <textarea name="input-text" cols="10">
        area
    </textarea>
    <input name="login">
</form>
</body>
<?php endif; ?>
</html>