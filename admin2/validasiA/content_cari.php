<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="template_valid.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>ID Pemesanan</label>
                        <input type="text" name="id" class="form-control" placeholder="ID Pemesanan">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kode Pemesanan</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode Pemesanan">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Penumpang</label>
                        <select name="id_penumpang" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM penumpang;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_penumpang']; ?>"><?php echo $data['nama_penumpang']; ?></option>
                        <?php }?>
                        </select>
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