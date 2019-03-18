<?php

 function AnotherAddress()
 {
  echo  '<select id="type">
  <option value="item0">--Select an Item--</option>
  <option value="item1">egypt</option>
  <option value="item2">item2</option>
  <option value="item3">item3</option>
</select>';
 }
 
 $func = $_POST['func'];

if(isset($_POST['AddressValue'])){
  if($_POST['AddressValue']=="item1"){
  // echo  '<option value="2">Cairo</option>
  // <option value="3">Alexandria</option>
  // <option value="4">Suez</option>
  // <option value="5">Giza</option>';
}
}

switch ($func) {
  case 'AnotherAddress':
        AnotherAddress(); 
      break;
  default:
      //function not found, error or something
      break;
}

  
?>
