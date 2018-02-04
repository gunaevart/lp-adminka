<?php
session_start();
require_once 'function.php';

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
    <title>Вход</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="mt-5" action="" method="post">
                <h2 class="text-center">АВТОРИЗАЦИЯ</h2>
                <div class="form-group">
                    <label for="exampleInputEmail1">Введите Ваш логин</label>
                    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="login">
                    <small id="emailHelp" class="form-text text-muted">введите ваши данные для входа в админ зону</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Введите Ваш пароль</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit"  class="btn btn-primary">Войти</button>
                <?login($login, $pass);?>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<br>

</body>
</html>
