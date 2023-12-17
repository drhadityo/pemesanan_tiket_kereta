<body>
    <div align="center">
        <div class="col-lg-15">
            <div class="table-responsive table--no-card m-b-100">
                <table  class="table table-border
                 table-striped table-earning">
                    <thead>
                        <tr>
                            <th>Nama Type</th>
                            <th>Keterangan</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                            <?php
                                require("../inc/config.php");
                                $cari=mysqli_query($conn, "SELECT * FROM type_transportasi");
                                $no=0;
                                while($data=mysqli_fetch_array($cari)){
                                $no++;
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $data['nama_type']; ?></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    <td class="text-right">
                                    <a href="template_update_type_transportasi.php? id_type_transportasi=<?php echo $data['id_type_transportasi']; ?>"class="btn btn-primary" name="update">UPDATE</a> 
                                    <a href="proses_type_transportasi.php?aksi=delete&id_type_transportasi=<?php echo $data['id_type_transportasi']; ?>" class="btn btn-primary" name="delete">DELETE</a></td>
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