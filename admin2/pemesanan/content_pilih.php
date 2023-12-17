      <div class="col-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Pilihan Keberangkatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive table-responsive-data2">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kota Keberangkatan</th>
                    <th>Tujuan</th>
                    <th>Rute Akhir</th>
                    <th>Tanggal & Waktu Keberangkatan</th>
                    <th>Tipe Transportasi</th>
                    <th>Kelas</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                   $awal=$_POST['awal'];
                   $akhir=$_POST['tujuan'];
                   $tgl=$_POST['tgl_berangkat'];
                   require("../inc/config.php");
                   $sql=mysqli_query($conn, "SELECT rute.id_rute,rute.kota_awal,rute.tujuan,rute.rute_akhir,rute.tanggal_berangkat,rute.jam_cekin,rute.jam_berangkat,rute.harga,rute.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE rute.kota_awal='$awal' AND rute.tujuan='$akhir' AND rute.tanggal_berangkat='$tgl'");
                   while($data=mysqli_fetch_array($sql)){
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $data['kota_awal']; ?></td>
                    <td><?php echo $data['tujuan']; ?></td>
                    <td><?php echo $data['rute_akhir']; ?></td>
                    <td><?php echo $data['tanggal_berangkat']; echo "  -   "; echo $data['jam_berangkat']; ?></td>
                    <td><?php echo $data['nama_type']; ?></td>
                    <td><?php echo $data['keterangan']; ?></td>
                    <td><?php echo "Rp.  "; echo $data['harga']; ?></td>
                    <td>
                      <a href="template_pesan.php? id_rute=<?php echo $data['id_rute']; ?>  &&aksi=awal"class="btn btn-primary" name="pesan">PESAN</a>
                    </td>
                  </tr>
                <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Kota Keberangkatan</th>
                    <th>Tujuan</th>
                    <th>Rute Akhir</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Tipe Transportasi</th>
                    <th>Kelas</th>
                    <th>Harga</th>
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