<?php
include'inc/config.php';
$username=$_POST ['username'];
$encrypt_pass= md5 (addslashes($_POST['password']));
$pass=$_POST['password'];
$sql = mysqli_query($conn,"SELECT * FROM penumpang where username ='$username' and password = '$encrypt_pass' or password='$pass'");
$hasil=mysqli_num_rows($sql);
if ($hasil > 0) 
{
	$data=mysqli_fetch_assoc($sql);
	if ($data['username']=="$username")
	{
	 session_start();
	 $_SESSION['username']=$username;
	 $_SESSION['password']=$pass;
	 header("location:penumpang.php");
	}
	 
}else{
die("login gagal<a href=\"javascript:history.back()\">kembali</a>");
}
?>
