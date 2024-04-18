<?php
    include("config.php"); // Mengambil Koneksi Database

    // Pendeklarasian Variabel Awal
        $nama       = "";
        $jenis      = "";
        $tanggal    = "";
        $alamat     = "";
        $nomor      = "";
        $email      = "";
        $sekolah    = "";
        $ortu       = "";
        $fakultas   = "";
        $prodi      = "";
        $foto       = "";
        $sukses     = "";
        $error      = "";

    
        if (isset($_GET['op'])) {
            $op = $_GET['op'];
        } else {
            $op = "";
        }
        // Operasi untuk Mendelete Data apabila pilih delet
        if ($op == 'delete') {
            $id         = $_GET['id'];
            $sql1       = "delete from mahasiswa where id = '$id'";
            $q1         = mysqli_query($conn, $sql1);
            if ($q1) {
                $sukses = "Berhasil hapus data";
            } else {
                $error  = "Gagal melakukan delete data";
            }
        }

    // Operasi untuk Mengedit Data apabila pilih edit
        if ($op == 'edit') {
            $id         = $_GET['id'];
            $sql1       = "SELECT * from mahasiswa where id = '$id'";
            $q1         = mysqli_query($conn, $sql1);
            $r1         = mysqli_fetch_array($q1);
            $nama       = $r1['nama'];
            $jenis      = $r1['jenis_kelamin'];
            $tanggal    = $r1['tanggal_lahir'];
            $alamat     = $r1['alamat'];
            $nomor      = $r1['nomor_telp'];
            $email      = $r1['email'];
            $sekolah    = $r1['asal_sekolah'];
            $ortu       = $r1['nama_org_tua'];
            $prodi      = $r1['nama_prodi'];
            $fakultas   = $r1['nama_fakultas'];
            $foto       = $r1['file_foto'];

            if ($nama == '') {
                $error = "Data tidak ditemukan";
            }
        }

    // Untuk Menyimpan data
        if (isset($_POST['simpan'])) {
        // Menghubungkan Variabel Yang Dimasukkan dengan database
            $nama       = $_POST['nama'];
            $jenis      = $_POST['jenis_kelamin'];
            $tanggal    = $_POST['tanggal_lahir'];
            $alamat     = $_POST['alamat'];
            $nomor      = $_POST['nomor_telp'];
            $email      = $_POST['email'];
            $sekolah    = $_POST['asal_sekolah'];
            $ortu       = $_POST['nama_org_tua'];
            $prodi      = $_POST['nama_prodi'];
            $fakultas   = $_POST['nama_fakultas'];
        // Menghubungkan file foto dengan database
            $foto       = $_FILES["file_foto"]["name"];
            $foto_tmp   = $_FILES["file_foto"]["tmp_name"];

            // Pindahkan file yang diupload ke folder tujuan
            move_uploaded_file($foto_tmp, "img/" . $foto);
        
        // Perintah Apabila Semua Data Form Terisi
            if ($nama && $jenis && $tanggal && $alamat && $nomor && $email && $sekolah && $ortu && $prodi && $fakultas && $foto) {
                if ($op == 'edit') { // Untuk Update Data apabila mengklik tombol edit 
                    $sql1       = "UPDATE mahasiswa set id = '$id', nama='$nama', jenis_kelamin = '$jenis', tanggal_lahir ='$tanggal', alamat = '$alamat', nomor_telp='$nomor', email = '$email', asal_sekolah= '$sekolah', nama_org_tua = '$ortu', nama_prodi= '$prodi', nama_fakultas = '$fakultas', file_foto = '$foto' where id = '$id'";
                    $q1         = mysqli_query($conn, $sql1);
                    if ($q1) {
                        $sukses = "Data berhasil diupdate";         // Pesan Berhasil
                    } else {
                        $error  = "Data gagal diupdate";            // Pesan Gagal
                    }
                } else { // Apabila perintah update tidak dilakukan maka lakukan insert data
                    $sql1       = "INSERT into mahasiswa(nama,jenis_kelamin,tanggal_lahir,alamat,nomor_telp,email,asal_sekolah,nama_org_tua,nama_prodi,nama_fakultas,file_foto,status) values ('$nama','$jenis','$tanggal','$alamat', '$nomor','$email','$sekolah','$ortu','$prodi', '$fakultas','$foto','pending')";
                    $q1         = mysqli_query($conn, $sql1);
                    if ($q1) {
                        $sukses = "Berhasil memasukkan data baru";  // Pesan Berhasil
                    } else {
                        $error  = "Gagal memasukkan data";          // Pesan Gagal / Error
                    }
                }
            } else {
                $error          = "Silakan masukkan semua data";    // Apabila ada data yang tidak terisi
            }
        }

?>