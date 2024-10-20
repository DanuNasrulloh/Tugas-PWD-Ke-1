<?php
require 'DataBase_conection.php';

$email = $_POST['email'];
$name = $_POST['name'];
$institution = $_POST['institution'];
$country = $_POST['country'];
$address = $_POST['address'];

// Periksa apakah email sudah ada di database
$stmt = $conn->prepare("SELECT id FROM registration WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Email sudah ada, kembali ke halaman registrasi dengan pesan kesalahan
    header("Location: HomeRegistion.php?error=email_exists");
    exit();
}

$stmt->close();

// Menyimpan data ke database menggunakan prepared statement
$stmt = $conn->prepare("INSERT INTO registration (email, name, institution, country, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $email, $name, $institution, $country, $address);

if ($stmt->execute()) {
    header("Location: Display_Data.php");
    exit();
} else {
    echo "Registrasi Gagal: " . $stmt->error;
}

$stmt->close();
$conn->close();
