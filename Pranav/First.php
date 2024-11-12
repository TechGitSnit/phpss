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
        $a=$_POST['data'];
        $i=1;
        $s=0;
        while($i<=$a)
        {
            $s=$s+$i;
            $i++;
        }
        echo "Sum =".$s;
    }

?>

