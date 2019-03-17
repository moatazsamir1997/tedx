
<head>
	<link rel="shortcut icon" href="..\res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="..\res\css\addproduct.css">
</head>


<body background="..\res\images\addproduct.jpg" >

	<div class="addproduct">
		<h1><b>Add Options</b></h1>
		<br><br><hr><br>	
		<form action = '..\web\product.php' method ='POST'>
            <?php for ($i=0; $i <count($name) ; $i++) {?> 
                <label><p><b><?php echo $name[$i];?></b></p></label>
                <input type="<?php echo $datatype[$i];?>" name="<?php echo $name[$i];?>" placeholder="Enter Option value here" required>
            <?php } ?>
			<br><br>
			<p><b>Quantity</b></p>
            <input type="number" name="quantity" min="1" placeholder="Enter product quantity here" required>
            <br><br>
            <p><b>Price</b></p>
            <input type="number" name="price" min="1" placeholder="Enter product price here" required>
            <br><br>
			<br><br>
			<button class="submit" type="submit" name="next2" value="submit">next</button>
			<br><br>
		</form>
	</div>
</body>