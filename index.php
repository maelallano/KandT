<?php
include "includes/header.php";

require_once "connexion.php";

$request = 'SELECT `title`, `description`, `label`, `alt`, `src` FROM `pages` WHERE `id` = :id;';

$stmt = $conn->prepare($request);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['title'];

?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$row['title']?></h1>
            <p><?=$row['description']?></p>
            <span class="label label-danger"><?=$row['label']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$row['alt']?>" src="<?=$row['src']?>" data-holder-rendered="true">
    </div>
<?php include "includes/footer.php"?>

<?php