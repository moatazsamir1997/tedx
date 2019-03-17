<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
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
    
       <form id="msform" action="<?php //echo $GLOBALS['ASSET'].$GLOBALS['user'] ?>" method="POST">
    <!-- progressbar -->
    <!-- <ul id="progressbar">
      <li class="active">Address Setup</li>
      <li >Social Profiles</li>
      <li >Personal Details</li>
    </ul> -->
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Add address</h2>
      <h3 class="fs-subtitle">This step 1</h3>
      <select name="country">
          <option value="1">egypt</option>
        </select>
        <select name="city">
          <option value="2">Cairo</option>
          <option value="3">Alexandria</option>
          <option value="4">Suez</option>
          <option value="5">Giza</option>
        </select>
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset style="display: none;">
      <h2 class="fs-title">Social Profiles</h2>
      <h3 class="fs-subtitle">Your presence on the social network</h3>
      <select name="country">
          <option value="1">egypt</option>
        </select>
        <select name="city">
          <option value="2">Cairo</option>
          <option value="3">Alexandria</option>
          <option value="4">Suez</option>
          <option value="5">Giza</option>
        </select>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset style="display: none;">
      <h2 class="fs-title">Personal Details</h2>
      <h3 class="fs-subtitle">We will never sell it</h3>
      <select name="country">
          <option value="1">egypt</option>
        </select>
        <select name="city">
          <option value="2">Cairo</option>
          <option value="3">Alexandria</option>
          <option value="4">Suez</option>
          <option value="5">Giza</option>
        </select>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
      <input type="submit" name="insert"  class="submit action-button" value="insert">
    </fieldset>
  </form>
<script src="../SamePage/samePage2.js"></script>
    
  </body>
</html>

