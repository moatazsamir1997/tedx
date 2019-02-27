<?php


$con = new mysqli("localhost", "root", "","crudtask");



class Address
{

  public function getAddress($addressId)
  {
     if ($addressId!=0) {

       $sql="select * from address where `id`= '".$addressId."'  ";
       $result = mysqli_query($con,$sql);
       if(mysqli_num_rows($result) > 0)
       {

       	while($row = mysqli_fetch_array($result))
       	{

       	 $addressId=$row['parentId'];



        }

getAddress($addressId);
     }
  }

}
}





 ?>
 <form  method="post">


        <h3>Add address</h3>
        <select>
  <option value="egypt">Egypt</option>
</select> 
<select>
  <option value="cairo">Cairo</option>
  <option value="alexandria">Alexandria</option>
</select> 
      



 </form>
