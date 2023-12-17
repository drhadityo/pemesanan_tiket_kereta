<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="../inc/validasi_cetak_bayar.php">
                  <?php
                  if (isset($_GET['id_pemesanan'])&&($_GET['kode_pemesanan'])){
                    $id=$_GET['id_pemesanan'];
                    $kode=$_GET['kode_pemesanan'];
                  }
                  ?>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Pemesanan</label>
                        <input type="text" id="makeid" name="id_pemesanan" class="form-control" placeholder="Kode" value="<?php echo $id; ?>">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode Pemesanan</label>
                        <input type="text" id="makeid" name="kode_pemesanan" class="form-control" placeholder="Kode" value="<?php echo $kode; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="cetak" class="btn btn-info">CETAK</button>  <a href="template_bayar.php?aksi=cari" class="btn btn-info">BACK</a>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>