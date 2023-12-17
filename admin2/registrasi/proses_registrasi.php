<?php
  if(isset($_POST['simpan'])){
    require("../inc/eksekusi.php");
    simpanregistrasi();
  } else if (isset($_POST['update'])){
    require("../inc/eksekusi.php");
    updateregistrasi();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deleteregistrasi();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>