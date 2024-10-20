<?php
require 'DataBase_conection.php';

$id = $_GET['id'];

// Menghapus data
$stmt = $conn->prepare("DELETE FROM registration WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Mengatur ulang auto increment
    $conn->query("ALTER TABLE registration AUTO_INCREMENT = 1");

    // Mengatur ulang ID
    $conn->query("SET @count = 0");
    $conn->query("UPDATE registration SET id = @count:= @count + 1");
    $conn->query("ALTER TABLE registration AUTO_INCREMENT = 1");

    header("Location: Display_Data.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
