<?php 
  
  if(isset($_POST['tambah'])) {
    include_once 'config.php';
    $id_buku = $_POST['id_buku'];
    $Nama_Akun_Peminjam = $_POST['Nama_Akun_Peminjam'];
    $Nama_Buku_Yang_Dipinjam = $_POST['Nama_Buku_Yang_Dipinjam'];
    $Tanggal_Peminjaman = $_POST['Tanggal_Peminjaman'];
    $Tanggal_Pengembalian = $_POST['Tanggal_Pengembalian'];

    $input = mysqli_query($con, "INSERT INTO waiting_list VALUES
    ('$id_buku', '$Nama_Akun_Peminjam', '$Nama_Buku_Yang_Dipinjam', '$Tanggal_Peminjaman', '$Tanggal_Pengembalian')");

    if ($input) {
      echo "<h3>Data Berhasil Ditambahkan</h3>";
      echo "<script>window.location = 'waiting_list.php'</script>";
    }
    else  {
      echo "Gagal menambahkan data";
      echo "<a href='wl_tambah.php'>Kembali</a>";
    }
  }
  else {
    echo "<script>window.history.back()</script>";
  }