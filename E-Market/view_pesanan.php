<?php

require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM pesanan a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Pesanan</title>
</head>


<div class="container">
  <h1>
    <div class="col-md-12 text-center"><b>Detail Produk</b>
  </h1>
  <hr>

  <body>

    <table class="table table-striped">
      <tbody>
        <tr>
          <td>ID</td>
          <td><?= $row['id'] ?></td>
        </tr>
        <tr>
          <td>Tanggal</td>
          <td><?= $row['tanggal'] ?></td>
        </tr>
        <tr>
          <td>Nama Pemesan</td>
          <td><?= $row['nama_pemesan'] ?></td>
        </tr>
        <tr>
          <td>Alamat Pemesan</td>
          <td><?= $row['alamat_pemesan'] ?></td>
        </tr>
        <tr>
          <td>No Hp</td>
          <td><?= $row['no_hp'] ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?= $row['email'] ?></td>
        </tr>
        <tr>
          <td>Jumlah Pesanan</td>
          <td><?= $row['jumlah_pesanan'] ?></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td><?= $row['deskripsi'] ?></td>
        </tr>
      </tbody>
    </table>
  </body>