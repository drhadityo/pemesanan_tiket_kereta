<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_pesan.php">
                  <?php
                  if (isset($_GET['id_rute'])&&($_SESSION['username'])){
                    $id=$_GET['id_rute'];
                    $cek=$_SESSION['username'];
                  }
                  ?>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Pemesanan</label>
                        <input type="text" id="demo" name="tanggal_pemesanan" class="form-control" placeholder="Tanggal">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Keberangkatan</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute where id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="tanggal_berangkat" class="form-control" placeholder="Tempat" value="<?php echo $data['tanggal_berangkat']; ?>">
                      <?php } ?>
                      </div>
                    </div>
                    <script>
                      var d = new Date();
                      var taun = d.getFullYear();
                      var bulan = d.getMonth()+1;
                      var hari = d.getDate();
                      if(hari<10) hari='0'+hari;
                      if(bulan<10) bulan='0'+bulan;
                      document.getElementById("demo").value = taun+"-"+bulan+"-"+hari;
                    </script>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jumlah Penumpang</label>
                        <select name="jumlah_penumpang" class="form-control">
                          <option value="1">1 Orang</option>
                          <option value="2">2 Orang</option>
                          <option value="3">3 Orang</option>
                        </select>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Keberangkatan & Tujuan</label>
                        <select name="id_rute" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute where id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_rute']; ?>"><?php echo $data['kota_awal']; echo "-"; echo $data['rute_akhir'];  echo "("; echo $data['harga'];  echo ")"; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Pemesan</label>
                        <select name="id_penumpang" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM penumpang WHERE username='$cek' ;");
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
                          $sql=mysqli_query($conn,"SELECT * FROM petugas ;");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $data['id_petugas']; ?>"><?php echo $data['nama_petugas']; ?></option>
                        <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="simpan" class="btn btn-info">Pesan</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>