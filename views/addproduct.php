<head>
	<link rel="shortcut icon" href="..\res\images\icons\product.png" />
	<link rel="stylesheet" type="text/css" href="..\res\css\addproduct.css">
</head>





<body background="..\res\images\addproduct.jpg" >

	<div class="addproduct">
		<h1><b>Add Product</b></h1>
		<br><br><hr><br>	
		<form action = 'web\product.php' method ='POST'>
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
			<?php
		 echo'<div id="product"></div><br>';   

?>
			<button class="submit" type="submit" name="next1" value="submit">next</button>
			<br><br>

</select>
		</form>
		<?php
	
		echo '<button type="button"  name="anotherProduct" id="AnotherProduct">add Another Product</button>';
		
		

?>

	</div>
	<script>

	$(document).ready(function(){
		$("#AnotherProduct").click(function(){
			
	
			$.ajax({
				type: 'POST',
				url: 'AnotherProduct.php',
			
				success: function(data) {
				//   alert(data);
	
					$("#product").append(data);
					
					
			  
				}
				
			});
   });
});


</script>
</body>









<!-- <body background="res\images\addproduct.jpg">

	<div class="addproduct">
		<h1><b>Add Product</b></h1>
		<br><br>
		<hr><br>
		<form action='web\product.php' method='POST'>
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
			<?php echo'<div id="product"></div><br>';  ?>
			<button class="submit" type="submit" name="next1" value="submit">next</button>
			<br><br>

			</select>
		</form>
		<?php echo '<button type="button"  name="anotherProduct" id="AnotherProduct">add Another Product</button>';?>

	</div>
	<script>

		$(document).ready(function () {
			$("#AnotherProduct").click(function () {


				$.ajax({
					type: 'POST',
					url: 'AnotherProduct.php',

					success: function (data) {
						//   alert(data);

						$("#product").append(data);



					}

				});
			});
		});


	</script>
</body> -->