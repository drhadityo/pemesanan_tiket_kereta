<?php
function simpanregistrasi(){ 
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama_penumpang=$_POST['nama_penumpang'];
	$alamat_penumpang=$_POST['alamat_penumpang'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$telephone=$_POST['telephone'];
	$no_rek=$_POST['no_rek'];
	$nama_rek=$_POST['nama_rek'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO penumpang(id_penumpang,username,password,nama_penumpang,alamat_penumpang,tanggal_lahir,jenis_kelamin,telephone,no_rek,nama_rek)
	VALUES('','$username','$password','$nama_penumpang','$alamat_penumpang','$tanggal_lahir','$jenis_kelamin','$telephone','$no_rek','$nama_rek')");
		 if ($save){
		echo "<script>alert ('Registrasi Berhasil');document.location='../login_penumpang.php'</script>";
		}else{
		echo "<script>alert ('Registrasi Gagal! Coba Username Lain!',Coba Lagi);document.location='../registrasi/register.php'</script>"; 
		}
	}
function simpanrute(){
	$tujuan=$_POST['tujuan'];
	$kota_awal=$_POST['kota_awal'];
	$rute_akhir=$_POST['rute_akhir'];
	$harga=$_POST['harga'];
	$id_transportasi=$_POST['type_transportasi'];
	$tanggal_berangkat=$_POST['tanggal_berangkat'];
	$jam_cekin=$_POST['jam_cekin'];
	$jam_berangkat=$_POST['jam_berangkat'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO rute(id_rute,tujuan,kota_awal,rute_akhir,harga,id_transportasi,tanggal_berangkat,jam_cekin,jam_berangkat)
	VALUES('','$tujuan','$kota_awal','$rute_akhir','$harga','$id_transportasi','$tanggal_berangkat','$jam_cekin','$jam_berangkat')");
		if ($save){
		echo "<script>alert ('Data Berhasil Disimpan');document.location='../rute/template_rute.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='../rute/template_rute.php'</script>";
		}
	}
	function updaterute(){
	$id=$_POST['id_rute'];
	$tujuan=$_POST['tujuan'];
	$kota_awal=$_POST['kota_awal'];
	$rute_akhir=$_POST['rute_akhir'];
	$harga=$_POST['harga'];
	$id_transportasi=$_POST['type_transportasi'];
	$tanggal_berangkat=$_POST['tanggal_berangkat'];
	$jam_cekin=$_POST['jam_cekin'];
	$jam_berangkat=$_POST['jam_berangkat'];
	require("config.php");
	$update=mysqli_query($conn,"UPDATE rute SET id_rute='$id',tujuan='$tujuan',kota_awal='$kota_awal',rute_akhir='$rute_akhir',harga='$harga',id_transportasi='$id_transportasi',tanggal_berangkat='$tanggal_berangkat',jam_cekin='$jam_cekin',jam_berangkat='$jam_berangkat' WHERE id_rute='$id'");
		if ($update){
		echo "<script>alert ('Data Berhasil Diupdate');document.location='../rute/template_rute.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate, Coba Lagi');document.location='../rute/template_rute.php'</script>";
		}
	}
	function deleterute(){
		$id=$_REQUEST['id_rute'];
		require ("config.php");
		$delete=mysqli_query($conn,"DELETE FROM rute WHERE id_rute='$id'");
		if($delete){
		echo "<script>alert ('Data Berhasil Dihapus');document.location='../rute/template_rute.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Dihapus');document.location='../rute/template_rute.php'</script>";
		}
	}
	function simpan_transportasi(){
		$kode=$_POST['kode'];
		$jumlah_kursi=$_POST['jumlah_kursi'];
		$keterangan=$_POST['keterangan'];
		$id_type_transportasi=$_POST['id_type_transportasi'];
		require("config.php");
		$save=mysqli_query($conn,"INSERT INTO transportasi(id_transportasi,kode,jumlah_kursi,keterangan,id_type_transportasi)
		VALUES('','$kode','$jumlah_kursi','$keterangan','$id_type_transportasi')");
			if ($save){
			echo "<script>alert ('Data Berhasil Disimpan');document.location='../transportasi/template_transportasi.php'</script>";
			}else{
			echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='../transportasi/template_transportasi.php'</script>";
			}
		}
	function update_transportasi(){
		$id_transportasi=$_POST['id_transportasi'];
		$kode=$_POST['kode'];
		$jumlah_kursi=$_POST['jumlah_kursi'];
		$keterangan=$_POST['keterangan'];
		$id_type_transportasi=$_POST['id_type_transportasi'];
		require("config.php");
		$update=mysqli_query($conn,"UPDATE transportasi SET id_transportasi='$id_transportasi',kode='$kode',jumlah_kursi='$jumlah_kursi',keterangan='$keterangan',id_type_transportasi='$id_type_transportasi' WHERE id_transportasi='$id_transportasi'");
			if ($update){
			echo "<script>alert ('Data Berhasil Diupdate');document.location='../transportasi/template_transportasi.php'</script>";
			}else{
			echo "<script>alert ('Data Gagal Diupdate, Coba Lagi');document.location='../transportasi/template_transportasi.php'</script>";
			}
		}
	function deletetransportasi(){
			$id=$_REQUEST['id_transportasi'];
			require ("config.php");
			$delete=mysqli_query($conn,"DELETE FROM transportasi WHERE id_transportasi='$id'");
			if($delete){
			echo "<script>alert ('Data Berhasil Dihapus');document.location='../transportasi/template_transportasi.php'</script>";
			}else{
			echo "<script>alert ('Data Gagal Dihapus');document.location='../transportasi/template_transportasi.php'</script>";
			}
		}
	function simpantypetransportasi(){
	$nama_type=$_POST['nama_type'];
	$keterangan=$_POST['keterangan'];
	require("config.php");
	$save=mysqli_query($conn,"INSERT INTO type_transportasi(id_type_transportasi,nama_type,keterangan)
	VALUES('','$nama_type','$keterangan')");
		if ($save){
		echo "<script>alert ('Data Berhasil Disimpan');document.location='../type_transportasi/template_type_transportasi.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Disimpan', Coba Lagi);document.location='../type_transportasi/template_type_transportasi.php'</script>";
		}
	}
	function updatetypetransportasi(){
	$id_type_transportasi=$_POST['id_type_transportasi'];
	$nama_type=$_POST['nama_type'];
	$keterangan=$_POST['keterangan'];
	require("config.php");
	$update=mysqli_query($conn,"UPDATE type_transportasi SET id_type_transportasi='$id_type_transportasi',nama_type='$nama_type',keterangan='$keterangan' WHERE id_type_transportasi='$id_type_transportasi'");
		if ($update){
		echo "<script>alert ('Data Berhasil Diupdate');document.location='../type_transportasi/template_type_transportasi.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Diupdate, Coba Lagi');document.location='../type_transportasi/template_type_transportasi.php'</script>";
		}
	}
	function deletetypetransportasi(){
		$id=$_REQUEST['id_type_transportasi'];
		require ("config.php");
		$delete=mysqli_query($conn,"DELETE FROM type_transportasi WHERE id_type_transportasi='$id'");
		if($delete){
		echo "<script>alert ('Data Berhasil Dihapus');document.location='../type_transportasi/template_type_transportasi.php'</script>";
		}else{
		echo "<script>alert ('Data Gagal Dihapus');document.location='../type_transportasi/template_type_transportasi.php'</script>";
		}
	}
function simpanpesan(){
	$tanggal_pemesanan=$_POST['tanggal_pemesanan'];
	$id_rute=$_POST['id_rute'];
	$tanggal_berangkat=$_POST['tanggal_berangkat'];
	$petugas=$_POST['id_petugas'];
	$jumlah_penumpang=$_POST['jumlah_penumpang'];
	$id_penumpang=$_POST['id_penumpang'];
require("config.php");
$save=mysqli_query($conn,"INSERT INTO pemesanan (id_pemesanan,kode_pemesanan,tanggal_pemesanan,id_rute,tanggal_berangkat,id_petugas,jumlah_penumpang,id_penumpang)
VALUES('','DATA HARUS LENGKAP TERLEBIH DAHULU','$tanggal_pemesanan','$id_rute','$tanggal_berangkat','$petugas','$jumlah_penumpang','$id_penumpang')");
if ($save){
	echo "<script>alert ('Data Berhasil Disimpan Lanjut Mohon Lengkapi Data!');document.location='../pemesanan/template_pesan.php?aksi=verif&id_penumpang=$id_penumpang'</script>";
}else{
	echo "<script>alert ('Data Gagal Disimpan');document.location='../pemesanan/template_pesan.php?aksi=cari'</script>";
	}
 		}
 		
function simpanpesan1(){
	$kode_pemesanan=$_POST['kode_pemesanan'];
	$tanggal_pemesanan=$_POST['tanggal_pemesanan'];
	$tempat_pemesanan=$_POST['tempat_pemesanan'];
	$id_penumpang=$_POST['id_penumpang'];
	$kode_kursi=$_POST['kode_kursi'];
	$id_rute=$_POST['id_rute'];
	$tujuan=$_POST['tujuan'];
	$tanggal_berangkat=$_POST['tanggal_berangkat'];
	$jam_cekin=$_POST['jam_cekin'];
	$jam_berangkat=$_POST['jam_berangkat'];
	$petugas=$_POST['id_petugas'];
	$jumlah_penumpang=$_POST['jumlah_penumpang'];
	$harga=$_POST['harga'];
	$total=($jumlah_penumpang * $harga);
require("config.php");
$save=mysqli_query($conn,"INSERT INTO pemesanan (id_pemesanan,kode_pemesanan,tanggal_pemesanan,tempat_pemesanan,id_penumpang,kode_kursi,id_rute,tujuan,tanggal_berangkat,jam_cekin,jam_berangkat,total_bayar,id_petugas,jumlah_penumpang,tagihan)
VALUES('','$kode_pemesanan','$tanggal_pemesanan','$tempat_pemesanan','$id_penumpang','$kode_kursi','$id_rute','$tujuan','$tanggal_berangkat','$jam_cekin','$jam_berangkat','0','$petugas','$jumlah_penumpang','$total')");
if ($save){
	echo "<script>alert ('Data Berhasil Disimpan');document.location='../pemesanan/template_pesan.php?aksi=cari'</script>";
}else{
	echo "<script>alert ('Data Gagal Disimpan');document.location='../pemesanan/template_pesan.php?aksi='</script>";
	}
 		}
function updatepesan(){
	$id_pemesanan=$_POST['id_pemesanan'];
	$kode_pemesanan=$_POST['kode_pemesanan'];
	$tempat_pemesanan=$_POST['tempat_pemesanan'];
	$id_penumpang=$_POST['id_penumpang'];
	$id_rute=$_POST['id_rute'];
	$tujuan=$_POST['tujuan'];
	$tanggal_berangkat=$_POST['tanggal_berangkat'];
	$jam_cekin=$_POST['jam_cekin'];
	$jam_berangkat=$_POST['jam_berangkat'];
	$petugas=$_POST['id_petugas'];
	$jumlah_penumpang=$_POST['jumlah_penumpang'];
	$harga=$_POST['harga'];
	$total=($jumlah_penumpang * $harga);
require("config.php");
$save=mysqli_query($conn,"UPDATE `pemesanan` SET `kode_pemesanan`='$kode_pemesanan',`tempat_pemesanan`='$tempat_pemesanan',`tujuan`='$tujuan',`jam_cekin`='$jam_cekin',`jam_berangkat`='$jam_berangkat',`total_bayar`='0',`tagihan`='$total' WHERE id_pemesanan='$id_pemesanan'");
if ($save){
	echo "<script>alert ('Pemesanan Berhasil Disimpan');document.location='../pemesanan/template_pesan.php?aksi=cari'</script>";
}else{
	echo "<script>alert ('Pemesanan Gagal Disimpan');document.location='../pemesanan/template_pesan.php?aksi=pesan&id_pemesanan=$id_pemesanan'</script>";
	}
 		}
function updatebayar(){
    $id=$_POST['id_pemesanan'];
    $kode=$_POST['kode'];
	$bayar=$_POST['bayar'];
	$tagihan=$_POST['tagihan'];
	$tujuan=$_POST['tujuan'];
require("config.php");
$update=mysqli_query($conn,"UPDATE pemesanan SET total_bayar = '$bayar',transfer_ke = '$tujuan' WHERE id_pemesanan='$id'");	
if ($update){
	echo "<script>alert ('Pembayaran Berhasil');document.location='../pembayaran/template_bayar.php?aksi=cetakbayar&id_pemesanan=$id&kode_pemesanan=$kode'</script>";
}else{
	echo "<script>alert ('Pembayaran Gagal',Coba Lagi);document.location='../pembayaran/template_bayar.php?aksi=cari'</script>";
	}
		}
function simpandetail1(){
	$id_pemesanan=$_POST['id_pemesanan'];
	$kode_kursi=$_POST['kode_kursi'];
	$alamat=$_POST['alamat'];
	$nama_penumpang=$_POST['nama_penumpang'];
	$jumlah=$_POST['jumlah'];
require("config.php");
$save=mysqli_query($conn,"INSERT INTO detail_penumpang (id_detail_penumpang,id_pemesanan,kode_kursi,alamat,nama_penumpang)
VALUES('','$id_pemesanan','$kode_kursi','$alamat','$nama_penumpang')");
if ($save){
	echo "<script>alert ('Data Berhasil Dilengkapi Mohon Final Pemesanan!');document.location='../pemesanan/template_pesan.php?aksi=pesan&id_pemesanan=$id_pemesanan'</script>";
}else{
	echo "<script>alert ('Data Gagal Disimpan! Kode Kursi Sudah Dipesan, Pilih Kursi Yang Berbeda');document.location='../pemesanan/template_pesan_tengah.php?&id_pemesanan=$id_pemesanan&jumlah=$jumlah'</script>";
	}
 		}
 function simpandetail2(){
	$id_pemesanan=$_POST['id_pemesanan'];
	$kode_kursi1=$_POST['kode_kursi1'];
	$alamat1=$_POST['alamat1'];
	$nama_penumpang1=$_POST['nama_penumpang1'];
	$kode_kursi2=$_POST['kode_kursi2'];
	$alamat2=$_POST['alamat2'];
	$nama_penumpang2=$_POST['nama_penumpang2'];
	$jumlah=$_POST['jumlah'];
require("config.php");
$save=mysqli_query($conn,"INSERT INTO detail_penumpang (id_detail_penumpang,id_pemesanan,kode_kursi,alamat,nama_penumpang)
VALUES('','$id_pemesanan','$kode_kursi1','$alamat1','$nama_penumpang1'),('','$id_pemesanan','$kode_kursi2','$alamat2','$nama_penumpang2')");
if ($save){
	echo "<script>alert ('Data Berhasil Dilengkapi Mohon Final Pemesanan!');document.location='../pemesanan/template_pesan.php?aksi=pesan&id_pemesanan=$id_pemesanan'</script>";
}else{
	echo "<script>alert ('Data Gagal Disimpan! Kode Kursi Sudah Dipesan, Pilih Kursi Yang Berbeda');document.location='../pemesanan/template_pesan_tengah.php?&id_pemesanan=$id_pemesanan&jumlah=$jumlah'</script>";
	}
 		}
 function simpandetail3(){
	$id_pemesanan=$_POST['id_pemesanan'];
	$kode_kursi1=$_POST['kode_kursi1'];
	$alamat1=$_POST['alamat1'];
	$nama_penumpang1=$_POST['nama_penumpang1'];
	$kode_kursi2=$_POST['kode_kursi2'];
	$alamat2=$_POST['alamat2'];
	$nama_penumpang2=$_POST['nama_penumpang2'];
	$kode_kursi3=$_POST['kode_kursi3'];
	$alamat3=$_POST['alamat3'];
	$nama_penumpang3=$_POST['nama_penumpang3'];
	$jumlah=$_POST['jumlah'];
require("config.php");
$save=mysqli_query($conn,"INSERT INTO detail_penumpang (id_detail_penumpang,id_pemesanan,kode_kursi,alamat,nama_penumpang)
VALUES('','$id_pemesanan','$kode_kursi1','$alamat1','$nama_penumpang1'),('','$id_pemesanan','$kode_kursi2','$alamat2','$nama_penumpang2'),('','$id_pemesanan','$kode_kursi3','$alamat3','$nama_penumpang3')");
if ($save){
	echo "<script>alert ('Data Berhasil Dilengkapi Mohon Final Pemesanan!');document.location='../pemesanan/template_pesan.php?aksi=pesan&id_pemesanan=$id_pemesanan'</script>";
}else{
	echo "<script>alert ('Data Gagal Disimpan! Kode Kursi Sudah Dipesan, Pilih Kursi Yang Berbeda');document.location='../pemesanan/template_pesan_tengah.php?&id_pemesanan=$id_pemesanan&jumlah=$jumlah'</script>";
	}
 		}
 ?>
