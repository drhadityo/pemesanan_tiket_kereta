<body>
    <div align="center">
        <div class="col-lg-15">
            <div class="table-responsive table--no-card m-b-100">
                <table  class="table table-border table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Id Transportasi</th>
                            <th>Kode</th>
                            <th>Jumlah Kursi</th>
                             <th>Keterangan</th>
                            <th>Id Type Transportasi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                            <?php
                                require("../inc/config.php");
                                $cari=mysqli_query($conn, "SELECT * FROM transportasi");
                                $no=0;
                                while($data=mysqli_fetch_array($cari)){
                                $no++;
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $data['id_transportasi']; ?></td>
                                    <td><?php echo $data['kode']; ?></td>
                                    <td><?php echo $data['jumlah_kursi']; ?></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    <td><?php echo $data['id_type_transportasi']; ?></td>
                                    <td class="text-right">
                                    <a href="template_update_transportasi.php? id_transportasi=<?php echo $data['id_transportasi']; ?>"class="btn btn-primary" name="update">UPDATE</a> 
                                    <a href="proses_transportasi.php?aksi=delete&id_transportasi=<?php echo $data['id_transportasi']; ?>" class="btn btn-primary" name="delete">DELETE</a></td>
                                    </tr>
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