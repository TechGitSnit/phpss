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
   echo "<table border='1' width='50%' align='center'>";
   echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";
   $con=mysqli_connect('localhost','root','','StudentME');
   $qr="Select * from Students";
   $dt=mysqli_query($con,$qr);

   while($row=mysqli_fetch_assoc($dt))
   {
    $name=$row['Name'];
    $mail=$row['Email'];
    $age=$row['Age'];
    echo "<tr><td>$name</td><td>$mail</td><td>$age</td></tr>";

   }
  echo "</table>";

?>