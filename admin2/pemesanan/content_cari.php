<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Form Pemesanan</h3>
                </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="template_pesan.php">
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Keberangkatan</label>
                        <select name="awal" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['kota_awal']; ?>"><?php echo $data['kota_awal']; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Tujuan</label>
                        <select name="tujuan" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['tujuan']; ?>"><?php echo $data['tujuan']; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Keberangkatan</label>
                        <input type="date" name="tgl_berangkat" class="form-control" placeholder="Tahun-Bulan-Hari">
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="viewdetail" class="btn btn-info">Cari</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>