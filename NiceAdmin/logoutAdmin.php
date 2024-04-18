<?php
// Menghancurkan sesi
session_start();
session_destroy();

// Mengarahkan pengguna ke halaman login
header("location: ../loginAdmin.php");
exit;
?>
