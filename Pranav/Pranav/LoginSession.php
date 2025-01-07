<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        name <input type="text" name="n1"><br>
        Password <input type="text" name="p1"><br>
        <input type="submit" value="Login" name="btn">
    </form>
</body>

</html>
<?php
if (isset($_POST['btn'])) {
    include('db.php');
    $name = $_POST['n1'];
    $pass = $_POST['p1'];
    $sql = "select *from  Login where name='$name' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    // $f = 0;
    if ($row = mysqli_fetch_assoc(($result))) {
        session_start();
        $_SESSION['username']=$name;
        header('location:logsessionview.php?');
       
    }
    else{
        header('location:login.php');
        // echo "invalid";
    }
}
?>