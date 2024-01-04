<?php
session_start();
ob_start();//__ для работы функции header();


//$_SESSION['test'] = 100;

//unset($_SESSION['cart']);





require_once 'config/db.php';
require_once 'config/routes.php';
require_once 'router.php';

//print_r($_SESSION);

