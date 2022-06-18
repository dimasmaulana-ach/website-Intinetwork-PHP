<?php
session_start();
if ($_POST){
	include 'koneksi.php';

	$email = $_POST['email'];
	$sandi = $_POST['sandi'];

		$login1 = mysqli_query($koneksi,"SELECT * from karyawan where email='$email' and sandi='$sandi'");
		$login2 = mysqli_query($koneksi,"SELECT * from admin where email='$email' and sandi='$sandi'");

		if($cek = mysqli_num_rows($login2)){
			$qry1 = mysqli_fetch_array($login2);
			$_SESSION['id'] = $qry1['id'];
			$_SESSION['name'] = $qry1['name'];
			$_SESSION['email'] = $qry1['email'];
			$_SESSION['sandi'] = $qry1['sandi'];
			$_SESSION['log_admin']=true;
			header("location:admin.php");

		}else if($cek = mysqli_num_rows($login1)){
			$qry2 = mysqli_fetch_array($login1);
			$_SESSION['id'] = $qry2['id'];
			$_SESSION['name'] = $qry2['name'];
			$_SESSION['email'] = $qry2['email'];
			$_SESSION['sandi'] = $qry2['sandi'];
			$_SESSION['log_user']=true;
			header("location:karyawan.php");

		}else{
			header("location:index.php?pesan=gagal");
		}	
}
?>