
<head>
	<link rel="shortcut icon" href="res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="res\css\addproduct.css">
	<link rel="shortcut icon" href="..\res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="..\res\css\addproduct.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body background="res\images\addproduct.jpg" >

	<div class="addproduct">
		<h1><b>Add Product</b></h1>
		<br><br><hr><br>	
		<form action ='<?php echo$GLOBALS['ASSET'].$GLOBALS['addNewProduct'].$GLOBALS['submit'];?>' method ='POST'>
			<p><b>product name </b></p>
			<input type="text" name="productname" placeholder="Enter product name here" required>
			<br><br>
			<fieldset>
				<label for="productType"><b>Product Type</b></label>
				<select id="productType" name="productType">
					<optgroup label="Product Type">
					<?php foreach ($data as $key => $productType) {?>
						<option value="<?php echo $productType['id'];?>"><?php echo $productType['name'];?></option>
					<?php }?>
					</optgroup>
				</select>
			</fieldset>
			<br><br>
			
			<br><br>
			<p><b>Add Number of Options</b></p>
			<input type="number" name="optionNumbers" min="1" placeholder="Enter number of options here">
			<br><br>
			<button class="submit" type="submit" name="next1" value="submit">next</button>
			<br><br>
		</form>
		<?php   echo '<button type="button"  name="anotherProduct" id="AnotherProduct">add Another Product</button>';
		
		echo'<div id="product"></div><br>';

?>
	</div>
	<script>
    

      $(document).ready(function(){
          $("#AnotherProduct").click(function(){

              $.ajax({
                  type: 'POST',
                  url: 'getId.php',
                  success: function(data) {
					  
                      $("#product").html(data);
		
				
                  }
              });
     });
  });

  
  </script>
</body>

