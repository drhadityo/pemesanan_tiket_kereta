<?php
if (isset($_GET['id_rute'])){
  $no=$_GET['id_rute'];
}
?>
<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Registrasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_rute.php">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Id Rute</label>
                        <input type="text" name="id_rute" class="form-control" placeholder="" value="<?php echo $no; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" name="tujuan" class="form-control" placeholder="Tujuan">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kota Awal</label>
                        <input type="text" name="kota_awal" class="form-control" placeholder="Kota Awal">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Rute Akhir</label>
                        <input type="text" name="rute_akhir" class="form-control" placeholder="Rute Akhir">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Harga">
                        </input>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Type Transportasi</label>
                        <select name="type_transportasi" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT transportasi.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM transportasi inner join type_transportasi on transportasi.id_type_transportasi=type_transportasi.id_type_transportasi ;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_transportasi']; ?>"><?php echo $data['nama_type']; echo "-" ; echo $data['keterangan']; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Berangkat</label>
                        <input type="date" name="tanggal_berangkat" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jam Cekin</label>
                        <input type="time" name="jam_cekin" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jam Berangkat</label>
                        <input type="time" name="jam_berangkat" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                  
                  <div class="box-footer">
                  <button type="submit" name="update" class="btn btn-info">Update</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

            