<?php
 $func = $_POST['func'];
 function AnotherAddress()
 { if(isset($_POST['AddressValue'])){
  if($_POST['AddressValue']=="item1"){
  echo  '<br>
  <select id="city">
  <option value="0">-- select a city -- </option>
  <option value="1">Cairo</option>
  <option value="2">Alexandria</option>
  <option value="3">Suez</option>
  <option value="4">Giza</option>
</select>
<br><br>';
 }
}
 }
 

function AnotherAddress2()
{
  if(isset($_POST['AddressValue'])){
    if($_POST['AddressValue']=="1"){
echo  '<br>
<select id="region">
<option value="0">-- select a Region -- </option>
<option value="1">Masr El Gedida</option>
<option value="2">Madinet Nasr</option>
<option value="3">Korba</option>
<option value="4">Sheraton</option>
</select>
<br><br>';
}
}
}
// if(isset($_POST['AddressValue'])){
//   if($_POST['AddressValue']=="item1"){
//   echo  '<option value="2">Cairo</option>
//   <option value="3">Alexandria</option>
//   <option value="4">Suez</option>
//   <option value="5">Giza</option>';
// }
// }

switch ($func) {
  case 'AnotherAddress':
        AnotherAddress(); 
      break;
  case 'AnotherAddress2':

  default:
        echo "error";
      break;
}

  
?>
