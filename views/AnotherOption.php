<?php

  
  $ctr = $_POST['ctr'];
 
    
    echo  '<p><b>Option name</b></p>';
    echo  "<input type='text' name='optionName$ctr' placeholder='option name' required>";
    echo "<br><br>
          <fieldset>
            <label><b>Option Type</b></label>
            <select name='OptionType$ctr'>
              <optgroup label='option Type'>
              <option value='text'>text</option>
              <option value='number'>number</option>
              <option value='email'>email</option>
              <option value='password'>password</option>
              <option value='file'>file</option>
              </optgroup>
            </select>
          </fieldset>
          <br><br>";
          echo "<input type='hidden' name ='ctr' value = '$ctr'>";
         
  
?>
