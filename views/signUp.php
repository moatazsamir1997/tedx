<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
  <!-- <link rel="stylesheet" href="../Home Page design/style.css">     -->
  <link rel="stylesheet" href="Registration.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

  <!-- <script src="Registration.js"></script> -->


</head>

<body>
  <!-- multistep form -->
  <form action = "<?php echo $GLOBALS['ASSET'].$GLOBALS['signup'].$GLOBALS['submit']; ?>" id="msform" method="POSt">
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Account Setup</li>
      <li>Personal Details</li>
      <li>Submitting</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h2 class="fs-title">Enter Your Name</h2>
      <h3 class="fs-subtitle">This is step 1</h3>
      <input type="text" name="userName" placeholder="User Name" />
      <input type="text" name="email" placeholder="Email" />
      <input type="password" name="pwd" placeholder="Password" />
      <input type="password" name="cpwd" placeholder="Confirm Password" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title"></h2>
      <h3 class="fs-subtitle">Enter the account</h3>
      <input type="text" name="fname" placeholder="First Name" />
      <input type="text" name="lname" placeholder="Last Name" />
      <!-- <input type="text" name="age" placeholder="Age" /> -->
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
      <h2 class="fs-title">Personal Details</h2>
   
      <input type="text" name="userTypeId" placeholder="userTypeId" />
      <input type="text" name="userAddressId" placeholder="userAddressId" />
      <input type="text" name="genderId" placeholder="genderId" />
      <input type="text" name="departmentId" placeholder="departmentId" />
      <input type="text" name="eventId" placeholder="eventId" />
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
  </form>
  
  <script src="Registration.js"></script>
</body>

</html>