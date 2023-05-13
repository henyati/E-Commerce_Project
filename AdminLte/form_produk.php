<?php
require_once 'header.php';
require_once 'sidebar.php';
require_once 'dbkoneksi.php';

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
              <h3>Form Produk</h3>
              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">


              <form method="POST" action="pesanan.php">
                <div class="form-group row">
                  <label for="kode" class="col-4 col-form-label">Kode</label>
                  <div class="col-8">
                    <input id="kode" name="kode" type="text" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama</label>
                  <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
                  <div class="col-8">
                    <input id="harga_jual" name="harga_jual" value="" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                  <div class="col-8">
                    <input id="harga_beli" name="harga_beli" value="" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stok" class="col-4 col-form-label">Stok</label>
                  <div class="col-8">
                    <input id="stok" name="stok" value="" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
                  <div class="col-8">
                    <input id="min_stok" name="min_stok" value="" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                  <div class="col-8">
                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kategori_produk" class="col-4 col-form-label">Kategori Produk</label>
                  <div class="col-8">

                    <?php
                    $sqlkategori_produk = "SELECT * FROM kategori_produk";
                    $rskategori_produk = $dbh->query($sqlkategori_produk);
                    ?>
                    <select id="kategori_produk" name="kategori_produk" class="custom-select">

                      <?php
                      foreach ($rskategori_produk as $rowkategori_produk) {
                      ?>
                        <option value="<?= $rowkategori_produk['id'] ?>"><?= $rowkategori_produk['nama'] ?></option>

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