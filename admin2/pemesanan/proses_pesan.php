<?php
  if(isset($_POST['simpan'])){
    require("../inc/eksekusi.php");
    simpanpesan();
  } else if (isset($_POST['update'])){
    require("../inc/eksekusi.php");
    updatepesan();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deletepesan();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>