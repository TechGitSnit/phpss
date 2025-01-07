<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">
        ProduT Name <input type="text" name="pro_name" id="" style="padding: 10px;"><br>
        ProduT Category <input type="text" name="pro_cate" id="" style="padding: 10px;"><br>
        ProduT Quantity <input type="text" name="pro_quant" id="" style="padding: 10px;"><br>
        ProduT Price <input type="text" name="pro_price" id="" style="padding: 10px;"><br>
        <input type="submit" value="save" name='btn' style="background-color: dodgerblue;padding: 10px;color: black;">
     </form>
</body>
</html>
<?php
    if(isset($_POST['btn']))
    {
        $pname=$_POST['pro_name'];
        $pcateg=$_POST['pro_cate'];
        $pquant=$_POST['pro_quant'];
        $pprice=$_POST['pro_price'];

        $qr="insert into product(Pname,Pcategory,PQuantity,Price)values('$pname',' $pcateg','$pquant','$pprice')";

        $con=mysqli_connect('localhost','root','','prodDB');

        mysqli_query($con,$qr);
        echo "<font>DTA INTENDED</font>";
    }
?>