
<head>
	<link rel="shortcut icon" href="res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="res\css\addproduct.css">
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
	</div>
</body>

