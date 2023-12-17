<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_pesan.php">
                  <?php
                  if (isset($_GET['id_pemesanan'])&&($_SESSION['username'])){
                    $id=$_GET['id_pemesanan'];
                    $cek=$_SESSION['username'];
                  }
                  ?>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Pemesanan</label>
                        <input type="text" name="id_pemesanan" class="form-control" placeholder="Kode" value="<?php echo $id; ?>">
                      </div>
                    </div>
                  </div>
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
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="demo" name="tgl_pesan" class="form-control" placeholder="Tanggal" value="<?php echo $data['tanggal_pemesanan']; ?>">
                      <?php } ?>
                      </div>
                    </div>
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
                        <label>Pemesan</label>
                        <select name="id_penumpang" class="form-control">
                          <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.tanggal_pemesanan,pemesanan.tanggal_berangkat,pemesanan.jumlah_penumpang,pemesanan.kode_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.rute_akhir,penumpang.id_penumpang,penumpang.nama_penumpang FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN penumpang ON penumpang.id_penumpang = pemesanan.id_penumpang WHERE id_pemesanan='$id';");
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
                        <label>Jumlah Penumpang</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="jumlah_penumpang" value="<?php echo $data['jumlah_penumpang']; ?>" class="form-control" placeholder="Jumlah Penumpang/Kepala">
                        <?php } ?>
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.rute_akhir,rute.harga,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan = '$id';");
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan ='$id';");
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.tanggal_berangkat,pemesanan.id_rute,rute.kota_awal,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan ='$id';");
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.jam_cekin,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan ='$id';");
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.jam_berangkat,rute.kota_awal,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan ='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="jam_berangkat" class="form-control" placeholder="Tempat" value="<?php echo $data['jam_berangkat']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga Tiket</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.harga,rute.kota_awal,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan = '$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="demo" name="harga" class="form-control" placeholder="Tanggal" value="<?php echo $data['harga']; ?>">
                      <?php } ?>
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan ='$id';");
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
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.tujuan,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.id_pemesanan ='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" class="form-control" placeholder="Tempat" value="<?php echo $data['keterangan'] ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="update" class="btn btn-info">Pesan</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>