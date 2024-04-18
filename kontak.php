<?php
include("ordersKontak.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bara University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="after.php">Bara University</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="kontak.php">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="after.php">Home</a></li>
                        <li>Kontak</li>
                    </ol>
                    <h2>Kontak Bara University</h2>
                </div>
            </section>
            <!-- End Breadcrumbs -->
    <section id="main" class="bg-secondary">
            <div class="mx-auto mt-3 m-xl-5">
                <!-- Untuk Memasukkan Data -->
                <div class="card">
                    <div class="card-body bg-body-secondary p-5">
                        <?php if ($error) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $error ?>
                            </div>
                        <?php header("refresh:5;url=kontak.php"); //refresh 5 detik 
                        } ?>
                        <?php if ($sukses) { ?>
                            <div class="alert alert-success" role="alert">
                                <?= $sukses ?>
                            </div>
                        <?php header("refresh:5;url=kontak.php"); //refresh 5 detik 
                        }?>
                        <form action="" method="post">
                            <div class="mb-3 row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" value=" <?= $nama ?>">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value=" <?= $email ?>">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="subjek" class="col-sm-2 col-form-label">Subjek</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="subjek" name="subjek" value=" <?= $subjek ?>">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="pesan" cols="30" rows="10" id="alamat" name="pesan" value="<?= $pesan ?>"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <input type="submit" name="simpan" class="btn btn-info text-white">
                                <input type="reset" name="reset" class="btn btn-primary text-white">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            
        </section>

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
                    &copy; Copyright 2023 <strong><span>BARA University</span></strong>. Bara University | Bara
                    University adalah Universitas Negeri Milik Pemerintah Negeri Republik Indonesia Terdaftar pada
                    Kemendikbud
                    Republik Indonesia
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

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