<?php
session_start();

/*$superval = strip_tags($_POST['superhero']);
$creamval = strip_tags($_POST['icecream']);
$tvval = strip_tags($_POST['tv']);
$sportval = strip_tags($_POST['sport']);*/

echo '<pre>';
var_dump($_POST);
echo '</pre>';

header("location:greeter.php");
exit;