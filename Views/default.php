<?php
$racine  = __DIR__;

// echo $racine;
// die;
?>




<!-- HEAD   -->
<?php require_once  ROOT . '/Views/' . 'head.php'; ?>

<!-- HEADER   -->
<?php require_once ROOT . '/Views/' . 'header.php'; ?>


<div><?= $contenu ?></div>


<!-- NAVIGATEUR   -->
<?php
require_once  ROOT . '/Views/' . 'menu.php';
?>

<!-- FOOTER  -->
<?php require_once  ROOT . '/Views/' . 'footer.php'; ?>