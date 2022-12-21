<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "web_buku";

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo 'Koneksi Tidak Berhasil :' . mysqli_connect_error();
}

?>