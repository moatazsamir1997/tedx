<head>
	<link rel="shortcut icon" href="res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="res\css\addproduct.css">
</head>

<body background="res\images\addproduct.jpg" >
	<div class="addproduct">
		<h1><b>Add New Product Type</b></h1><br><br><hr><br>	
		<form action = "<?php echo $GLOBALS['ASSET'].$GLOBALS['productType'].$GLOBALS['submit'];?>" method ='POST'>
			<p><b>product Type name </b></p>
			<input type="text" name="productType" placeholder="Enter product Type name here" required><br><br>
			<button class="submit" type="submit" name="submitProductTypeName">submit</button><br><br>
		</form>
	</div>
</body>
