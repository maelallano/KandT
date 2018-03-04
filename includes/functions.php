<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/02/2018
 * Time: 16:54
 */
require_once 'connexion.php';
if (!$_GET['id']) {
    header('Location: index.php?id=1');
    exit;
}

function addActive($page, $text)
{
    $activeClass = '';
    if ($page === 'index.php?id=' . $_GET['id']) {
        $activeClass = ' class="active"';
    }
?>
    <li<?=$activeClass?>><a href="<?=$page?>"><?=$text?></a></li>
<?php
}