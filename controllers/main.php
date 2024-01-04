<?php

namespace controllers;

class main{
    public function index(){
      $html=  file_get_contents('views/main.html');
      echo $html;
    }
}