<?php
  if(isset($_POST['simpan'])){
    require("../inc/eksekusi.php");
    simpanrute();
  } else if (isset($_POST['update'])){
    require("../inc/eksekusi.php");
    updaterute();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deleterute();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>