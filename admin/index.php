<?php
session_start();
require_once 'function.php';
if (!(isset($_SESSION['login'])))
{
//идем на страницу авторизации
    header("Location: login.php");
    exit;
};
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Админка сайта</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-2">
            <img src="https://dummyimage.com/150x200/968096/000003.png&text=Admin+img" alt=""><br>
            Вы вошли как <?= $_SESSION['login']; ?> <br>
            <a href="exit.php">Выйти</a>
        </div>
        <div class="col-md-6">
            <a href="add.php">Добавить данные</a><br>
            <a href="edit.php">Редактировать данные страницы index</a>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<br>

</body>
</html>
