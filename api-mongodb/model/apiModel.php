<?php

require_once 'model.php';

class apiModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getProducts(){
        return $this->mongo->products->find()->toArray();
    }

    public function addProduct($product){
        $response = $this->mongo->products->insertOne($product);
        return $response->getInsertedId();
    }

    public function updateProduct($uid,$product){
        $response = $this->mongo->products->updateOne(['_id'=> new \MongoDB\BSON\ObjectID($uid)],['$set'=> $product]);
        return $this->getProduct($uid);
    }

    public function getProduct($uid){
        return $this->mongo->products->find(['_id'=> new \MongoDB\BSON\ObjectID($uid)])->toArray();
    }

    public function removeProduct($uid){
        return $this->mongo->products->deleteOne(['_id'=> new \MongoDB\BSON\ObjectID($uid)]);
    }

    public function getSales(){
        $sales = $this->mongo->sales->find()->toArray();
        for ($i=0; $i < count($sales); $i++) { 
            for ($e=0; $e <count($sales[$i]['products']) ; $e++) { 
                $sales[$i]['products'][$e] = $this->getProduct( $sales[$i]['products'][$e]);
            }
        }
       
        return $sales;                
    }

    public function getSale($uid){
        $sale = $this->mongo->sales->find(['_id'=> new \MongoDB\BSON\ObjectID($uid)])->toArray();

        for ($e=0; $e <count($sale[0]['products']) ; $e++) { 
            $sale[0]['products'][$e] = $this->getProduct( $sale[0]['products'][$e]);
        }

        return $sale;
    }

    public function addSale($sale){
        $date = date("Y-m-d h:i:sa"); //Current Date
        $a = new MongoDB\BSON\UTCDateTime(strtotime($date));
        $response = $this->mongo->sales->insertOne(["createdAt" => $a, "products" => $sale->products,"shippingAddress" => $sale->shippingAddress, "total" => $sale->total]);
        return $response->getInsertedId();
    }

    
}
?>