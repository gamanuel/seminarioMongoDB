<?php

require_once './model/apiModel.php';

define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

class controller {

  public function __construct(){
    $this->apiModel = new apiModel();
  } 
}