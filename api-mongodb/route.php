<?php
  require_once 'routeClass.php';
  require_once 'controller/productController.php';
  require_once 'controller/saleController.php';
  require_once 'controller/controller.php';
  
  $r = new Router();

  //CRUD PRODUCTS
  $r->addRoute("products", "GET", "productController", "getProducts");
  $r->addRoute("products/:uid", "GET", "productController", "getProduct");
  $r->addRoute("products", "POST", "productController", "addProduct");
  $r->addRoute("products/:uid", "PUT", "productController", "updateProduct");
  $r->addRoute("products/:uid", "DELETE", "productController", "removeProduct");
  
  //CRUD SALES
  $r->addRoute("sales", "GET", "saleController", "getSales");
  $r->addRoute("sales/:uid", "GET", "saleController", "getSale");
  $r->addRoute("sales", "POST", "saleController", "addSale");
  

  // Ruta default - debe ir al final 
  $r->addRoute("not-found", "GET", "controller", "getProducts");
  
  //run
  $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
