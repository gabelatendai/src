<?php
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

//$province =$_SESSION['province'];
R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

$id = $_GET['id'];
 $init = R::findOne('players', 'id = ?', [$id]);
 R::trash( $init );
 print ("<script>window.alert('Successfully Deleted ')</script>");
print ("<script>window.location.assign('players.php')</script>");
?>