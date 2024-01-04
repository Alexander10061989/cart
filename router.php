<?php


$y = trim($_SERVER['REQUEST_URI'], '/');


if ($y == "") {
    $x = explode(':', $routes['main']);
} else {
    $section = explode('/', $y);
    if (count($section) == 2) {
        $y = $section[0] . '/*';
        define('ARGUMENT', $section[1]);
    }

    if (isset($routes[$y])) {
        $x = explode(':', $routes[$y]);
    } else {
        die('error 404');
    }
}


$file=str_replace('\\','/',$x[0]).'.php';
$class=$x[0];
$method=$x[1];

if(file_exists($file)){
    require_once $file;


    if(class_exists($class)&&method_exists($class,$method)){
        $z=new $class;
        $z->$method();
    }else{

        die('class or method not found');
    }


}else{
    die('controller not found');
}


