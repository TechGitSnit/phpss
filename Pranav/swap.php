<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:black;color:white;">
    <form action="" method="post">
        <input type="text" name="data">
        <input type="text" name="data1">
        <input type="submit" value="Submit" name="btn">

    </form>
</body>
</html>

<?php

    if(isset($_POST['btn']))
    {
        $a=$_POST['data'];
        $a1=$_POST['data1'];
        echo "before of a=".$a ." b ".$a1."<br>";
        $a=$a+$a1;
        $a1=$a-$a1;
        $a=$a-$a1;
        echo "after of a=".$a ." b ".$a1;
    }

?>
