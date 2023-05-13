<?php 
require_once 'dbkoneksi.php';
?>

<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<?php

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];
$min_stok = $_POST['min_stok'];
$desk = $_POST['desk'];
$kategori_produk = $_POST['kategori_produk'];


echo "<body style='background-color:beige'>";
echo "kode : " . $kode;
echo "<br> Nama : " . $nama;
echo "<br> harga_jual : " . $harga_jual;
echo "<br> harga_beli : " . $harga_beli;
echo "<br> stok : " . $stok;
echo "<br> min_stok : " . $min_stok;
echo "<br> desk : " . $desk;
echo "<br> kategori_produk : " . $kategori_produk;


?>