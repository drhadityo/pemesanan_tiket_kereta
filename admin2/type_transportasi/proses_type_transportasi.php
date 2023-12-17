<?php
  if(isset($_POST['simpan'])){
    require("../inc/eksekusi.php");
    simpantypetransportasi();
  } else if (isset($_POST['update'])){
    require("../inc/eksekusi.php");
    updatetypetransportasi();
  } else if (isset($_GET['aksi'])){
    if ($_GET['aksi']=="delete"){
    require("../inc/eksekusi.php");
    deletetypetransportasi();
    }
  }else{
    echo "Data Tidak Ada";
  }
?>