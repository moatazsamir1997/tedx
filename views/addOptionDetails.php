
<head>
	<link rel="shortcut icon" href="..\res\images\icons\product.png"/>
	<link rel="stylesheet" type="text/css" href="..\res\css\addproduct.css">
</head>


<body background="..\res\images\addproduct.jpg" >

	<div class="addproduct">
		<h1><b>Add Options</b></h1>
		<br><br><hr><br>	
		<form action = '..\web\product.php' method ='POST'>
            <?php for ($i=0; $i <$numOfOptions; $i++) { ?>
                <label><p><b>Option name</b></p></label>
                <input type="text" name="<?php echo 'name'.$i;?>" placeholder="Enter Option name here" required>
                <fieldset>
                    <label><b>Data Type</b></label>
                    <select  name="<?php echo 'datatype'.$i;?>">
                        <option value="text">text</option>
                        <option value="number">number</option>
                        <option value="email">email</option>
                        <option value="password">password</option>
                        <option value="file">file</option>
                    </select>
                </fieldset>
            <?php } ?>
			<br><br>
			<button class="submit" type="submit" name="next2" >next</button>
			<br><br>
		</form>
	</div>
</body>