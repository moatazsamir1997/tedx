
<head>
	<link rel="shortcut icon" href="..\res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="..\res\css\addproduct.css">
</head>

<body background="..\res\images\addproduct.jpg" >
	<div class="addproduct">
		<h1><b>Add Product Values</b></h1>
		<br><br><hr><br>	
		<form action ='<?php echo $GLOBALS['ASSET'].$GLOBALS['addNewProduct'].$GLOBALS['Options'].'/'.$GLOBALS['addValue'];?>' method ='POST'>
			<fieldset>
				<label for="product"><b>Product</b></label>
				<select id="product" name="product">
					<optgroup label="Product">
					<?php foreach ($data as $key => $product) {?>
						<option value="<?php echo $product['id'];?>"><?php echo $product['name'];?></option>
					<?php }?>
					</optgroup>
				</select>
			</fieldset>
			
			<button class="submit" type="submit" name="next1" value="submit">next</button>
			<br><br>
		</form>
	</div>
</body>

