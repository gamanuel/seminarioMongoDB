<?php
require 'vendor/autoload.php';

class model {

  protected $mongo;

  public function __construct(){

    $this->mongo = new MongoDB\Client("mongodb://localhost:27017/?readPreference=primary&appname=MongoDB%20Compass&ssl=false");
    
    try {
      $this->mongo = $this->mongo->ecommerce;
     
    }
    catch (MongoDB\Driver\Exception\ConnectionTimeoutException $e) {
          // PHP cannot find a MongoDB server using the MongoDB connection string specified
          // do something here
    }
  }  

}         