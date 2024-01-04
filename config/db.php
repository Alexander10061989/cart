<?php
namespace config;

class db{
    protected function connect(){
        $pdo=new \PDO('mysql:host=localhost;dbname=shop','root','root');
        return $pdo;
    }
}