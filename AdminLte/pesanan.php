<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once 'dbkoneksi.php';


?>

<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>

<!-- Content Wrapper. Contains page content -->
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
              <h3>Data Pesanan</h3>
              <div class="card-tools">
                
              </div>
            </div>
            <div class="card-body">

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pemesan</th>
            <th>No Hp</th>
            <th>email</th>
            <th>Jumlah Pesanan</th>
            <th>Deskripsi</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['nama_pemesan'] ?></td>
                <td><?= $row['alamat_pemesan'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['jumlah_pesanan'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
            
               
            </tr>
        <?php
            $nomor++;
        }
        ?>
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