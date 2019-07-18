<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <!-- JS Library -->
    <script src="../../assets/js/jquery-3.4.1.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <!-- Navigation Bar Start -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
        <!-- Container Start -->
        <div class="container">
            <a class="navbar-brand" href="#">
                KerjaProyekSatu
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../index.php">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="controller/koneksi.php">Cek Koneksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Data</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Master Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view/merk_produk/index.php">Merk Produk</a>
                            <a class="dropdown-item" href="#">Kategori Produk</a>
                            <a class="dropdown-item" href="#">Produk</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search something..." aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!-- End Container -->
    </nav>
    <!-- End Navigation Bar -->

    <!-- Start Content -->
    <article>
        <div class="container" style="padding-top: 30px">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 text-center">Daftar Merk Produk</h1>
                    <hr/>
                    <br/>
                    
                    <a class="btn btn-primary" href="add.php">Tambah Data</a>
                    <br/>
                    <br/>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    include "../../controller/koneksi.php";
                                    $query = "SELECT id_merk, nama_merk FROM merk";
                                    $result = mysqli_query($conn, $query);
                                    
                                    $num = 1;
                                    foreach ($result as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $num++; ?></td>        
                                            <td><?= $row['nama_merk']; ?></td>        
                                            <td class="w-25">
                                                <a class="btn btn-info btn-sm btn-warning" href="edit.php<?= "?id_merk=" .$row['id_merk']; ?>">Ubah Data</a>
                                                <a class="btn btn-info btn-sm bg-danger" href="../../controller/merk_produk/delete.php<?= "?id_merk=" .$row['id_merk']; ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
    <!-- End Content -->
    
</body>
</html>