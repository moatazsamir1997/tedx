<?php
include('model\DBHelper.php');
include('app\interface\Icrud.php');
class ProductOptionsValue extends DBHelper implements Icrud
{
    private $value;
    private $PrOPId;
    private $purchaseId;

    public function __construct()
    {
        $this->tableName = "productoptionsvalue";
        $this->columnNamesArr = array('value', 'productSelectedOptionsId', 'purchaseId');
    }
    public function insertValues( $prOpIdsArr , $request)
    {
        $db = Controller::getInstance();
        $ctr=0;
        foreach ($request as $key => $value) {
            if ($value != 'next') {
                if (is_string($value)) {
                    $value ="'$value'";
                }
                $this->value = $value;
                $this->PrOPId = $prOpIdsArr[$ctr];
                $this->purchaseId = 1;
                
                $sql = "INSERT `productoptionsvalue` (`value`, `productSelectedOptionsId`, `purchaseId`)
                VALUES($this->value , $this->PrOPId , $this->purchaseId )";
                var_dump($sql);
    
                $db->query($sql);
                $ctr++;
            }
        }
    }

    public function store($request)
    {
        # code...
    }
    public function update($request)
    {
        # code...
    }
    public function delete($request)
    {
        # code...
    }
    public function search($request)
    {
        # code...
    }

}
