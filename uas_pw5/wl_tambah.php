<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-aCompatible" content="IE=edge">
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

    .table{
        background-color: floralwhite;
        width: 500px;
        margin-left: 500px;
        margin-top: 50px;
        margin-bottom: 50px;
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

    <div class="table">
    <form action="wl_tambah_proses.php" method="post">
        <table>
            <tr>
                <td>ID Buku</td>
                <td> : </td>
                <td><input type="number" name="id_buku" required></td>
            </tr>

            <tr>
                <td>Nama Peminjam</td>
                <td> : </td>
                <td><input type="text" name="Nama_Akun_Peminjam" required></td>
            </tr>

            <tr>
                <td>Nama Buku yang Dipinjam</td>
                <td> : </td>
                <td><input type="text" name="Nama_Buku_Yang_Dipinjam" required></td>
            </tr>

            <tr>
                <td>Tanggal Peminjaman</td>
                <td> : </td>
                <td><input type="date" name="Tanggal_Peminjaman" required></td>
            </tr>

            <tr>
                <td>Tanggal Pengembalian</td>
                <td> : </td>
                <td><input type="date" name="Tanggal_Pengembalian" required></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" value="Tambah"><a href="waiting_list.php"></a></td>
            </tr>
        </table>
    </form>
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