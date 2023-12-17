<?php
if (isset($_GET['id_transportasi'])){
  $no=$_GET['id_transportasi'];
}
?>
<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Update Data Transportasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_transportasi.php">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Id Transportasi</label>
                        <input type="text" name="id_transportasi" class="form-control" placeholder="" value="<?php echo $no; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jumlah Kursi</label>
                        <input type="text" name="jumlah_kursi" class="form-control" placeholder="Jumlah Kursi">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                      </div>
                    </div>
                  </div>
                 <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Type Transportasi</label>
                        <select name="id_type_transportasi" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT transportasi.id_type_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM transportasi inner join type_transportasi on transportasi.id_type_transportasi=type_transportasi.id_type_transportasi ;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_type_transportasi']; ?>"><?php echo $data['nama_type']; echo "-" ; echo $data['keterangan']; ?></option>
                        <?php }?>
                        </select>
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

            