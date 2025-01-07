<?php
session_start();
$u = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        /* General body styling */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        /* Container styling */
        .container {
            background-color: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        .container h1 {
            margin-bottom: 10px;
            color: #4facfe;
        }

        .container p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Logout button styling */
        .logout-btn {
            text-decoration: none;
            color: white;
            background-color: #e74c3c;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome!</h1>
        <p>
            Hello, <strong><?php echo htmlspecialchars($u); ?></strong>
        </p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>

</html>
