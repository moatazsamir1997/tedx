<?php
include('model/ProductModel.php');
include('app\controllers\Controller.php');
class ProductController extends ProductModel
{
    
    public function store($request)
    {
        Parent::store($request);
        $this->config = new Controller();
        $this->config->view('addProductType');
    }
    public function index()
    {
        $this->config = new Controller();
        $this->config->view('productgeninsert');
    }
}
