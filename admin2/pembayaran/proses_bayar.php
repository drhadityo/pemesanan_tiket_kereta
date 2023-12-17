<?php
  if(isset($_POST['cetak'])){
    require("../inc/eksekusi.php");
    cetakbayar();
  } else if (isset($_POST['update'])){
    require("../inc/eksekusi.php");
    updatebayar();
  }  else if (isset($_POST['coba'])){
    require("../inc/eksekusi.php");
    updatecoba();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deletebayar();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>