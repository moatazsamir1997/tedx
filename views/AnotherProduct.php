<?php

  
  $ctr = $_POST['ctr'];
 
    
    echo  '<p><b>Opton name</b></p>';
    echo  "<input type='text' name='optionName.$ctr' placeholder='option name' required>";
    echo "<br><br>
          <fieldset>
            <label><b>Option Type</b></label>
            <select name='OptionType.$ctr'>
              <optgroup label='option Type'>
              <option value='shirt'>shirt</option>
              <option value='cups'>cups</option>
              <option value='ticket'>ticket</option>
              </optgroup>
            </select>
          </fieldset>
          <br><br>";
         
      

var_dump($ctr);
  
  
?>
