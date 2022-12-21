<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"
        defer></script>

        <style type = "text/css">

    body{
        background: url('9.jpg');
    }

    .navbar{
        background-color: #E3CAAF;
    }

    .btn{
        background-color: #f3f2ed;
    }

    .form-control{
        background-color: #f3f2ed;
    }

    .cardfooter-header{
        text-align: center;
        font-family: cursive;
        font-size: 17px;
        background-color: floralwhite;
    }

    .col-sm{
        text-align: center;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 18px;
        font-weight: bold;
    }

    .card-footer{
        background-color: #E3CAAF;
    }

    .card-konten{
        margin: 30px;
        background-color: #f3f2ed;
    }

    .container-table{
        background-color: floralwhite;
    }

    .jumbotron{
        background: url('9.jpg');
    }

    .display-4{
        font-family: cursive;
    }

    .navbar-brand{
          font-family: cursive;
        }

</style>

    </head>

<body>

<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand">Kiyowo E-Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="books.html" target="_blank">Books</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="waiting_list.php" target="_blank">Waiting List<span class="sr-only">(current)</span></a>
              </li>
            <li class="nav-item active">
                <a class="nav-link" href="logout.php" target="_blank">Logout<span class="sr-only">(current)</span></a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit">Search</button>
          </form>
        </div>
    </nav>


    <div class="jumbotron" id="jadwal">
        <div class="container-table">
            <div class="col-lg-12 text-center my-5">
                <h3 class="display-4">Waiting List</h3>
                <a href="wl_tambah.php">
                    <h4>Tambah Data</h4>
                </a>
            </div>

            <table class="table table-striped" style="text-align: center; ">
                <thead class="table-dark">
                    <th>ID Buku</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Buku yang Dipinjam</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th></th>
                </thead>

                <!-- Menampilkan data mahasiswa -->
                <?php
                include_once 'config.php';
                
                $data = mysqli_query($con, "SELECT * FROM waiting_list");
                while ($d = mysqli_fetch_array($data)) {   
                ?>
                
                <tr>
                    <td><?php echo $d['id_buku']; ?></td>
                    <td><?php echo $d['Nama_Akun_Peminjam']; ?></td>
                    <td><?php echo $d['Nama_Buku_Yang_Dipinjam']; ?></td>
                    <td><?php echo $d['Tanggal_Peminjaman']; ?></td>
                    <td><?php echo $d['Tanggal_Pengembalian']; ?></td>
                    <td>
                        <a href="wl_edit.php ?id_buku=<?php echo $d['id_buku']; ?>">Edit</a>
                        <a href="wl_hapus.php ?id_buku=<?php echo $d['id_buku']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
                <!-- Menampilkan data mahasiswa -->
            </table>
        </div>
    </div>

    <div class="card-footer">
        <div class="cardfooter-header">
          <!-- HTML MARQUEE UNTUK MEMBUAT TEKS BERGESER -->
          <marquee direction="right">Borrowing Books is Easier at Kiyowo E-Library Than E-Perpusnas</marquee> 
        </div>
        <div class="card-body">
          <!-- BOOTSTRAP UNTUK MEMBUAT COLUMN / AGAR FOOTER TERBAGI MENJADI BEBERAPA BAGIAN -->
          <div class="container">
            <div class="row">
            <div class="col-sm">
                👉🏻 Follow Us On 👈🏻
                <div class="col-sm">
                  <br>
                  <a href="https://www.instagram.com/exolence.c/?next=%2F" target="_blank"
                  class="btn btn-outline-primary" role="button" aria-pressed="true">Instagram</a>
                  <a href="https://twitter.com/siahaan___?t=5NYt18bjy7ziveQb_2tVNg&s=08" target="_blank" class="btn btn-outline-primary" role="button" aria-pressed="true">Twitter</a>
                </div>
                <div class="col-sm">
                  <br>
                  <a href="https://www.facebook.com" target="_blank" 
                  class="btn btn-outline-primary" role="button" aria-pressed="true">Facebook</a>
                  <a href="https://www.tiktok.com" target="_blank" 
                  class="btn btn-outline-primary" role="button" aria-pressed="true">TikTok</a>
                </div>
              </div>

              <div class="col-sm">
                <h2>Kiyowo E-Library</h2>
                <h5><br>Semakin Kiyowo Bersama Kiyowo E-Library</h5>
            </div>

              <div class="col-sm">
                💁🏻 Help 💁🏻
                <div class="col-smhelp">
                  <br>
                  <a href="https://somethinc.com/id/faq/general" target="_blank">FAQ</a>
                </div>
                <div class="col-smhelp">
                  <a href="https://somethinc.com/id/terms-and-conditions" target="_blank">Term And Conditions</a>
                </div>
                <div class="col-smhelp">
                  <a href="https://somethinc.com/id/privacy-policy" target="_blank">Privacy And Policy</a>
                </div>
              </div>

</body>

</html>