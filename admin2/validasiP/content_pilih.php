 <div class="col-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Pemesanan</th>
                    <th>Kode Pemesanan</th>
                    <th>Nama Penumpang</th>
                    <th>Aksi</th>
                  </tr>
                  <?php
                   $id=$_POST['id'];
                   $kode=$_POST['kode'];
                   $id_penumpang=$_POST['id_penumpang'];
                   require("../inc/config.php");
                   $sql=mysqli_query($conn, "SELECT pemesanan.id_pemesanan,pemesanan.kode_pemesanan,pemesanan.tanggal_pemesanan,pemesanan.total_bayar,rute.id_rute,rute.kota_awal,rute.tujuan,rute.rute_akhir,rute.tanggal_berangkat,rute.jam_cekin,rute.jam_berangkat,rute.harga,rute.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan,penumpang.id_penumpang,penumpang.nama_penumpang FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi INNER JOIN penumpang ON pemesanan.id_penumpang = penumpang.id_penumpang WHERE pemesanan.id_pemesanan='$id' AND pemesanan.kode_pemesanan='$kode' AND pemesanan.id_penumpang='$id_penumpang' ");
                   while($data=mysqli_fetch_array($sql)){
                  ?>
                  </thead>
                  <tbody>
                  <tr>
                    <td><?php echo $data['id_pemesanan']; ?></td>
                    <td><?php echo $data['kode_pemesanan']; ?></td>
                    <td><?php echo $data['nama_penumpang']; ?></td>
                    <td>
                      <a href="template_valid.php?id_pemesanan=<?php echo $data['id_pemesanan']; ?>&&aksi=detail"class="btn btn-primary" name="detail">DETAIL</a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Pemesanan</th>
                    <th>Kode Pemesanan</th>
                    <th>Nama Penumpang</th>
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