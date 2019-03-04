<?php
session_start();

echo '<pre>';
print_r($_POST); 
echo '</pre>';

$superval = strip_tags($_POST['superhero']);
$creamval = strip_tags($_POST['icecream']);
$tvval = strip_tags($_POST['tv']);
$sportval = strip_tags($_POST['sport']);

header("location:greeter.php");
exit;