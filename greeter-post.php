<?php
session_start();

echo '<pre>';
print_r($_POST); 
echo '</pre>';

$superval = strip_tags($_REQUEST['superhero']);
$creamval = strip_tags($_REQUEST['icecream']);
$tvval = strip_tags($_REQUEST['tv']);
$sportval = strip_tags($_REQUEST['sport']);

header("location:greeter.php");
exit;