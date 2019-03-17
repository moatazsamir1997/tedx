<?php

 
 
  
 

  echo  '	<h1><b>Add Another Product</b></h1>
  <p><b>product name </b></p>
  <input type="text" name="productname" placeholder="Enter product name here" required>
  <br><br>
  <fieldset>
    <label for="productType"><b>Product Type</b></label>
    <select id="productType" name="productType">
      <optgroup label="Product Type">
      <option value="shirt">shirt</option>
      <option value="cups">cups</option>
      <option value="ticket">ticket</option>
      </optgroup>
    </select>
  </fieldset>
  <br><br>
  
  <br><br>
  <p><b>Add Number of Options</b></p>
  <input type="number" name="optionNumbers" min="1" placeholder="Enter number of options here">
  <br><br>




  <br><br>
  
';
  
?>
