<body>
    <div align="center">
        <div class="col-lg-15">
            <div class="table-responsive table--no-card m-b-100">
                <table  class="table table-border
                 table-striped table-earning">
                    <thead>
                       <tr>
                            <th>Tujuan</th>
                            <th>Kota Keberangkatan</th>
                            <th>Rute Akhir</th>
                            <th>Tanggal & Waktu Keberangkatan</th>
                            <th>Tipe Transportasi</th>
                            <th>Kelas</th>
                            <th>Harga</th>
                            <th>Jam Cekin</th>
                            <th>Jam Berangkat</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                            <?php
                               $cari=mysqli_query($conn, "SELECT rute.id_rute,rute.kota_awal,rute.tujuan,rute.rute_akhir,rute.tanggal_berangkat,rute.jam_cekin,rute.jam_berangkat,rute.harga,rute.id_transportasi,type_transportasi.nama_type,type_transportasi.keterangan FROM rute INNER JOIN transportasi ON rute.id_transportasi = transportasi.id_transportasi INNER JOIN type_transportasi ON transportasi.id_type_transportasi = type_transportasi.id_type_transportasi");
                                $no=0;
                                while($data=mysqli_fetch_array($cari)){
                                $no++;
                            ?>
                            <tbody>
                                <tr>
                                     <td><?php echo $data['tujuan']; ?></td>
                                    <td><?php echo $data['kota_awal']; ?></td>
                                    <td><?php echo $data['rute_akhir']; ?></td>
                                    <td><?php echo $data['tanggal_berangkat']; echo "  -   "; echo $data['jam_berangkat']; ?></td>
                                    <td><?php echo $data['nama_type']; ?></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    <td><?php echo "Rp. "; echo $data['harga']; ?></td>
                                    <td><?php echo $data['jam_cekin']; ?></td>
                                    <td><?php echo $data['jam_berangkat']; ?></td>
                                    <td class="text-right">
                                    <a href="template_update_rute.php? id_rute=<?php echo $data['id_rute']; ?>"class="btn btn-primary" name="update">UPDATE</a> 
                                    <a href="proses_rute.php?aksi=delete&id_rute=<?php echo $data['id_rute']; ?>" class="btn btn-primary" name="delete">DELETE</a></td>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                           
                                <!-- END DATA TABLE-->
        </div>
    </div>