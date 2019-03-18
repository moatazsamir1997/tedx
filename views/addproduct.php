

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

</head>


<body>

	<div class="addproduct">
		<h1><b>Add Product</b></h1>
		<br><br>
		<hr><br>
		<form action='<?php echo $GLOBALS['ASSET'].$GLOBALS['addNewProduct'].$GLOBALS['submit'];?>' method='POST'>
			<p><b>product name </b></p>
			<input type="text" name="productname" placeholder="Enter product name here" required>
			<br><br>
			<fieldset>
				<label><b>Product Type</b></label>
				<select name="productType">
					<optgroup label="Product Type">
					<?php foreach ($data as $productType) { ?> 
                    	<option value="<?php echo $productType["id"] ?>"><?php echo $productType["name"] ?></option>
                	<?php }?>
					</optgroup>
				</select>
			</fieldset>
			
			<?php echo'<div id="product"></div><br>';  ?>
			<button class="submit" type="submit" name="next" value="submit">next</button>
			<br><br>

			</select>
		</form>
		<button type="button" name="AnotherOption"  id="AnotherOption">add Option</button>';

	</div>
	<script>

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


	</script>
</body>