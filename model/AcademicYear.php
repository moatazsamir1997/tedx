<?php
include('product\DBHellper.php')
class AcademicYear extends DBHelper implements Icrud
{  

    public function __construct()
    {
        $this->tableName = 'academicyear';
    } 
    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}
    

    
        
}
