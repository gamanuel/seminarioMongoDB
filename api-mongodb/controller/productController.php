<?php

require_once 'controller.php';

class productController extends Controller {

  protected $response;

  public function __construct(){
    parent::__construct();
    $this->response = new stdClass();
  } 

  public function getProducts(){
    $this->response->data = $this->apiModel->getProducts();
    $this->response->status = 'success';

    print_r(json_encode($this->response));
    die();
  }

  public function addProduct(){
    $data = json_decode(file_get_contents('php://input'));
    $product = new stdClass();

    $product->name = $data->name;
    $product->description = $data->description;
    $product->stock = $data->stock;
    $product->price = $data->price;

    $this->response->data = $this->apiModel->addProduct($product);
    $this->response->status = 'success';

    print_r(json_encode($this->response));
    die();
  }

  public function updateProduct($params = []){
    $data = json_decode(file_get_contents('php://input'));
    $uid = $params[':uid'];

    $product = $this->apiModel->getProduct($uid);
    
    if(count($product) > 0){
      $product = $product[0];
      $product->name = $data->name;
      $product->description = $data->description;
      $product->stock = $data->stock;
      $product->price = $data->price;

      $this->response->data = $this->apiModel->updateProduct($uid,$product);
      $this->response->status = 'success';
    }
    else {
      $this->response->status = 'error - product not found';
    }

    print_r(json_encode($this->response));
    die();
  }

  public function getProduct($params = []){
    $uid = $params[':uid'];

    $product = $this->apiModel->getProduct($uid);
    
    if(count($product) > 0){
      $this->response->data = $product[0];
      $this->response->status = 'success';
    } 
    else {
      $this->response->status = 'error - product not found';
    }

    print_r(json_encode($this->response));
    die();
  }

  public function removeProduct($params = []){
    $uid = $params[':uid'];

    $product = $this->apiModel->getProduct($uid);
    
    if(count($product) > 0){
      $this->apiModel->removeProduct($uid);
      $this->response->status = 'success';
    } 
    else {
      $this->response->status = 'error - product not found';
    }

    print_r(json_encode($this->response));
    die();
  }
}