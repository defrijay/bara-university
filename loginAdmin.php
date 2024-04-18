<?php
    // Menginisialisasi sesi
    session_start();
    
    // Cek apakah pengguna sudah login, jika ya, alihkan ke halaman lain
    if(isset($_SESSION['username'])){
      header("location: admin.php");
      exit;
    }
    
    // Cek apakah ada data yang dikirim dari form login
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      
      // Memeriksa kredensial pengguna (misalnya, menggunakan database)
      $username = "admin"; // Ganti dengan nama pengguna yang valid
      $password = "admin"; // Ganti dengan kata sandi yang valid
      
      if($_POST['username'] == $username && $_POST['password'] == $password){
        // Menyimpan data pengguna ke dalam sesi
        $_SESSION['username'] = $username;
        
        // Mengarahkan pengguna ke halaman selamat datang
        header("location: admin.php");
        exit;
      } else{
        // Jika kredensial tidak valid, tampilkan pesan kesalahan
        $error = "Username atau password salah.";
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>
    <?php
    if(isset($error)){
        echo "<script>
                alert('username / password salah');
            </script>";
    }
    ?>

<meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        label {
            display: block;
        }
    </style>
     <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Bara University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="getstarted scrollto active" href="loginAdmin.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
      <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h1>Seleksi Mandiri Bersama Bara University</h1>
            <h2>Mari Masuk Bara University Demi Majunya Indonesia Menjadi Negara 4.0</h2>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">


<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
  <div class="row gx-lg-5 align-items-center mb-5">
    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
      <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
        Login Admin <br/>
        <span style="color: hsl(218, 81%, 75%)">Bara University</span>
      </h1>
      <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Login Khusus Admin yah!
      </p>
    </div>

    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
      <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
      <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

      <div class="card bg-glass">
        <div class="card-body px-4 py-5 px-md-5">
          <form action="" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="username" for="form3Example3">Username</label>
              <input type="text"  class="form-control" name="username" id="username">
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name ="login">
              Login
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Section: Design Block -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

            <div class="footer-top">
            <div class="container">
                <div class="row">

            <div class="col-lg-8 col-md-6 footer-contact">
                <h3>Bara University</h3>
                <p>
                Jalan Geger Arum No. 56, Sukasari<br>
                Bandung, Jawa Barat<br>
                Indonesia <br><br>
                <strong>Phone:</strong> +62-899-765-544-231<br>
                <strong>Email:</strong> baraUniversity@gmail.com<br>
                </p>
            </div>

            <div class="col-lg-4 col-md-6 footer-links">
                <h4>Sosial Media</h4>
                <p>Untuk melihat segala kegiatan dalam dilihat di sosial media kami</p>
                <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            </div>
            </div>
            </div>

            <div class="container footer-bottom clearfix">
            <div class="copyright">
            &copy; Copyright 2023 <strong><span>BARA University</span></strong>. Bara University | Bara University adalah Universitas Negeri Milik Pemerintah Negeri Republik Indonesia Terdaftar pada Kemendikbud
            Republik Indonesia
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            </div>
            </div>
    </footer><!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
</body>
</html>