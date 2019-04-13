



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

  <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 8]>
  <script src="res/js/modernizr.min.js"></script>
  <![endif]-->
</head>

  


<body id="page-top">
  <!-- Navigation Start -->
  <nav id="navigation" class="navbar navbar-fixed-top navbar-dark">
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
        <div id="navbar" class="navbar-collapse collapse col-lg-9 pull-right">
          <ul class="nav navbar-nav font-family-alt letter-spacing-1 text-uppercase font-weight-700">
              <li><a href="../tedx/about" class="line-height-unset">About</a></li>
              <li><a href="../tedx/product" class="line-height-unset">Product</a></li>
              <li><a href="../tedx/contact" class="line-height-unset">contact</a></li>
              <li><a href="../tedx/ourTeam" class="line-height-unset">ourTeam</a></li>
              <li><a href="../tedx/speakers" class="line-height-unset">speakers</a></li>
              <li class="bg-base-color">
                  <a href="../tedx/register" class="line-height-unset width-100">
                  Register
                  </a>
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

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

            <!-- <link rel="shortcut icon" href="res\images\icons\product.png"/> -->
            <link rel="stylesheet" type="text/css" href="res\css\addproduct.css">
            <!-- <link rel="stylesheet" type="text/css" href="res\css\addproduct.css"> -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            
        
    </head>


	
		<div class="addproduct" >
			<h1><b>Add Product</b></h1>
			<br><br>
			<hr><br>
			<form id="form" action='../tedx/addNewProduct/submit' method='POST'>
				<p><b>product name </b></p>
				<input type="text" name="name" placeholder="Enter product name here" required>
				<br><br>
				<fieldset>
					<label id='productTypeLabel'><b>Product Type</b></label>
					<select onchange="myFunction()" id="mySelect" name="productTypeId">
						<optgroup label="Product Type">
						<option value="0">add new product Type</option>
						 
						
							<option value="133">mohamed</option>
						 
							<option value="134">s</option>
						 
							<option value="135">tickets</option>
						 
							<option value="136">tickets</option>
						 
							<option value="137">tickets</option>
						 
							<option value="138">dd</option>
						 
							<option value="139">dd</option>
						 
							<option value="140">tickets</option>
						 
							<option value="141">tita</option>
						 
							<option value="142">zahaby</option>
												</optgroup>
					</select>	
					
					<div id = 'productType' ></div>
					
				</fieldset>
				<label><b>Quantity:</b></label>
				<input type="number" name="quantity" placeholder="quantity" required>
				<label><b>price:</b></label>
				<input type="number" name="price" placeholder="price" required>
				<div id="product"></div><br>				<button class="submit" type="submit" name="next" value="submit">next</button>
				<br><br>

				</select>
			</form>
			<button type="button" name="AnotherOption"  id="AnotherOption">add Option</button>';
			

		</div>
	

	
	<script>
		document.getElementById("mySelect").selectedIndex = "-1";
	

		var myctr=1;
		$(document).ready(function () {
			$("#AnotherOption").click(function () {
				$.ajax({
					type: 'POST',
					data:({ctr: myctr}),
					url: 'views/AnotherOption.php',

					success: function (data) {

						$("#product").append(data);
					}

				});
				myctr++;
			});
		});
		var br = document.createElement("BR");
		var p = document.createElement("P");
		var b = document.createElement("B");
		var t = document.createTextNode("New Type name");
		var input = document.createElement("INPUT");
		var btn = document.createElement("BUTTON");
		var form = document.getElementById("form");
		var select = document.getElementById("mySelect");
		function myFunction() 
		{
			var x = document.getElementById("mySelect").value;
			if (x == 0) {
				b.appendChild(t);
				p.appendChild(b);
				input.setAttribute("type", "text");
				input.setAttribute("id", "newType");
  				input.setAttribute("name", "productType World!");
  				input.setAttribute("placeholder", "Enter product Type name here");
  				input.setAttribute("required", true);
				btn.setAttribute('id','submitType');
				btn.innerHTML = "submit type";   
				btn.setAttribute('onclick','addType();'); // for FF
    			btn.onclick = function() {addType();}; // for IE
				document.getElementById("productTypeLabel").style.display = 'none';
				select.style.display = 'none';
				form.insertBefore(p, form.childNodes[9]);
				form.insertBefore(input, form.childNodes[10]);
				form.insertBefore(btn, form.childNodes[11]);
				form.insertBefore(br, form.childNodes[12]);
				// = "<input  type='text'   name='productType' placeholder='Enter product Type name here' required> <button type='submit' name='submitProductTypeName'>submit</button>";
			}
		}
		function addType() {
			form.removeChild(p);
			form.removeChild(input);
			form.removeChild(br);
			form.removeChild(btn);
			document.getElementById("productTypeLabel").style.visibility = 'visible';
			document.getElementById("productTypeLabel").style.display = 'inline';
			select.style.display = 'inline';
			select.selectedIndex = "-1";
		}
	</script>


    <!-- Section - Event banner start -->
    <section id="event-banner" class="bg-white pull-up">
        <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
            <i class="fa fa-clock-o display-block text-base-color title-extra-large-2"></i>
            <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
                Date &amp; Time
            </span>
            <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
                October 16, 2019<br>
                10 AM to 5 PM
            </p>
            </div>
            <!-- //.col-sm-4 -->
            <div class="col-sm-4 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
            <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
            <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
                Venue
            </span>
            <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
                Fifth Settelment
            </p>
            </div>
            <!-- //.col-sm-4 -->
        </div>
        <!-- //.row -->
        </div>
    </section>
    <!-- //Section - Event banner end -->



    <!-- Footer Start -->
    <footer class="footer bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer-logo xs-text-center">
            <img src="res/images/logos/TEDx.png" alt="tedxLogo">
          </div>
          <!-- //.footer-logo -->
          <p class="disclaimer xs-text-center">
            This independent TEDx event is operated under license from TED.
          </p>
          <!-- //.disclaimer -->
        </div>
        <!-- //.col-sm-4 -->

        <div class="col-sm-8">
          <div class="footer-social text-right">
            <ul class="list-inline list-unstyled no-margin xs-text-center xs-title-small title-medium">
              <li><a href="https://www.facebook.com/TEDxManaratAlFarouk/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/tedxmanaratalfaroukschool/?fbclid=IwAR1UN4gf8oagbH3JKQeLcV3InzKxdlFD7q-S9dgv2MkKI8vjhDSkHgggR5U"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <!-- //.footer-social -->
        </div>
        <!-- //.col-sm-8 -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </footer>
  <!-- //Footer End -->


  <!-- Scroll to top -->
  <a href="#page-top" class="page-scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>


  <!-- jQuery -->
  <script src="res/js/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="res/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="res/js/pace.min.js"></script>
  <script src="res/js/debouncer.min.js"></script>
  <script src="res/js/jquery.easing.min.js"></script>
  <script src="res/js/jquery.inview.min.js"></script>
  <script src="res/js/jquery.matchHeight.js"></script>
  <script src="res/js/isotope.pkgd.min.js"></script>
  <script src="res/js/imagesloaded.pkgd.min.js"></script>
  <script src="res/js/flickity.pkgd.min.js"></script>
  <script src="res/js/jquery.magnific-popup.min.js"></script>
  <script src="res/js/jquery.validate.min.js"></script>

  <!-- BG Parallax JS -->
  <script src="res/js/TweenMax.min.js"></script>
  <script src="res/js/ScrollMagic.min.js"></script>
  <script src="res/js/animation.gsap.min.js"></script>

  <!-- Theme -->
  <script src="res/js/main.js"></script>

  <!-- Countdown -->
  <script src="res/js/jquery.countdown.min.js"></script>
  <script src="res/js/countdown.js"></script>

</body>

</html>
