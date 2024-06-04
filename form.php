<?php
if(isset($_POST['name'])){
$con = new mysqli('localhost','root','','project');
$sql = "INSERT INTO thproducts(proName,Smallprice,lageprice,image,category)
VALUES ('$_POST[proName]','$_POST[Smallprice]','$_POST[lageprice]','$_POST[image]','$_POST[category]')";
$con->query($sql);
$con->close();}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="">
        <label for="proName">Product Name:</label>
        <input type="text" name="proName" id="proName" required><br>

        <label for="Smallprice">Small Price:</label>
        <input type="text" name="Smallprice" id="Smallprice" required><br>

        <label for="lageprice">Large Price:</label>
        <input type="text" name="lageprice" id="lageprice" required><br>

        <label for="image">Image:</label>
        <input type="text" name="image" id="image" required><br>

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required><br>

        <input type="submit" name="name" value="Add Product">
    </form>
</body>
</html>
