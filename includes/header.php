<?php
require_once "functions.php";

require_once './connexion.php';

$request = 'SELECT `id`, `title`, `description`, `label`, `alt`, `src` FROM `pages`';

$stmt = $conn->prepare($request);
$stmt->execute();
/*$row = $stmt->fetch(PDO::FETCH_ASSOC);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?id=1">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
                    <?php addActive('index.php?id=' . $row['id'], $row['title'])?>
                <?php endwhile;?>
                <li><a href="add.php">add</a></li>

                <?php /* addActive('index.php?'.$row['id'], $row['description'])?>
                <?php addActive('kittens.php', 'Chatonse')?>
                <?php addActive('ironmaiden.php', 'Iron Maidennnnn')?>
                <?php addActive('tokyo.php', 'Tokyo')?>
                <li><a href="indexSoon.php?id=3">Oui</a></li>

                <?php addActive('add.php', 'add')*/ ?>
            </ul>
        </div>
    </div>
</nav>