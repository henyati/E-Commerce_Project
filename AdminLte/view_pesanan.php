<?php
require_once 'header.php';
require_once 'sidebar.php';
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

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3>Form Pesanan</h3>
              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">

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

<div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>