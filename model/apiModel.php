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

}
?>