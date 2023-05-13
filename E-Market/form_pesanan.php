<?php

require_once 'dbkoneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Form Pemesanan - E-Market</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/portfolio/logo.jpg" rel="icon">
  <link href="assets/img/portfolio/logo.jpg" rel="logo-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

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
          <li><a class="nav-link scrollto active" href="form_pesanan.php">Pesanan</a></li>
          <li><a class="nav-link scrollto" href="/projek1_uts_web2/AdminLte/dashboard.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br>

  <main id="main">

    <div class="container">
        <h1>
            <div class="col-md-12 text-center"><b>Form Pemesanan Produk</b>
        </h1>
        <hr>
        <form method="POST" action="/projek1_uts_web2/AdminLte/pesanan.php">
                <div class="form-group row">
                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                    <div class="col-8">
                        <input id="tanggal" name="tanggal" placeholder="yy/mm/dd" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                    <div class="col-8">
                        <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
                    <div class="col-8">
                        <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="no_hp" class="col-4 col-form-label">No Hp</label>
                    <div class="col-8">
                        <input id="no_hp" name="no_hp" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input id="email" name="email" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
                    <div class="col-8">
                        <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                    <div class="col-8">
                        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <br>
            <div class="form-group row">
                <label for="produk" class="col-4 col-form-label">Produk</label>
                <div class="col-8">

                    <?php
                    $sqlproduk = "SELECT * FROM produk";
                    $rsproduk = $dbh->query($sqlproduk);
                    ?>
                    <select id="produk" name="produk" class="custom-select">

                        <?php
                        foreach ($rsproduk as $rowproduk) {
                        ?>
                            <option value="<?= $rowproduk['id'] ?>"><?= $rowproduk['nama'] ?></option>

                        <?php
                        }
                        ?>
                <!--<option value="1">Elektronik</option>
                    <option value="2">Furniture</option>
                    <option value="3">Makanan</option>-->
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <?php

                    if (empty($edit)) {
                        $value = "Simpan";
                    } else {
                        $value = "Update";
                    }

                    ?>
                     
                    
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php echo $value; ?>" />
                    <input type="hidden" name="idedit" value="<?php echo $edit; ?>">
                </div>
            </div>
        </form>
    </div>

                </main><!-- End #main -->

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
