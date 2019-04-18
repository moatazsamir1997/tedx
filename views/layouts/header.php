<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Title, icon, description and keywords -->
  <title>TEDxManaratAlfaroukSchool</title>
  <link rel="shortcut icon" href="res/images/favicon.ico">
 
  <!-- Browser themes -->
  <meta name="theme-color" content="#000">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="res/css/bootstrap.min.css">

  <!-- Font Icons -->
  <link rel="stylesheet" href="res/css/font-awesome.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="res/css/flickity.min.css">
  <link rel="stylesheet" href="res/css/magnific-popup.css">

  <!-- Main styles -->
  <link rel="stylesheet" href="res/css/main.css">
  <link rel="stylesheet" href="res/css/style.css">

  <!-- Color skin -->
  <link rel="stylesheet" href="res/css/color_red.css">
  <link rel="stylesheet" href="res\css\dropdownForm.css">
  
  <script type="text/javascript">
    // Prevent dropdown menu from closing when click inside the form
    $(document).on("click", ".navbar-right .dropdown-menu", function(e){
      e.stopPropagation();
    });
  </script>
  <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 8]>
  <script src="res/js/modernizr.min.js"></script>
  <![endif]-->
</head>

  


<body id="page-top" >
  <!-- Navigation Start -->
  <nav id="navigation" class="<?php echo $_SERVER['REQUEST_URI'] == ($GLOBALS['tedx'].$GLOBALS['about']) ? "navbar navbar-fixed-top" : "navbar navbar-fixed-top navbar-dark";?>">
    <div class="container">
      <div class="row">
        <div class="navbar-header col-lg-3">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand font-family-alt letter-spacing-1 text-extra-large text-uppercase" href="#">
            <img class="logo-navbar-dark" src="res/images/logos/tedx-logo.png" alt="TEDx"/>
            <img class="logo-navbar-white" src="res/images/logos/TEDx.png" alt="TEDx"/>
          </a>
        </div>
        <!-- //.navbar-header -->
        <div id="navbar" class="navbar-collapse collapse col-lg-9 col-sm-12 col-md-12 pull-right">
          <ul class="nav navbar-nav font-family-alt letter-spacing-1 text-uppercase font-weight-700">
              <li><a href="<?php echo $GLOBALS['ASSET'].$GLOBALS['about']; ?>" class="line-height-unset headerTextcolor">About</a></li>
              <li><a href="<?php echo $GLOBALS['ASSET'].$GLOBALS['product']; ?>" class="line-height-unset headerTextcolor">Product</a></li>
              <li><a href="<?php echo $GLOBALS['ASSET'].$GLOBALS['contact']; ?>" class="line-height-unset headerTextcolor">contact</a></li>
              <li><a href="<?php echo $GLOBALS['ASSET'].$GLOBALS['ourTeam']; ?>" class="line-height-unset headerTextcolor">ourTeam</a></li>
              <li><a href="<?php echo $GLOBALS['ASSET'].$GLOBALS['speakers']; ?>" class="line-height-unset headerTextcolor">speakers</a></li>
              <li class="bg-base-color">
                  <a href="<?php echo $GLOBALS['ASSET'].$GLOBALS['register']; ?>" class="line-height-unset headerTextcolor width-100">
                  Register
                  </a>
              </li>
              <li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Sign in by your social media account</p>
							<div class="form-group social-btn clearfix">
								<a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
								<a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
							</div>
							<div class="or-seperator"><b>or</b></div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
							<input type="submit" class="btn btn-primary btn-block" value="Login">
							<div class="form-footer">
								<a href="#">Forgot Your password?</a>
							</div>
						</form>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
				<ul class="dropdown-menu form-wrapper">					
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Fill in this form to create your account!</p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" required="required">
							</div>
							<!-- <div class="form-group">
								<label class="checkbox-inline">
                  <input type="checkbox" required="required" > 
                  <a class = "Iaccept" href="#">I accept the Terms &amp; Conditions</a>
                </label>
							</div> -->
							<input type="submit" class="btn btn-primary btn-block" value="Sign up">
						</form>
					</li>
				</ul>
			</li>
          </ul>
      </div>
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </nav>
  <!-- //Navigation End -->
