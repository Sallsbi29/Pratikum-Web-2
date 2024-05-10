<?php
// Memeriksa apakah formulir login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah email dan password yang diberikan oleh pengguna sesuai dengan yang diharapkan
    $unsername = $_POST["unsername"]; // Ubah menjadi "email"
    $password = $_POST["password"]; // Ubah menjadi "password"
    
    // Di sini Anda bisa menambahkan logika autentikasi sesuai dengan kebutuhan Anda
    $expectedUnsername = "salsabila";
    $expectedPassword = "salsa123";

    // Jika email dan password yang diberikan oleh pengguna sesuai dengan yang diharapkan
    if ($email == $expectedUnsername && $password == $expectedPassword) {
        // Redirect pengguna ke index.php
        header("../pukesmas/index.php");
        exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
    } else {
        // Jika informasi login tidak valid, redirect kembali ke halaman login dengan pesan kesalahan
        header("../pukesmas/login.php");
        exit;
    }
}
?>