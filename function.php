<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","db_bara_university");

// Function Untuk Registrasi
    function registrasi($data){
        //global
        global $conn;

        //ambil data
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $password2 = mysqli_real_escape_string($conn,$data["password2"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('username sudah terdaftar');
                </script>";
            return false;
        }

        //cek konfirmasi password
        if($password !== $password2){
            echo "<script>
                    alert('konfirmasi password tidak sesuai');
                </script>";
            return false;
        }

        //enkripsi password
        $password = password_hash($password,PASSWORD_DEFAULT);

        //tambah user baru ke database
        mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password')");
        return mysqli_affected_rows($conn);
}

    //fungsi untuk get data status dari table mahasiswa
    function getStatus($id)
    {
        global $conn;
        $query = "SELECT status from mahasiswa where id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        return $row['status'];
    }

?>