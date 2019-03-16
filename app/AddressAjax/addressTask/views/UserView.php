<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>address</title>
    <link rel="stylesheet" href="../styles/UserView.css">
    <script src="../SamePage/samePage.js"></script>
  </head>
  <body>  
    
    

    
      <!-- <form action="<?php //echo $GLOBALS['ASSET'].$GLOBALS['user'] ?>" method="POST">
        <h3>Add address</h3>
        <select name="country">
          <option value="1">egypt</option>
        </select>
        <select name="city">
          <option value="2">Cairo</option>
          <option value="3">Alexandria</option>
          <option value="4">Suez</option>
          <option value="5">Giza</option>
        </select>
        <input type="submit" name="insert" value="insert">
      </form>	
       -->
    
       <div id="parentForm" >
       <form  method="post"  enctype="multipart/form-data">

<fieldset>

    <h2 class="Form_Title">  Personal Information </h2>
    <h3 class="Form_Subtitle"> Step 1 </h3>

    <input type="text" name="firstName" placeholder="First name" required title="EX: Mohamed">

    <input type="text" name="lastName" placeholder="Last name" required title="EX: Ahmed">

    <input type="text" name="familyName" placeholder="Family Name" required title="EX: El-Shenawy">

    <input type="radio" name="gender" value="Male" />  Male 
    <input type="radio" name="gender" value="Female" />  Female 

    <input type="text" name="nationality" placeholder="Nationality" required title="EX: Bulgarian , Ethiopian ,..">

    <input type="date" class="Input_Number" name="dateOfBirth" placeholder="Date of Birth" required title="EX:Month/Day/Year">

    <input type="number" class="Input_Number" name="phoneNumber" placeholder="Phone Number" required title="EX:01236879841" >

    <input type="number" class="Input_Number" name="HomeNumber" placeholder="Home Number"  required title="EX:01236879841" >

    <input type="number" class="Input_Number" name="ssn" placeholder="SSN"  required title="EX:27925425492572">

    <input type="button" name="backE" id="backE" value="Get Back">      

    <input type="button" name="NextEmployee" class="NextEmployee" value="Next">

</fieldset>

<fieldset>

    <h2 class="Form_Title">  Address Information </h2>
    <h3 class="Form_Subtitle"> Step 2 </h3>

    <input type="text" name="region" placeholder="Region"  required title="EX:Giza , Heliopolis ,...">

    <input type="text" name="streetName" placeholder="Street Name">

    <input type="number"  class="Input_Number" name="buildingNumber" placeholder="Building Number">

    <input type="number" class="Input_Number" name="flatNumber" placeholder="Flat Number">

    <input type="number" class="Input_Number" name="apartmentNumber" placeholder="Apartment Number">

    <input type="number" class="Input_Number" name="postalCode" placeholder="Postal Code">

    <input type="button" name="PreviousEmployee" class="PreviousEmployee" value="Previous" >

    <input type="button" name="NextEmployee" class="NextEmployee" value="Next" >

    

</fieldset>

<fieldset>

    <h2 class="Form_Title"> Applicant Information </h2>
    <h3 class="Form_Subtitle"> Step 3 </h3>

    <input type="text" name="university" placeholder="University">

    <input type="text" name="universityDegree" placeholder="University Degree">

    <input type="number" class="Input_Number" name="graduationYear" placeholder="Graduation Year">

    <select id="Dropdown" name="department">
        <option value="">Select your department</option>
        <option value="1">Accounting</option>
        <option value="2">HR</option>
        <option value="3">IT</option>
        <option value="4">Marketing</option>
        <option value="5">Medical</option>
        <option value="6">PR</option>
        <option value="7">Security</option>
        <option value="8">Teaching</option>
        <option value="9">Transportation</option>
    </select>

    C.V:
    <input id="C.V" type="file" name="cv" onBlur="alertCV()">

    <textarea rows="4" cols="50" name="skills">Skills</textarea>

    <input type="number" class="Input_Number" name="bankAccount" placeholder="Bank Account">

    Medical Test:
    <input id="MedicalTest" type="file" name="medicalTest" onBlur="alertMedic()">
    
    <input type="button" name="PreviousEmployee" class="PreviousEmployee" value="Previous" >

    <input type="button" name="NextEmployee" class="NextEmployee" value="Next" >

</fieldset>

<fieldset>

    <h2 class="Form_Title">  Account Information </h2>
    <h3 class="Form_Subtitle">Final Step </h3>

    <input type="email" name="email" id="email" placeholder="Email" onBlur="checkAvailability()">
    <div id="msg"></div>

    <input type="password" name="password" placeholder="Password">

    <input type="password" name="confirmPassword" placeholder="Confirm Password">

    <input type="button" name="Previous" class="Previous" value="Previous">

    <input type="submit" name="registerEmployee" value="register">

</fieldset>

</form>
</div>
<script src="../SamePage/samePage2.js"></script>
    
  </body>
</html>

