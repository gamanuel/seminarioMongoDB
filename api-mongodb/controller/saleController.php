<?php

require_once 'controller.php';

class saleController extends Controller {

    protected $response;

    public function __construct(){
        parent::__construct();
        $this->response = new stdClass();
    } 

    public function getSales(){
        $this->response->data = $this->apiModel->getSales();
        $this->response->status = 'success';

        print_r(json_encode($this->response));
        die(); 
    }

    public function getSale($params = ['']){
        $uid = $params[':uid'];

        $sale = $this->apiModel->getSale($uid);
        
        if(count($sale) > 0){
        $this->response->data = $sale[0];
        $this->response->status = 'success';
        } 
        else {
        $this->response->status = 'error - sale not found';
        }

        print_r(json_encode($this->response));
        die();
    }

    public function addSale(){
        $data = json_decode(file_get_contents('php://input'));
        $sale = new stdClass();
        /* print_r($data->products);
        die(); */
        $total = 0;
        for ($i=0; $i <count($data->products) ; $i++) { 
            $product = $this->apiModel->getProduct($data->products[$i]);
            if(count($product) > 0){
                $total =  $product[0]->price +  $total;
            }
            else {
                $this->response->status = 'error - product not found';
                print_r(json_encode($this->response));
                die();
            }
        }
        
        $sale->products = $data->products;
        $sale->shippingAddress = $data->shippingAddress;
        $sale->total = $total;

        $this->response->data = $this->apiModel->addSale($sale);
        $this->response->status = 'success';

        print_r(json_encode($this->response));
        die();
    } 

}