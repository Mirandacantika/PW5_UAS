<?php
    if(isset($_GET['id_buku']))
    {
        include('config.php');
        $id_buku = $_GET['id_buku'];
        $cek = mysqli_query($con, "select id_buku from waiting_list
        where id_buku = '$id_buku'") or die(mysqli_error($con));
    
        if(mysqli_num_rows($cek)==0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $del = mysqli_query($con, "delete from waiting_list where id_buku = '$id_buku'");
            if ($del)
            {
                echo "<h3>Data Berhasil Dihapus</h3>";
                echo "<script>window.location = 'waiting_list.php';</script>";
            }
            else 
            {
                echo "<h2>Gagal Menghapus Data</h2>";
                echo "<a href = 'waiting_list.php'>Kembali </a>";
            }
        }
    }

    else
    {
        echo "<script>window.history.back()</script>";
    }
?>