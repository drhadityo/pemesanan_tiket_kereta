<?php
$id_penumpang=$_POST['id_penumpang'];
$id_petugas=$_POST['id_petugas'];
require("config.php");
$sql=mysqli_query($conn,"SELECT * from penumpang where id_penumpang='$id_penumpang'");
$data=mysqli_fetch_array($sql);
$sql1=mysqli_query($conn,"SELECT * from petugas where id_petugas='$id_petugas'");
$data1=mysqli_fetch_array($sql1);
if (($data['id_penumpang']!=$id_penumpang)) {
		echo "<script>alert ('Nis / Tahun Ajaran / Kelas / Jurusan Tidak Sesuai');document.location='../cetak/template_cetak.php?aksi=kedua'</script>";
	}else{
		echo "<script>document.location='../cetak/cetak_laporan_penumpang.php?id_penumpang=$data[id_penumpang]&&id_petugas=$data1[id_petugas]'</script>";
	}
?>