<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="template_valid.php">
                  <?php
                  if (isset($_GET['id_pemesanan'])){
                    $id=$_GET['id_pemesanan'];
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
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="makeid" name="kode" class="form-control" placeholder="Kode" value="<?php echo $data['kode_pemesanan']; ?>">
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tujuan Transfer</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="jam_cekin" class="form-control" placeholder="Tempat" value="<?php echo $data['transfer_ke']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Penumpang</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,penumpang.id_penumpang,penumpang.nama_penumpang FROM pemesanan INNER JOIN penumpang ON pemesanan.id_penumpang = penumpang.id_penumpang WHERE pemesanan.id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="makeid" name="kode" class="form-control" placeholder="Kode" value="<?php echo $data['nama_penumpang']; ?>">
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>No Rekening Penumpang</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,penumpang.id_penumpang,penumpang.nama_penumpang,penumpang.no_rek FROM pemesanan INNER JOIN penumpang ON pemesanan.id_penumpang = penumpang.id_penumpang WHERE pemesanan.id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="makeid" name="kode" class="form-control" placeholder="Kode" value="<?php echo $data['no_rek']; ?>">
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Atas Nama Rekening Penumpang</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan,penumpang.id_penumpang,penumpang.nama_penumpang,penumpang.nama_rek FROM pemesanan INNER JOIN penumpang ON pemesanan.id_penumpang = penumpang.id_penumpang WHERE pemesanan.id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="makeid" name="kode" class="form-control" placeholder="Kode" value="<?php echo $data['nama_rek']; ?>">
                      <?php } ?>
                      </div>
                    </div>
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
                      <div class="form-group">
                        <label>Tujuan</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="demo" name="tgl_pesan" class="form-control" placeholder="Tanggal" value="<?php echo $data['tujuan']; ?>">
                      <?php } ?>
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
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="tgl_berangkat" class="form-control" placeholder="Tempat" value="<?php echo $data['tanggal_berangkat']; ?>">
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
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
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
                          $sql=mysqli_query($conn,"SELECT * FROM pemesanan WHERE id_pemesanan='$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="jam_cekin" class="form-control" placeholder="Tempat" value="<?php echo $data['jam_berangkat']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="back" class="btn btn-info">BACK</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>