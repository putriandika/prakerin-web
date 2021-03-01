<?php

include('koneksi.php');
$query      = mysqli_query($connect, "SELECT * FROM produk");
$results    = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>Reka Tronik</title>
</head>

<body>


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark text-white bg-success fixed-top">
        <div class="container">
            <h3><i class="fas fa-shopping-cart mr-2 mt-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">Reka Tronik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="#">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="#">Contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5>
                        <i class="fas fa-shopping-cart ml-3 mr-3" data-toggle="tooltip" title="Keranjang"></i>
                        <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan"></i>
                        <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Nofitikasi"></i>
                    </h5>
                </div>
            </div>
        </div>
    </nav>


    <!-- content -->

    <div class="container mb-5">
        <div class="row justify-content-center" style="margin-top:80px;">
            <?php foreach ($results as $result) : ?>
                <div class="card mr-2 mt-5" style="width: 270px; padding:5px;">
                    <img class="card-img-top" src="foto/<?php echo $result['gambar'] ?>" height="250px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text" hidden><?php echo $result['id_produk'] ?></p>
                        <h5 style="text-transform: uppercase;"><?php echo $result['nama_produk'] ?></h5>
                        <p class="card-text"><?php echo $result['deskripsi'] ?></p>
                    </div>
                    <div class="row">
                        <div class="col pb-3 ml-2">
                            <a href="detail_produk.php?id=<?php echo $result['id_produk'] ?>" class="btn btn-primary" style="width: 118px;">Detail Produk</a>
                            <button class="btn btn-danger">Rp. <?php echo $result['harga'] ?></button>
                        </div>
                        <div class="col pb-3 ml-2">
                            <a href="#" class="btn btn-success" style="width: 242px;">Tambah ke Keranjang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>