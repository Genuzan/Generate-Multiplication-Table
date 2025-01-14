<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px; 
        }

        h1 {
            text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }
 
        form {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            margin-right: 10px;
        }

        input[type="number"] {
            font-size: 16px;
            padding: 8px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            font-size: 18px;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        table, td {
            border: 1px solid #000;
        }

        td {
            padding: 15px;
            background-color: #fff;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        td:hover {
            background-color: #f0f0f0;
        }

        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

    </style>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Multiplication Table</h1>
        <label>Enter Rows:</label>
        <input type="number" name="row" min="1" required> <br>
        <label>Enter Columns:</label>
        <input type="number" name="col" min="1" required> <br>
        <input type="submit" value="Create Table">
    </form>

    <?php
        if (isset($_POST["row"]) && isset($_POST["col"])) {
            $row = $_POST["row"];
            $col = $_POST["col"];

            echo "<table>";
            for ($i = 1; $i <= $row; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $col; $j++) {
                    $x = $i * $j;
                    echo "<td>$x</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>
