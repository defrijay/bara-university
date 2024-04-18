<?php

$host       = 'localhost';
$user       = 'root';
$password   = '';
$database   = 'db_bara_university';

$conn = mysqli_connect($host, $user, $password, $database);

// Cek Koneksi
if(!$conn){
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
 }



?>