<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once 'dbkoneksi.php';


?>

<?php
$sql = "SELECT * FROM kategori_produk";
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
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h1>Data Kategori</h1>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">


              <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nomor  = 1;
                  foreach ($rs as $row) {
                  ?>
                    <tr>
                      <td><?= $nomor ?></td>
                      <td><?= $row['nama'] ?></td>


                      <td>
                        <a type="button" class="btn btn-success" href="view_produk.php?id=<?= $row['id'] ?>">View</a>
                        <a type="button" class="btn btn-info" href="form_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                        <a type="button" class="btn btn-danger" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                      </td>
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