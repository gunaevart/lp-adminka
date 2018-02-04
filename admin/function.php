<?php

function getItem($log){
    $host = 'http://localhost/lp.loc';
    $f = file($host.'/admin/index.txt'); // Открываем нужный фаил и получаем масив данных
    foreach ($f as $item){

        $log = explode(":", $item); // Разбиваем массив на значения функцией explode

        return $log; // Возращаем готовые данные

    }
    
}

function addItem($title, $price, $logoTitle, $text){

    if(count($_POST) > 0){

        if(!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['logoTitle']) && !empty($_POST['text'])){

            $title = $_POST['title'];
            $logoTitle = $_POST['logoTitle'];
            $price = $_POST['price'];
            $text = $_POST['text'];

            file_put_contents('index.txt', $title.':'.$price.':'.$logoTitle.':'.$text);
        }
        else{
            echo 'Вы ввели не все данные';
        }

    }
}
function getEdit($title, $price, $logoTitle, $text){

    if(count($_POST) > 0){

        if(!empty($_POST['title']) && !empty($_POST['price']) && !empty($_POST['price']) && !empty($_POST['text'])){

            $title = $_POST['title'];
            $price = $_POST['price'];
            $logoTitle = $_POST['logoTitle'];
            $text = $_POST['text'];

            file_put_contents('index.txt', $title.':'.$price.':'.$logoTitle.':'.$text);
            header("Location: edit.php");
        }
        else{
            echo 'Вы ввели не все данные';
        }

    }

}
function login($login, $pass){

    if(count($_POST) > 0) {
        if($_POST['login'] == 'admin' && $_POST['pass'] == 'admin'){
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
            header("Location: index.php");
        }else{
            echo 'Данные не верны';
        }

    }

}
