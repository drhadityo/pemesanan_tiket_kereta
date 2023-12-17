<?php
  if(isset($_POST['simpan'])){
    require("../inc/eksekusi.php");
    simpan_transportasi();
  } else if (isset($_POST['update'])){
    require("../inc/eksekusi.php");
    update_transportasi();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deletetransportasi();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>