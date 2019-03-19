<?php
include('backend\product\DBHelper.php');
require_once('app\interface\Icrud.php');
class ProductOptions extends DBHelper implements Icrud
{
    private $dataType;
    private $productIds;

    public function __construct()
    {
        $this->tableName = "productoptions";
        $this->columnNamesArr = array('name','dataType');
        $this->productIds = [];
    }

    public function store($request)
    {
       $this->name = $request['name'];
       $this->dataType = $request['dataType'];
       $this->columnValuesArr = array( $this->name, $this->dataType); 		
       DBHelper::insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);

    }
    public function insertProductId($ProductId)
    {
        array_push($this->productIds , $ProductId);
    }

    public function insertOptionsData($request , $productObj)
    {
        $db = Helper::getInstance();
        // $myRequest = [];
        for ($i=0; $i <$request['ctr'] ; $i++) { 
            $I = $i+1;
            $name = $request["optionName$I"];
            $dataType = $request["OptionType$I"];
            $db->query("  INSERT INTO `productoptions` (`name`,`dataType`) VALUES ('$name' ,'$dataType') "); 
            $productId = $productObj->getProductId($_POST['name']);
            $optionId = $this->getProductOptionId($name);
            $this->insertRelationData($productId['id'] , $optionId['id']);

        }
    }
    
    public function insertRelationData($productId , $optionId)
    {
        $db = Helper::getInstance();
        $db->query("  INSERT INTO `productselectedoptions` (`productId`,`optionsId`) VALUES ('$productId' , '$optionId') "); 
    }



    public function getProductOptionId($name)
    {
        return $this->getId($this->tableName , 'name' , $name);
    }

    

    public function update($request){}
    public function delete($request){}
    public function search($request){}

   
}
