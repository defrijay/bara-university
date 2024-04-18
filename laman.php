<?php
    include ("config.php");
    // Memeriksa apakah pengguna telah login
        session_start();
        if(!isset($_SESSION['username'])){
        header("location: loginAdmin.php");
        exit;
        }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bara University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="text-center mt-5">
    <a href = "admin.php"><Button class = "btn btn-primary">List Approved</Button> </a>
    
    </div>
    <!-- Untuk Menampilkan DataData -->
    <div class="mx-auto mt-3">
        <div class="card m-5">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2 = "SELECT * from mahasiswa where status = 'pending' order by id DESC";
                        $q2 = mysqli_query($conn, $sql2);
                        $urut = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id = $r2['id'];
                            $nama = $r2['nama'];
                            $jenis = $r2['jenis_kelamin'];
                            $tanggal = $r2['tanggal_lahir'];
                            $alamat = $r2['alamat'];
                            $email = $r2['email'];
                            
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $urut++ ?>
                                </th>
                                <td scope="row">
                                    <?php echo $nama ?>
                                </td>
                                <td scope="row">
                                    <?php echo $jenis ?>
                                </td>
                                <td scope="row">
                                    <?php echo $tanggal ?>
                                </td>
                                <td scope="row">
                                    <?php echo $alamat ?>
                                </td>
                                <td scope="row">
                                    <?php echo $email ?>
                                </td>
                                <td>
                                <form action ="laman.php" method = "POST">
                                    <input type = "hidden" name = "id" value = "<?php echo $id ?>"/>
                                    <input type = "submit" name = "approve" value = "approve" class = "btn btn-primary"/>
                                    <input type = "submit" name = "deny" value = "deny" class = "btn btn-danger" onclick="return confirm('Yakin mau delete data?')"/>
                                </form>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['approve'])){
        $id = $_POST['id'];

        $select = "UPDATE mahasiswa SET status = 'approved' WHERE id = '$id'";
        $query = mysqli_query($conn, $select);

        if($query){
            echo "<script>alert('Data berhasil di approve')</script>";
            echo "<script>window.location.href = 'laman.php'</script>";
        }else{
            echo "<script>alert('Data gagal di approve')</script>";
            echo "<script>window.location.href = 'laman.php'</script>";
        }
        
    }
    if(isset($_POST['deny'])){
        $id = $_POST['id'];

        // delete
        $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>alert('Data berhasil di hapus')</script>";
            echo "<script>window.location.href = 'laman.php'</script>";
        }else{
            echo "<script>alert('Data gagal di hapus')</script>";
            echo "<script>window.location.href = 'laman.php'</script>";
        }
    }
    ?>
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
        &copy; Copyright 2023 <strong><span>BARA University</span></strong>. Bara University | Bara University adalah
        Universitas Negeri Milik Pemerintah Negeri Republik Indonesia Terdaftar pada Kemendikbud
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

</body>

</html>