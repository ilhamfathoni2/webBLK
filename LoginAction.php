<?php
	session_start();
	include "koneksi.php";

	if(isset($_POST['login'])){
	
	$NIK = $_POST["NIK"];
	$pass = md5($_POST["password"]);

	$cek = mysqli_query($kon, "SELECT * FROM userdata WHERE NIK='".$NIK."' AND password='".$pass."'");

	if (mysqli_num_rows($cek) > 0){
		$data = mysqli_fetch_object($cek);
		$_SESSION['status_login'] = true;
		$_SESSION['admin_global'] = $data;
		$_SESSION['status'] = $data->status;
		$_SESSION['id'] = $data->id_user;
		$_SESSION['id_user'] = $data->id_user;

		echo '<script>window.location="index.php"</script>';
		}
		else {
			echo '<script>alert("Email atau Password Anda Salah!")</script>';
			echo '<script>window.location="Login.php"</script>';
		}
	}
?>

