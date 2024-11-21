<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">
         Name <input type="text" name="name" id="" style="padding: 8px;"><br>
         email <input type="text" name="email" id="" style="padding: 8px;"><br>
         age <input type="text" name="age" id="" style="padding: 8px;"><br>
        <input type="submit" value="save" name='btn' style="background-color: dodgerblue;padding: 10px;color: black;">
     </form>
</body>
</html>
<?php
    if(isset($_POST['btn']))
    {
        $name=$_POST['name'];
        $mail=$_POST['email'];
        $age=$_POST['age'];

        $qr="insert into Students(Name,Email,Age)values('$name',' $mail','$age')";

        $con=mysqli_connect('localhost','root','','StudentME');

        mysqli_query($con,$qr);
        echo "<font>DTA INTENDED</font>";

        

    }
?>