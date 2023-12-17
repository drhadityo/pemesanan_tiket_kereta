<div class="col-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Lengkapi Data Belum Lengkap</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive table-responsive-data2">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kode Pemesanan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Kota Keberangkatan & Akhir</th>
                    <th>Pemesan</th>
                    <th>Jumlah Penumpang</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  $id_penumpang=$_GET['id_penumpang'];
                   require("../inc/config.php");
                   $sql=mysqli_query($conn, "SELECT pemesanan.id_pemesanan,pemesanan.tanggal_pemesanan,pemesanan.tanggal_berangkat,pemesanan.jumlah_penumpang,pemesanan.kode_pemesanan,pemesanan.id_rute,rute.kota_awal,rute.rute_akhir,penumpang.id_penumpang,penumpang.nama_penumpang FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN penumpang ON penumpang.id_penumpang = pemesanan.id_penumpang WHERE pemesanan.kode_pemesanan ='DATA HARUS LENGKAP TERLEBIH DAHULU' AND penumpang.id_penumpang='$id_penumpang' AND tanggal_pemesanan = CURRENT_DATE() ");
                   while($data=mysqli_fetch_array($sql)){
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $data['kode_pemesanan']; ?></td>
                    <td><?php echo $data['tanggal_pemesanan']; ?></td>
                    <td><?php echo $data['tanggal_berangkat']; ?></td>
                    <td><?php echo $data['kota_awal']; echo "  -   "; echo $data['rute_akhir']; ?></td>
                    <td><?php echo $data['nama_penumpang']; ?></td>
                    <td><?php echo $data['jumlah_penumpang']; ?></td>
                    <td>
                      <a href="template_pesan_tengah.php? id_pemesanan=<?php echo $data['id_pemesanan']; ?>  &&jumlah=<?php echo $data['jumlah_penumpang']; ?>"class="btn btn-primary" name="pesan">LENGKAPI DATA</a>
                    </td>
                  </tr>
                <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Kode Pemesanan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Kota Keberangkatan & Rute Akhir</th>
                    <th>Pemesan</th>
                    <th>Jumlah Penumpang</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>