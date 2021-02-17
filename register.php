<?php
    session_start(); ?>
<form action="index.php" method="post">
    <h1>Registration form</h1>
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
</form>