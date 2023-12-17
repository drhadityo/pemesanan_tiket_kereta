<?php
$tujuan=$_POST['tujuan'];
$tgl_berangkat=$_POST['tgl_berangkat'];
$nama_petugas=$_POST['nama_petugas'];
require("config.php");
$sql=mysqli_query($conn,"SELECT pemesanan.tujuan,pemesanan.tanggal_berangkat,petugas.nama_petugas from pemesanan inner join petugas on pemesanan.id_petugas=petugas.id_petugas WHERE pemesanan.tujuan='$tujuan' AND pemesanan.tanggal_berangkat='$tgl_berangkat' AND petugas.nama_petugas='$nama_petugas'");
$data=mysqli_fetch_array($sql);
if (($data['tujuan']!=$tujuan) && ($data['tgl_berangkat']!=$tgl_berangkat) && ($data['nama_petugas']!=$nama_petugas)) {
		echo "<script>alert ('Nis / Tahun Ajaran / Kelas / Jurusan Tidak Sesuai');document.location='../pages/cetak/template_cetak.php?aksi=kedua'</script>";
	}else{
		echo "<script>document.location='../pages/cetak/cetak_laporan_pemesanan.php?tujuan=$data[tujuan]&tgl_berangkat=$data[tanggal_berangkat]&nama_petugas=$data[nama_petugas]'</script>";
	}
?>