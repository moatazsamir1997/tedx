 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add new Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="<?php echo $GLOBALS['ASSET'].$GLOBALS['addProductType']?>" method="POST">
            <br><br><br>
            <label>Add new product name:</label>
            <input type="text" name="name" size="50">
            <label>Quantity:</label>
            <input type="text" name="quantity" >
            <label>price:</label>
            <input type="number" name="price" >
            <label>Product Type:</label>
            <select>  
            <?php foreach ($data as $productType) { ?> 
                <option value="<?php echo $productType["id"] ?>"><?php echo $productType["name"] ?></option>
            <?php }?>        
            </select>
            <button type="submit" name="addProduct">submit</button>
        </form>

    </body>
 </html>
 