<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>site animalier</title>
</head>
<body>
<?php require 'PHP/config.php'; ?>
<nav>
    <button id="btMenu">menu</button>
    <ul id="menu">
        <?php
            foreach($nav as $value){
                echo '<li><a href="' . $value['link'] . '.php">' . $value['name'] . '</a></li>';
            }
        ?>
    </ul>
</nav>

<main>