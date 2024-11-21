<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
   echo "<table border='1' width='50%'>";
   echo "<tr><th>Product</th><th>Category</th><th>Quantity</th></tr>";
   $con=mysqli_connect('localhost','root','','proddb');
   $qr="Select * from product";
   $dt=mysqli_query($con,$qr);

   while($row=mysqli_fetch_assoc($dt))
   {
    $pname=$row['Pname'];
    $categr=$row['Pcategory'];
    $quant=$row['PQuantity'];
    echo "<tr><td>$pname</td><td>$categr</td><td>$quant</td></tr>";

   }
  echo "</table>";

?>