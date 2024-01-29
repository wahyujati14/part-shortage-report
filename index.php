<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part Shortage Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #333;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        button {
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Part Shortage Report</h1>

    <table border="1">
        <tr>
            <th>Part Number</th>
            <th>Part Name</th>
            <th>Quantity</th>
        </tr>
        <?php
        // Contoh data sederhana
        $partShortageData = [
            ["part_number" => "P001", "part_name" => "Engine Valve", "quantity" => 10],
            ["part_number" => "P002", "part_name" => "Transmission Gear", "quantity" => 5],
            ["part_number" => "P003", "part_name" => "Brake Pad", "quantity" => 8],
        ];

        foreach ($partShortageData as $part) {
            echo "<tr>";
            echo "<td>{$part['part_number']}</td>";
            echo "<td>{$part['part_name']}</td>";
            echo "<td>{$part['quantity']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Add Part Shortage</h2>
    <form action="add_part_shortage.php" method="post">
        <label for="part_number">Part Number:</label>
        <input type="text" name="part_number" required>
        <br>
        <label for="part_name">Part Name:</label>
        <input type="text" name="part_name" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        <br>
        <button type="submit">Add Part Shortage</button>
    </form>
</body>

</html>