<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "part_shortage";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $part_name = $_POST["part_name"];
    $quantity = $_POST["quantity"];
    $date_reported = date("Y-m-d");

    $sql = "INSERT INTO parts (part_name, quantity, date_reported) VALUES ('$part_name', $quantity, '$date_reported')";

    if ($conn->query($sql) === TRUE) {
        echo "Report submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>