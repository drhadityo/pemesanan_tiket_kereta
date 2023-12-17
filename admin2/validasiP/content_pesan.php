box<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="proses_pesan.php">
                  <?php
                  if (isset($_GET['id_rute'])){
                    $id=$_GET['id_rute'];
                  }
                  ?>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Kode Pemesanan</label>
                        <input type="text" id="makeid" name="kode_pemesanan" class="form-control" placeholder="Kode">
                      </div>
                    </div>
                    <script>
                      function makeid(length) {
                      var result           = '';
                      var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                      var charactersLength = characters.length;
                      for ( var i = 0; i < length; i++ ) {
                      result += characters.charAt(Math.floor(Math.random() * charactersLength));
                        }
                         return result;
                      }
                      document.getElementById("makeid").value = (makeid(10));
                    </script>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Pemesanan</label>
                        <input type="text" id="demo" name="tanggal_pemesanan" class="form-control" placeholder="Tanggal">
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
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tempat Pemesanan</label>
                        <input type="text" name="tempat_pemesanan" class="form-control" placeholder="Tempat">
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
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kode Kursi</label>
                        <input type="text" name="kode_kursi" class="form-control" placeholder="Kode Kursi">
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
                        <label>Tujuan</label>
                        <select name="tujuan" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute where id_rute='$id';");
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
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute where id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="tanggal_berangkat" class="form-control" placeholder="Tempat" value="<?php echo $data['tanggal_berangkat']; ?>">
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jam Cekin</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute where id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="jam_cekin" class="form-control" placeholder="Tempat" value="<?php echo $data['jam_cekin']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jam Berangkat</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM rute where id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="jam_berangkat" class="form-control" placeholder="Tempat" value="<?php echo $data['jam_berangkat']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Total Bayar</label>
                        <input type="text" name="total_bayar" class="form-control" placeholder="Total Bayar">
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
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kereta</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT rute.id_rute,transportasi.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi where rute.id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" class="form-control" placeholder="Tempat" value="<?php echo $data['nama_type'] ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Kelas</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT rute.id_rute,transportasi.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi where rute.id_rute='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" class="form-control" placeholder="Tempat" value="<?php echo $data['keterangan'] ?>">
                        <?php }?>
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