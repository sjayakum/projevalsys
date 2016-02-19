<?php 

require 'newlogin.php';
session_destroy();
$http_ref = $_SERVER['HTTP_REFERER'];
header('Location: index.php');
?>
