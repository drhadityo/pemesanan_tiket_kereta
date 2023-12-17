<div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Form Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <form method="post" action="proses_detail.php">
                  <?php
                  if (isset($_GET['id_pemesanan'])){
                    $id=$_GET['id_pemesanan'];
                    $jumlah=$_GET['jumlah'];
                  }
                  ?>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>ID Pemesanan</label>
                        <input type="text" id="demo" name="id_pemesanan" value="<?php echo $id; ?>" class="form-control" placeholder="Tanggal">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Jumlah Penumpang</label>
                          <input type="text" id="demo" name="jumlah" value="<?php echo $jumlah; ?>" class="form-control" placeholder="Tanggal">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group">
                      <div class="form-row">
                        <label for="inputEmail">Kode Kursi</label>
                        <select name="kode_kursi" class="form-control">
                          <option>A01</option>
                          <option>A02</option>
                          <option>A03</option>
                          <option>A04</option>
                          <option>A05</option>
                          <option>A06</option>
                          <option>A07</option>
                          <option>A08</option>
                          <option>A09</option>
                          <option>A10</option>
                          <option>A11</option>
                          <option>A12</option>
                           <option>B01</option>
                          <option>B02</option>
                          <option>B03</option>
                          <option>B04</option>
                          <option>B05</option>
                          <option>B06</option>
                          <option>B07</option>
                          <option>B08</option>
                          <option>B09</option>
                          <option>B10</option>
                          <option>B11</option>
                          <option>B12</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Penumpang</label>
                        <input type="text" id="demo" name="nama_penumpang" class="form-control" placeholder="Nama Penumpang">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" id="demo" name="alamat" class="form-control" placeholder="Alamat">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="box-footer">
                  <button type="submit" name="simpan_tengah1" class="btn btn-info">LENGKAPI DATA</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>