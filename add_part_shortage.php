<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $partNumber = $_POST['part_number'];
    $partName = $_POST['part_name'];
    $quantity = (int) $_POST['quantity'];

    // Tambahkan data ke array partShortageData
    $partShortageData[] = [
        "part_number" => $partNumber,
        "part_name" => $partName,
        "quantity" => $quantity,
    ];

    // Redirect kembali ke halaman utama
    header("Location: index.php");
    exit();
}
?>