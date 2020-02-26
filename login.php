<?php
	include "config/koneksi.php";

	$username = $_POST["username"];
	$password = md5($_POST["password"]);

	$sql = "SELECT * FROM userid WHERE username ='$username' AND password='$password'";
	$login = mysql_query($sql);
	$cek = mysql_num_rows($login);

	if ($cek > 0) {
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["status"] = $login;
		header("location:admin/index.php");
	} else{
		header("location:index.php");
	}
	
?>