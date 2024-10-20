<?php
require 'DataBase_conection.php';

$id = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$institution = $_POST['institution'];
$country = $_POST['country'];
$address = $_POST['address'];

$stmt = $conn->prepare("UPDATE registration SET email = ?, name = ?, institution = ?, country = ?, address = ? WHERE id = ?");
$stmt->bind_param("sssssi", $email, $name, $institution, $country, $address, $id);

if ($stmt->execute()) {
    header("Location: Display_Data.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
