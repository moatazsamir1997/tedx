<?php
include('model/ProductTypeModel.php');
Class ProductTypeController extends Controller
{
    private $ProductTypeModel;
        
    public function __construct()
    {
        $this->ProductTypeModel = new ProductTypeModel();
    }
    public function store($request)
    {
        $this->ProductTypeModel->store($request);
        $productTypes = $this->ProductTypeModel->getColumnData('name');
        $this->view('productgeninsert', $productTypes);
    }   
    public function index()
    {
        $this->view('addProductType');
    }
}