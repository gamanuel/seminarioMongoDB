<?php
  require_once 'routeClass.php';
  require_once 'controller/productController.php';
  
  $r = new Router();

  //CRUD PRODUCTS
  $r->addRoute("get-products", "GET", "productController", "getProducts");
  $r->addRoute("get-product/:uid", "GET", "productController", "getProduct");
  $r->addRoute("add-product", "POST", "productController", "addProduct");
  $r->addRoute("update-product/:uid", "PUT", "productController", "updateProduct");
  $r->addRoute("remove-product/:uid", "DELETE", "productController", "removeProduct");
  
  // Ruta default - debe ir al final 
  $r->addRoute("not-found", "GET", "productController", "getProducts");
  
  //run
  $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
