<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="template_bayar.php?aksi=bayar">
                  <?php
                  if (isset($_GET['id_pemesanan'])){
                    $id=$_GET['id_pemesanan'];
                  }
                  ?>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Pemesanan</label>
                        <input type="text" hidden id="makeid" name="id_pemesanan" class="form-control" placeholder="Kode" value="<?php echo $id; ?>">
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
                      <div class="form-row">
                        <label >Metode Pembayaran</label>
                        <select name="metode" class="form-control">
                        <?php
                          require("../inc/config.php");
                          $sql=mysqli_query($conn,"SELECT * FROM bank ;");
                          while($p=mysqli_fetch_array($sql)){
                           ?>
                          <option value="<?php echo $p['id_bank']; ?>"><?php echo $p['nama_bank']; echo " :  "; echo $p['no_rek']; echo "  -  "; echo $p['nama_rek']; ?></option>
                          <?php }?>
                        </select>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" class="btn btn-info">PILIH METHOD BAYAR</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>