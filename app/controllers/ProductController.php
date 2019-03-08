<?php
include('model/ProductModel.php');
class ProductController extends Controller
{
    private $productModel;

    public function __construct(){
        $this->productModel = new ProductModel();
    }

    public function store($request)
    {
        $this->productModel->store($request);
        $this->index();
    }
    public function index()
    {
        $this->view('productgeninsert');
    }
}
