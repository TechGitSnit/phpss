<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Book List</title>
    <style>
        /* General body styling */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #74ebd5, #ACB6E5);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Table container */
        .table-container {
            width: 90%;
            max-width: 1000px;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow-x: auto;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            font-size: 16px;
        }

        table th {
            background-color: #4caf50;
            color: white;
            padding: 12px 10px;
            text-transform: uppercase;
        }

        table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        /* Table header fix for small screens */
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            table th {
                text-align: left;
            }

            table tr {
                margin-bottom: 15px;
            }

            table td {
                text-align: left;
                padding-left: 50%;
                position: relative;
            }

            table td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                font-weight: bold;
            }

            table th,
            table td {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h2 style="text-align: center; color: #4caf50; margin-bottom: 20px;">Library Book List</h2>
        <?php
        echo "<table>";
        echo "<tr>
                <th>Book ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Copies</th>
                <th>Status</th>
              </tr>";

        // Database connection
        $con = mysqli_connect('localhost', 'root', '', 'Library');
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $qr = "SELECT * FROM LibrTable";
        $dt = mysqli_query($con, $qr);

        while ($row = mysqli_fetch_assoc($dt)) {
            $id = $row['B_ID'];
            $name = $row['B_Name'];
            $author = $row['Author'];
            $copy = $row['Copies'];
            $status = $row['Status'];

            echo "<tr>
                    <td data-label='Book ID'>$id</td>
                    <td data-label='Book Name'>$name</td>
                    <td data-label='Author'>$author</td>
                    <td data-label='Copies'>$copy</td>
                    <td data-label='Status'>$status</td>
                  </tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </div>
</body>

</html>
