<?php
	include "../config/koneksi.php";

	//mengaktifkan session
	session_start();

	//cek apakah user telah login, jika belum login maka dialihkan ke halaman index.php diluar

	if($_SESSION['status'] != "login"){
		header("location:../index.php");
	}

	echo "telah login anda ya ".$_SESSION['username'];
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>