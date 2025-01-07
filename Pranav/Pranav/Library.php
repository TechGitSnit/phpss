<?php
session_start(); // Start the session to check if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Form</title>
    <style>
        /* Body styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #3498db, #6dd5fa, #ffffff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form container */
        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px 30px;
            border-radiuqs: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        .form-container h2 {
            margin-bottom: 15px;
            color: #333;
            text-align: center;
        }

        /* Input styling */
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
        }

        .form-container input[type="text"]:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        /* Submit button styling */
        .form-container input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .form-container input[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* Success message styling */
        .success-message {
            color: green;
            margin-top: 10px;
            text-align: center;
        }

        /* Error message styling */
        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Add Book Details</h2>
        
        <?php
        // Check if user is logged in
        if (!isset($_SESSION['username'])) {
            echo "<div class='error-message'>You must be logged in to add book details.</div>";

        } else {
        ?>

        <form action="" method="post">
            <label for="bk_id">Book ID</label>
            <input type="text" name="bk_id" id="bk_id" placeholder="Enter Book ID" required>

            <label for="bk_name">Book Name</label>
            <input type="text" name="bk_name" id="bk_name" placeholder="Enter Book Name" required>

            <label for="author">Author</label>
            <input type="text" name="author" id="author" placeholder="Enter Author Name" required>

            <label for="copies">No. of Copies</label>
            <input type="text" name="copies" id="copies" placeholder="Enter Number of Copies" required>

            <label for="status">Status</label>
            <input type="text" name="status" id="status" placeholder="Enter Status" required>

            <input type="submit" value="Save" name="btn">
        </form>

        <?php
            // Handle form submission if user is logged in
            if (isset($_POST['btn'])) {
                $id = $_POST['bk_id'];
                $bkname = $_POST['bk_name'];
                $author = $_POST['author'];
                $copy = $_POST['copies'];
                $status = $_POST['status'];
                
                $con = mysqli_connect("localhost", "root", "", 'Library');

                if (!$con) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $qr = "INSERT INTO LibrTable (B_ID, B_Name, Author, Copies, Status) VALUES ('$id', '$bkname', '$author', '$copy', '$status')";
                if (mysqli_query($con, $qr)) {
                    echo "<div class='success-message'>Data added successfully!</div>";
                } else {
                    echo "<div class='success-message' style='color: red;'>Error: " . mysqli_error($con) . "</div>";
                }

                mysqli_close($con);
            }
        }
        ?>
    </div>
</body>

</html>
