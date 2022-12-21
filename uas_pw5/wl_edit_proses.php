<?php 
  
  if(isset($_POST['simpan'])) 
  {
    include ('config.php');
    $id_buku = $_POST['id_buku'];
    $Nama_Akun_Peminjam = $_POST['Nama_Akun_Peminjam'];
    $Nama_Buku_Yang_Dipinjam = $_POST['Nama_Buku_Yang_Dipinjam'];
    $Tanggal_Peminjaman = $_POST['Tanggal_Peminjaman'];
    $Tanggal_Pengembalian = $_POST['Tanggal_Pengembalian'];
    $update = mysqli_query($con, "Update waiting_list Set

    Nama_Akun_Peminjam = '$Nama_Akun_Peminjam',
    Nama_Buku_Yang_Dipinjam = '$Nama_Buku_Yang_Dipinjam',
    Tanggal_Peminjaman = '$Tanggal_Peminjaman',
    Tanggal_Pengembalian = '$Tanggal_Pengembalian'

    where id_buku = '$id_buku'")
    
    or die(mysqli_error($con));
    
    if($update)
    {
        echo "<h2>Data Berhasil Diperbarui</h2>";
        echo "<script>window.location = 'waiting_list.php'</script>";
    }

    else
    {
        echo "<h2>Gagal Menyimpan Data</h2>";
        echo "<a href = 'wl_edit.php ?id_buku = ".$id_buku."'>kembali</a>";
    }
    }

    else 
    {
        echo "<script>window.history.back()</script>";
    }

  ?>