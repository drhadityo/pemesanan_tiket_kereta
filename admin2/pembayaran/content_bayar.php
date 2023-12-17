<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_bayar.php">
                  <?php
                  if (isset($_POST['id_pemesanan'])){
                    $id=$_POST['id_pemesanan'];
                    $metode=$_POST['metode'];
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
                        <label>Jam Cekin</label>
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
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tagihan</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM `pemesanan` WHERE pemesanan.id_pemesanan = '$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="tagihan" class="form-control" placeholder="Tempat" value="<?php echo "Rp.  "; echo $data['tagihan']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Total Bayar</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM `pemesanan` WHERE pemesanan.id_pemesanan = '$id';");
                          while($data=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" name="bayar" class="form-control" placeholder="Tempat" value="<?php echo "Rp.  "; echo $data['tagihan']; ?>">
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tujuan Transfer</label>
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM bank WHERE id_bank='$metode' ;");
                          while($p=mysqli_fetch_array($sql)){
                           ?>
                        <input type="text" id="makeid" value="<?php echo $p['no_rek']; ?>" name="tujuan" class="form-control" placeholder="No Rekening Tujuan Pembayaran/Nama bank Untuk Tujuan Pembayaran">
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="update" class="btn btn-info">BAYAR</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>