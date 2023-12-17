    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Form Cari Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="cetak_laporan_pemesanan.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" required="required" autofocus="autofocus" placeholder="Masukkan Tujuan Anda">
                  </div>
                   <div class="form-group">
                    <label for="tgl_berangkat">Tanggal Berangkat</label>
                    <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat" required="required" autofocus="autofocus" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <select name="nama_petugas" class="form-control">
                <?php
                  require("../inc/config.php");
                  $sql=mysqli_query($conn,"SELECT nama_petugas FROM petugas ");
                  while ($data=mysqli_fetch_array($sql)) {
                ?>
                <option value="<?php echo $data['nama_petugas']; ?>"><?php echo $data ['nama_petugas']; ?></option>
                <?php } ?>
              </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="box-footer">
                  <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>