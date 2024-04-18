<?php
// Mengambil Koneksi dari database
    include ("config.php");
// Pendeklarasian Variabel Awal
    $nama           = ""; 
    $email          = "";   
    $subjek         = "";  
    $pesan          = "";  
    $sukses         = "";   
    $error          = "";   

    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    } else {
        $op = "";
    }
// Apabila mnegklik tombol delete
    if($op == 'delete'){
        $id         = $_GET['id'];
        $sql1       = "DELETE FROM kontak WHERE id_kontak = '$id'";
        $q1         = mysqli_query($conn,$sql1);
        if($q1){
            $sukses = "Berhasil hapus data";
        }else{
            $error  = "Gagal melakukan delete data";
        }
    }
// Apabila Mengklik Tombol Edit
    if ($op == 'edit') {
        $id         = $_GET['id'];
        $sql1       = "SELECT * FROM kontak WHERE id_kontak = '$id'";
        $q1         = mysqli_query($conn, $sql1);
        $r1         = mysqli_fetch_array($q1);
        $nama       = $r1['nama'];
        $email      = $r1['email'];
        $subjek     = $r1['subjek'];
        $pesan      = $r1['pesan'];
    // Apabila tidak mengisi data
        if ($nama == '') {
            $error = "Data tidak ditemukan";    // Menampilkan Pesan 
        }
    }

// Untuk Menyimpan Data apabila mensubmit pesan
    if (isset($_POST['simpan'])) { //untuk create
    // Menghubungkan variabel dengan Database
        $nama        = $_POST['nama'];
        $email       = $_POST['email'];
        $subjek      = $_POST['subjek'];
        $pesan       = $_POST['pesan'];

    // Apabila Semua Data Form Diisi
        if ($nama && $email && $subjek && $pesan) {
        // Apabila Mengklik button edit
            if ($op == 'edit') { //untuk update
                $sql1       = "UPDATE kontak SET nama = '$nama', email = '$email', subjek = '$subjek',  pesan = '$pesan' WHERE id_kontak = '$id'";
                $q1         = mysqli_query($conn, $sql1);
                if ($q1) {
                    $sukses = "Data berhasil diupdate";             // Menampilkan Pesan Sukses
                } else {
                    $error  = "Data gagal diupdate";                // Menampilkan Pesan Gagal
                }
            } else { //untuk insert
                $sql1   = "INSERT INTO kontak(nama,email,subjek,pesan) VALUES ('$nama','$email','$subjek','$pesan')";
                $q1     = mysqli_query($conn, $sql1);
                if ($q1) {
                    $sukses     = "Berhasil memasukkan data baru";  // Menampilkan Pesan Sukses
                } else {
                    $error      = "Gagal memasukkan data";          // Menampilkan Pesan gagal
                }
            }
        } else {
            $error = "Silakan masukkan semua data";                 // Apabila ada salah satu data yang tak terisi
        }
    }


?>