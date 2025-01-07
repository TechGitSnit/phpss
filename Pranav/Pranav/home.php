<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        /* General body styling */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Header styling */
        header {
            background-color: #4caf50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        /* Navigation bar styling */
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            background-color: #333;
            padding: 10px 0;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            padding: 8px 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #4caf50;
            color: #fff;
        }

        /* Main container */
        .container {
            margin-top: 50px;
            text-align: center;
        }

        .container h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        .container p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Dashboard button styling */
        .dashboard-btn {
            display: inline-block;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .dashboard-btn:hover {
            background-color: #45a049;
        }

        /* Footer styling */
        footer {
            margin-top: auto;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        Library Management System
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="login.php">Login</a>
        <a href="LibraryView.php">Library Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to the Library Management System</h1>
        <p>Manage your books, members, and records efficiently with our system.</p>
        <a href="dashboard.php" class="dashboard-btn">Go to Dashboard</a>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Library Management System. All Rights Reserved.
    </footer>
</body>

</html>
