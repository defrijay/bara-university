<?php
    include("ordersForm.php");
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
                        <li>Form Pendaftaran</li>
                    </ol>
                    <h2>Form Pendaftaran Bara University</h2>
                </div>
            </section>
            <!-- End Breadcrumbs -->


            <!-- Page Utama -->
            <section class="inner-page  bg-secondary">
                <div class="mx-auto mt-3 m-xl-5">
                    <!-- Untuk Memasukkan Data -->
                    <div class="card">
                        <div class="card-body bg-body-secondary p-5">
                            <?php if ($error) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $error ?>
                                </div>
                                <?php header("refresh:5;url=form.php"); //refresh 5 detik 
                            } ?>



                            <?php if ($sukses) { ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $sukses ?>
                                </div>
                                <?php header("refresh:5;url=halo.php"); //refresh 5 detik
                            } ?>

                            <!-- Formulir Pendaftaran -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- Inputan Nama Lengkap -->
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
                                    </div>
                                </div>

                                <!-- Inputan Jenis Kelamin -->
                                <div class="mb-3 row">
                                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                                                value="Laki-Laki">
                                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                                                value="Perempuan">
                                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Inputan Tanggal Lahir -->
                                <div class="mb-3 row">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal_lahir"
                                            value="<?= $tanggal ?>">
                                    </div>
                                </div>

                                <!-- Inputan Email -->
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                            value="<?= $alamat ?>">
                                    </div>
                                </div>

                                <!-- inputan Telepon -->
                                <div class="mb-3 row">
                                    <label for="telepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="telepon" name="nomor_telp"
                                            value="<?= $telepon ?>">
                                    </div>
                                </div>

                                <!-- Inputan Email -->
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" value="<?= $email ?>">
                                    </div>
                                </div>

                                <!-- Inputan Sekolah -->
                                <div class="mb-3 row">
                                    <label for="sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="sekolah" name="asal_sekolah"
                                            value="<?= $sekolah ?>">
                                    </div>
                                </div>

                                <!-- Inputan OrangTua -->
                                <div class="mb-3 row">
                                    <label for="ortu" class="col-sm-2 col-form-label">Nama OrangTua</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="ortu" name="nama_org_tua"
                                            value="<?= $ortu ?>">
                                    </div>
                                </div>

                                <!-- Inputan Fakultas -->
                                <div class="mb-3 row">
                                <label for="fakultas" class="col-sm-2 col-form-label">Nama Fakultas</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="fakultas" name="nama_fakultas">
                                        <option value="">- Pilih Fakultas -</option>
                                        <option value="FMIPA" <?php if ($fakultas == "FMIPA") echo "selected" ?>>
                                                FMIPA
                                            </option>
                                            <option value="FIP" <?php if ($fakultas == "FIP") echo "selected" ?>>
                                                FIP
                                            </option>
                                            <option value="FBS" <?php if ($fakultas == "FBS") echo "selected" ?>>
                                                FBS
                                            </option>
                                            <option value="FSRD" <?php if ($fakultas == "FSRD") echo "selected" ?>>
                                                FSRD
                                            </option>
                                            <option value="FOK" <?php if ($fakultas == "FOK") echo "selected" ?>>
                                                FOK
                                            </option>
                                            <option value="FEB" <?php if ($fakultas == "FEB") echo "selected" ?>>
                                                FEB
                                            </option>
                                            <option value="FTK" <?php if ($fakultas == "FTK") echo "selected" ?>>
                                                FTK
                                            </option>
                                            <option value="FIPS" <?php if ($fakultas == "FIPS") echo "selected" ?>>
                                                FIPS
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                    <!-- inputan Prodi -->
                                    <div class="mb-3 row">
                                    <label for="prodi" class="col-sm-2 col-form-label">Nama Fakultas</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="prodi" name="nama_prodi">
                                            <option value="">- Pilih Prodi -</option>
                                            <option disabled>
                                            ====================================================== FMIPA ======================================================
                                            </option>
                                                <option value="S1 Ilmu Komputer" <?php if ($fakultas == "S1 Ilmu Komputer") echo "selected" ?>>
                                                    S1 Ilmu Komputer
                                                </option>
                                                <option value="S1 Matematika" <?php if ($fakultas == "S1 Matematika") echo "selected" ?>>
                                                    S1 Matematika
                                                </option>
                                                <option value="S1 Biologi" <?php if ($fakultas == "S1 Biologi") echo "selected" ?>>
                                                    S1 Biologi
                                                </option>
                                                <option value="S1 Kimia" <?php if ($fakultas == "S1 Kimia") echo "selected" ?>>
                                                    S1 Kimia
                                                </option>
                                                <option value="S1 Fisika" <?php if ($fakultas == "S1 Fisika") echo "selected" ?>>
                                                    S1 Fisika
                                                </option>
                                                <option value="S1 IPSE" <?php if ($fakultas == "S1 IPSE") echo "selected" ?>>
                                                    S1 International Program of Education (IPSE)
                                                </option>
                                            <option disabled>
                                            ====================================================== FIP ======================================================
                                            </option>
                                                <option value="S1 Administrasi Pendidikan" <?php if ($fakultas == "S1 Administrasi Pendidikan") echo "selected" ?>>
                                                    S1 Administrasi Pendidikan
                                                </option>
                                                <option value="S1 Bimbingan Konseling" <?php if ($fakultas == "S1 Bimbingan Konseling") echo "selected" ?>>
                                                    S1 Bimbingan Konseling
                                                </option>
                                                <option value="S1 Psikologi" <?php if ($fakultas == "S1 Psikologi") echo "selected" ?>>
                                                    S1 Psikologi
                                                </option>
                                                <option value="S1 Teknologi Pendidikan" <?php if ($fakultas == "S1 Teknologi Pendidikan") echo "selected" ?>>
                                                    S1 Teknologi Pendidikan
                                                </option>
                                                <option value="S1 Perpustakaan dan Informasi" <?php if ($fakultas == "S1 Perpustakaan dan Informasi") echo "selected" ?>>
                                                    S1 Perpustakaan dan Informasi
                                                </option>
                                                <option value="S1 Pendidikan Guru Sekolah Dasar" <?php if ($fakultas == "S1 Pendidikan Guru Sekolah Dasar") echo "selected" ?>>
                                                    S1 Pendidikan Guru Sekolah Dasar
                                                </option>
                                            <option disabled>
                                            ====================================================== FBS ======================================================
                                            </option>
                                                <option value="S1 Bahasa dan Sastra Indonesia" <?php if ($fakultas == "S1 Bahasa dan Sastra Indonesia") echo "selected" ?>>
                                                    S1 Bahasa dan Sastra Indonesia
                                                </option>
                                                <option value="S1 Bahasa dan Sastra Inggris" <?php if ($fakultas == "S1 Bahasa dan Sastra Inggris") echo "selected" ?>>
                                                    S1 Bahasa dan Sastra Inggris
                                                </option>
                                                <option value="S1 Bahasa dan Sastra Arab" <?php if ($fakultas == "S1 Bahasa dan Sastra Arab") echo "selected" ?>>
                                                    S1 Bahasa dan Sastra Arab
                                                </option>
                                                <option value="S1 Bahasa dan Sastra Korea" <?php if ($fakultas == "S1 Bahasa dan Sastra Korea") echo "selected" ?>>
                                                    S1 Bahasa dan Sastra Korea
                                                </option>
                                                <option value="S1 Bahasa dan Sastra Perancis" <?php if ($fakultas == "S1 Bahasa dan Sastra Perancis") echo "selected" ?>>
                                                    S1 Bahasa dan Sastra Perancis
                                                </option>
                                                <option value="S1 Bahasa dan Sastra Jepang" <?php if ($fakultas == "S1 Bahasa dan Sastra Jepang") echo "selected" ?>>
                                                    S1 Bahasa dan Sastra Jepang
                                                </option>
                                            <option disabled>
                                            ====================================================== FSRD ======================================================
                                            </option>
                                                <option value="S1 Seni Rupa dan Kerajinan" <?php if ($fakultas == "S1 Seni Rupa dan Kerajinan") echo "selected" ?>>
                                                    S1 Seni Rupa dan Kerajinan
                                                </option>
                                                <option value="S1 Seni Tari" <?php if ($fakultas == "S1 Seni Tari") echo "selected" ?>>
                                                    S1 Seni Tari
                                                </option>
                                                <option value="S1 Desain Komunikasi Visual" <?php if ($fakultas == "S1 Desain Komunikasi Visual") echo "selected" ?>>
                                                    S1 Desain Komunikasi Visual
                                                </option>
                                                <option value="S1 Seni Musik" <?php if ($fakultas == "S1 Seni Musik") echo "selected" ?>>
                                                    S1 Seni Musik
                                                </option>
                                                <option value="S1 Seni Bahasa" <?php if ($fakultas == "S1 Seni Bahasa") echo "selected" ?>>
                                                    S1 Seni Bahasa
                                                </option>
                                                <option value="S1 Desain Interior" <?php if ($fakultas == "S1 Desain Interior") echo "selected" ?>>
                                                    S1 Desain Interior
                                                </option>
                                            <option disabled>
                                            ====================================================== FOK ======================================================
                                            </option>
                                                <option value="S1 Keperawatan" <?php if ($fakultas == "S1 Keperawatan") echo "selected" ?>>
                                                    S1 Keperawatan
                                                </option>
                                                <option value="S1 Ilmu Olahraga" <?php if ($fakultas == "S1 Ilmu Olahraga") echo "selected" ?>>
                                                    S1 Ilmu Olahraga
                                                </option>
                                                <option value="S1 Kesehatan dan Rekreasi" <?php if ($fakultas == "S1 Kesehatan dan Rekreasi") echo "selected" ?>>
                                                    S1 Kesehatan dan Rekreasi
                                                </option>
                                                <option value="S1 Jasmani, Kesehatan, dan Rekreasi" <?php if ($fakultas == "S1 Jasmani, Kesehatan, dan Rekreasi") echo "selected" ?>>
                                                    S1 Jasmani, Kesehatan, dan Rekreasi
                                                </option>
                                            <option disabled>
                                            ====================================================== FEB ======================================================
                                            </option>
                                                <option value="S1 Manajemen" <?php if ($fakultas == "S1 Manajemen") echo "selected" ?>>
                                                S1 Manajemen
                                                </option>
                                                <option value="S1 Manajemen Bisnis" <?php if ($fakultas == "S1 Manajemen Bisnis") echo "selected" ?>>
                                                    S1 Manajemen Bisnis
                                                </option>
                                                <option value="S1 Manajemen Perkantoran" <?php if ($fakultas == "S1 Manajemen Perkantoran") echo "selected" ?>>
                                                    S1 Manajemen Perkantoran
                                                </option>
                                                <option value="S1 Ekonomi dan Koperasi" <?php if ($fakultas == "S1 Ekonomi dan Koperasi") echo "selected" ?>>
                                                    S1 Ekonomi dan Koperasi
                                                </option>
                                                <option value="S1 Ilmu Ekonomi dan Keuangan Islam" <?php if ($fakultas == "S1 Ilmu Ekonomi dan Keuangan Islam") echo "selected" ?>>
                                                    S1 Ilmu Ekonomi dan Keuangan Islam
                                                </option>
                                                <option value="S1 Akuntansi" <?php if ($fakultas == "S1 Akuntansi") echo "selected" ?>>
                                                    S1 Akuntansi
                                                </option>
                                            <option disabled>
                                            ====================================================== FTK ======================================================
                                            </option>
                                                <option value="S1 Teknik Elektro" <?php if ($fakultas == "S1 Teknik Elektro") echo "selected" ?>>
                                                    S1 Teknik Elektro
                                                </option>
                                                <option value="S1 Teknik Mesin" <?php if ($fakultas == "S1 Teknik Mesin") echo "selected" ?>>
                                                    S1 Teknik Mesin
                                                </option>
                                                <option value="S1 Teknik Sipil" <?php if ($fakultas == "S1 Teknik Sipil") echo "selected" ?>>
                                                    S1 Teknik Sipil
                                                </option>
                                                <option value="S1 Teknik Arsitektur" <?php if ($fakultas == "S1 Teknik Arsitektur") echo "selected" ?>>
                                                    S1 Teknik Arsitektur
                                                </option>
                                                <option value="S1 Teknologi Argoindustri" <?php if ($fakultas == "S1 Teknologi Argoindustri") echo "selected" ?>>
                                                    S1 Teknologi Argoindustri
                                                </option>
                                                <option value="S1 Teknik Robotika" <?php if ($fakultas == "S1 Teknik Robotika") echo "selected" ?>>
                                                    S1 Teknik Robotika
                                                </option>
                                            <option disabled>
                                            ====================================================== FIPS ======================================================
                                            </option>
                                                <option value="S1 Ilmu Komunikasi" <?php if ($fakultas == "S1 Ilmu Komunikasi") echo "selected" ?>>
                                                    S1 Ilmu Komunikasi
                                                </option>
                                                <option value="S1 Manajemen Industri Katering" <?php if ($fakultas == "S1 Manajemen Industri Katering") echo "selected" ?>>
                                                    S1 Manajemen Industri Katering
                                                </option>
                                                <option value="S1 Sosiologi" <?php if ($fakultas == "S1 Sosiologi") echo "selected" ?>>
                                                    S1 Sosiologi
                                                </option>
                                                <option value="S1 Geografi" <?php if ($fakultas == "S1 Geografi") echo "selected" ?>>
                                                    S1 Geografi
                                                </option>
                                                <option value="S1 Manajemen Pemasaran Pariwisata" <?php if ($fakultas == "S1 Manajemen Pemasaran Pariwisata") echo "selected" ?>>
                                                    S1 Manajemen Pemasaran Pariwisata
                                                </option>
                                                <option value="S1 Pendidikan Agama Islam" <?php if ($fakultas == "S1 Pendidikan Agama Islam") echo "selected" ?>>
                                                    S1 Pendidikan Agama Islam
                                                </option>
                                        </select>
                                    </div>
                                </div>


                                <!-- inputan foto -->
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Upload Pas Foto</label>
                                        <img src="img/<?= $foto ?>" alt="">
                                    <input class="form-control" type="file" id="formFile" name="file_foto">
                                </div>

                                <!-- Tombol -->
                                <div class="col-12">
                                    <input type="submit" name="simpan" value="Simpan Data" class="btn btn-info text-white">
                                    <input type="reset" name="reset" value="reset" class="btn btn-primary text-white">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Utama -->

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