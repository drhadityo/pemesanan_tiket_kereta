<?php
  if(isset($_POST['simpan_tengah1'])){
    require("../inc/eksekusi.php");
    simpandetail1();
  } else if (isset($_POST['simpan_tengah2'])){
    require("../inc/eksekusi.php");
    simpandetail2();
  } else if (isset($_POST['simpan_tengah3'])){
    require("../inc/eksekusi.php");
    simpandetail3();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deletepesan();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>