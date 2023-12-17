<?php
if (isset($_GET['id_type_transportasi'])){
  $no=$_GET['id_type_transportasi'];
}
?>
<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Registrasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_type_transportasi.php">
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Id Type Transportasi</label>
                        <input type="text" name="id_type_transportasi" class="form-control" placeholder="" value="<?php echo $no; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Type</label>
                        <input type="text" name="nama_type" class="form-control" placeholder="Nama Type">
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
                  <div class="box-footer">
                  <button type="submit" name="update" class="btn btn-info">Update</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>

            