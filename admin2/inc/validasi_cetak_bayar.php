<?php
$id=$_POST['id_pemesanan'];
require("config.php");
$sql=mysqli_query($conn,"SELECT pemesanan.id_pemesanan from pemesanan  WHERE pemesanan.id_pemesanan='$id'");
$data=mysqli_fetch_array($sql);
if (($data['id_pemesanan']!=$id)) {
		echo "<script>alert ('Nis / Tahun Ajaran / Kelas / Jurusan Tidak Sesuai');document.location='../pages/cetak/template_cetak.php?aksi=kedua'</script>";
	}else{
		echo "<script>document.location='../pembayaran/cetak_bayar.php?id_pemesanan=$data[id_pemesanan]'</script>";
	}
?>