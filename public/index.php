<?php 
session_start();

define('CONTROL', true);

$routes = [
  'login'=> 'login.php',
  'home' => 'index.php'
];

include_once("../layout/head.php");
include_once("../layout/header.php");
include_once("../layout/background-image.php");
include_once("../layout/carousel.php");
include_once("../layout/card-box.php");
include_once("../layout/card-animais.php");
include_once("../layout/footer.php");