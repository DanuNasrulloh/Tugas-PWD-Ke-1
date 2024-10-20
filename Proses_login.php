<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan password yang valid
    $valid_username = 'username';
    $valid_password = 'password';

    if ($username === $valid_username && $password === $valid_password) {
        // Username dan password cocok, arahkan ke halaman lain
        header("Location: HomeRegistion.php");
        exit();
    } else {
        // Username atau password salah, kembali ke halaman login dengan pesan kesalahan
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
} else {
    echo "Form tidak disubmit dengan benar.";
}
