<?php
include'inc/config.php';
$username=$_POST ['username'];
$encrypt_pass= md5 (addslashes($_POST['password']));
$pass=$_POST['password'];
$sql = mysqli_query($conn,"SELECT petugas.id_petugas,petugas.username,petugas.password,petugas.nama_petugas,petugas.id_level,level.id_level,level.nama_level FROM petugas INNER JOIN level ON petugas.id_level = level.id_level where petugas.username ='$username' and petugas.password = '$encrypt_pass' or password='$pass'");
$hasil=mysqli_num_rows($sql);
if ($hasil > 0) 
{
	$data=mysqli_fetch_assoc($sql);
	if ($data['nama_level']=="Admin")
	{
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['password']=$pass;
	 header("location:admin.php");
	}
	 else if ($data['nama_level']=="Petugas")
	{
	session_start();
	$_SESSION['username']=$username;
	$_SESSION['password']=$pass;
	header("location:petugas.php");
	}
}else{
die("login gagal<a href=\"javascript:history.back()\">kembali</a>");
}
?>
