<?php
require_once 'dbkoneksi.php';
?>

<?php
$_id = $_POST['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Detail Produk - E-Market</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/portfolio/logo.jpg" rel="icon">
    <link href="assets/img/portfolio/logo.jpg" rel="logo-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>E-Market</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="form_pesanan.php">Pesanan</a></li>
                    <li><a class="nav-link scrollto active" href="/projek1_uts_web2/AdminLte/dashboard.php">Admin</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">
        <div class="container">
            <h1>
                <div class="col-md-12 text-center"><b>Detail Produk</b>
            </h1>
            <hr>
            <thead>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td><?= $row['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode</td>
                            <td><?= $row['kode'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Produk</td>
                            <td><?= $row['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Jual</td>
                            <td><?= $row['harga_jual'] ?></td>
                        </tr>
                        <tr>
                            <td>Harga Beli</td>
                            <td><?= $row['harga_beli'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><?= $row['stok'] ?></td>
                        </tr>
                        <tr>
                            <td>Minimum Stok</td>
                            <td><?= $row['min_stok'] ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $row['deskripsi'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori Produk</td>
                            <td><?= $row['kategori_produk_id'] ?></td>
                        </tr>
                    </tbody>
                </table>
    </main>
    <br>

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>E-Market</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                Designed by <a href="*">Henyati Hasim</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>