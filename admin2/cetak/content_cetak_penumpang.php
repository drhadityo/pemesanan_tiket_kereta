
        
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Form Cari Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="cetak_laporan_penumpang.php">
                <?php
                  if (isset($_SESSION['username'])){
                    $cek=$_SESSION['username'];
                  }
                  ?>      
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Penumpang</label>
                        <select name="id_penumpang" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM penumpang ;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_penumpang']; ?>"><?php echo $data['nama_penumpang']; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>      
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Petugas</label>
                        <select name="id_petugas" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM petugas WHERE username='$cek' ;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_petugas']; ?>"><?php echo $data['nama_petugas']; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="box-footer">
                  <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>
                </div> 
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- /.row -->
    </section>
    