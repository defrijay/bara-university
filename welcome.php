<?php
  // Memeriksa apakah pengguna telah login
  session_start();
  if(!isset($_SESSION['username'])){
    header("location: login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Selamat Datang</title>
</head>
<body>
  <h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
  <a href="logout.php">Logout</a>
</body>
</html>