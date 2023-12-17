<div class="col-12">
            <div class="box">
              <p>
                <img src="images/bca.jpg" width="200" height="150" alt="BCA"/>
                <img src="images/bni.jpg" width="200" height="150" alt="BNI"/>
              </p>
              <div class="box-header">
                <h3 class="box-title">Pilihan Pemesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="table-responsive table-responsive-data2">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Kode Pemesanan</th>
                    <th>Kota Keberangkatan</th>
                    <th>Tujuan</th>
                    <th>Tanggal & Waktu Keberangkatan</th>
                    <th>Tipe Transportasi</th>
                    <th>Kelas</th>
                    <th>Tagihan</th>
                    <th>Total Bayar</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                   require("../inc/config.php");
                   $sql=mysqli_query($conn, "SELECT pemesanan.id_pemesanan,pemesanan.kode_pemesanan,pemesanan.tanggal_pemesanan,pemesanan.total_bayar,pemesanan.tagihan,rute.id_rute,rute.kota_awal,rute.tujuan,rute.rute_akhir,rute.tanggal_berangkat,rute.jam_cekin,rute.jam_berangkat,rute.harga,rute.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM pemesanan INNER JOIN rute ON pemesanan.id_rute = rute.id_rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi WHERE pemesanan.total_bayar = '0' ");
                   while($data=mysqli_fetch_array($sql)){
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $data['kode_pemesanan']; ?></td>
                    <td><?php echo $data['kota_awal']; ?></td>
                    <td><?php echo $data['tujuan']; ?></td>
                    <td><?php echo $data['tanggal_berangkat']; echo "  -   "; echo $data['jam_berangkat']; ?></td>
                    <td><?php echo $data['nama_type']; ?></td>
                    <td><?php echo $data['keterangan']; ?></td>
                    <td><?php echo "Rp.  "; echo $data['tagihan']; ?></td>
                    <td><?php echo $data['total_bayar']; ?></td>
                    <td>
                      <a href="template_bayar.php? id_pemesanan=<?php echo $data['id_pemesanan']; ?>&&aksi=method"class="btn btn-primary" name="bayar">BAYAR</a>
                    </td>
                  </tr>
                <?php } ?>
                  </tbody>
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