<?php require_once 'function.php'; ?>
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
        <div class="col-md-12">
            <form action="" method="post">
                Введите SEO Title :<input type="text" name="title" value="<?=$_POST['title'];?>"><br>
                Введите Заголовок :<input type="text" name="price" value="<?=$_POST['price'];?>"><br>
                Введите Заголовок Сайта :<input type="text" name="logoTitle" value="<?=$_POST['logoTitle'];?>"><br>
                Введите текст текст блок-1:
                <textarea name="text" id="textarea" cols="50" rows="10" name="area2"><?=getItem($log)[3];?></textarea><br>
                <? addItem($title, $price, $logoTitle, $text) ?>
                <div id="sample">
                    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
                    <script type="text/javascript">
                        //<![CDATA[
                        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                        //]]>
                    </script>
                <input type="submit" name="submit" value="Добавить новые данные">
            </form>
        </div>
    </div>
</div>
</body>
</html>