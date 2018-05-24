<?php
    $userName = 'Дмитрий';
    $userAge = '41';
    $userMail = 'daina-r@yandex.ru';
    $userCity = 'Москва';
    $userAbout = 'художник';
?>
<!DOCTYPE>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?= $userName ?> - <?= $userAbout ?></title>
            
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
        
    </head>
    <body>

        <h1>Страница пользователя <?= $userName ?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $userName ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $userAge ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><?= $userMail ?></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $userCity ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $userAbout ?></dd>
        </dl>
            
    </body>
</html>
