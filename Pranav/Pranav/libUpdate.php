<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">
         <!-- Book ID <input type="text" name="bk_id" id="" style="padding: 8px;"><br>
         Book Name <input type="text" name="bk_name" id="" style="padding: 8px;"><br>
         Author  <input type="text" name="author" id="" style="padding: 8px;"><br>
         No Of Copies  <input type="text" name="copies" id="" style="padding: 8px;"><br> -->
         Status  <input type="text" name="status" id="" style="padding: 8px;"><br>
         
        <input type="submit" value="update" name='btn' style="background-color: dodgerblue;padding: 10px;color: black;">
     </form>
</body>
</html>

<?php

if(isset($_POST['btn']))
{
    // $id=$_POST['bk_id'];
    // $bkname=$_POST['bk_name'];
    // $author=$_POST['author'];
    // $copy=$_POST['copies'];
    $status=$_POST['status'];

    $qr="update librtable set Status='not bbrnr' where Status=$status";

    $con=mysqli_connect("localhost","root","",'Library');

    mysqli_query($con,$qr);

    echo "<font>Updation aayegaa.......</font>";
}


?>
