<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* General body styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2980b9, #6dd5fa, #ffffff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container box */
        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 320px;
            padding: 20px;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Input fields */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* Extra message styling */
        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <!-- Username Field -->
            <input type="text" name="n1" placeholder="Username" required><br>
            <!-- Password Field -->
            <input type="password" name="p1" placeholder="Password" required><br>
            <!-- Submit Button -->
            <input type="submit" value="Login" name="btn">
        </form>
    </div>
</body>

</html>

<?php
// Backend login script
if (isset($_POST['btn'])) {
    include('db.php');
    $name = $_POST['n1'];
    $pass = $_POST['p1'];

    // Prevent SQL Injection
    $name = mysqli_real_escape_string($conn, $name);
    $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "SELECT * FROM Login WHERE name='$name' AND password='$pass'";
    $result = mysqli_query($conn, $sql);
    $f = 0;

    if ($row = mysqli_fetch_assoc($result)) {
        $f = 1;
        header('location:Library.php');
        exit();
    }

    if ($f == 0) {
        echo "<div class='error-message' style='text-align:center;'>Invalid username or password</div>";
    }
}
?>
