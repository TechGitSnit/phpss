<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="data">
        <input type="submit" value="Submit" name="btn">

    </form>
</body>
</html>

<?php

    if(isset($_POST['btn']))
    {
        $n=$_POST['data'];
        $rem=0;
        $a=0;
        $t=$n;
        while($t>0)
        {
            $rem=$t%10;
            $a=($rem*$rem*$rem)+$a;
            $t=$t/10;
        }
        if($a==$n)
        {
            echo"pali ".$a;
        }
        else{
            echo"not pali ".$a;
        }
    }

?>
