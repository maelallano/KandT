<?php
if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['label']) || empty($_POST['alt']) || empty($_POST['src'])) {
    header('Location: index.php?nopostdata');
    exit;
}

require_once 'connexion.php';

$request = "INSERT INTO `pages` (`title`, `description`, `label`, `alt`, `src`) VALUES (:title, :description, :label, :alt, :src);";

$stmt = $conn->prepare($request);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':label', $_POST['label']);
$stmt->bindValue(':alt', $_POST['alt']);
$stmt->bindValue(':src', $_POST['src']);
$stmt->execute();
header('Location: index.php?id='.$conn->lastInsertId());