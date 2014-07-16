
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Add/Update Product</h3>
        <form action="index.php" method="POST">
            Product Id:<input type="text" name="idtext"><br/>
            Quality<input type="text" name="qualitytext">
            
            <input type="submit" name="add/deletebutton"value="add/delete">
       
        </form>
        <?php
       require_once 'product.php';
       session_start();
     if(isset($_GET['add/deletebutton']))
     $_product= new product();
    $_product->productid=$_GET['idtext'];
     $_product->Quality=$_GET['qualitytext'];
     $_session['product']=$product;
     echo 'product add/delete';
         
        ?>
    </body>
</html>
