<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Form Validasi dengan Javascript - WWW.MALASNGODING.COM</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<br>
		<br>

		<center><h2>WWW.INSTAGRAM.COM/BACHTIARLUBIS</h2></center>

		<br>

		<div class="login">
			<br>
			
			<form action="login.php" method="POST" onsubmit="return validasi()">
			
				<div>
					<label>Username:</label>
					<input type="text" name="username" id="username">
				</div>

				<div>
					<label>Password:</label>
					<input type="password" name="password" id="password">
				</div>

				<div>
					<input type="submit" value="Login" class="tombol">
				</div>

			</form>	

		</div>
		
	</body>

	<?php
		$logout = $_GET['logout'];

		if ($logout == 1) {
			echo "<script type='text/javascript'>";
			echo "alert('Dada Bang !')";
			echo "</script>";
		}			
	?>

	<script type="text/javascript">
		function validasi(){
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;

			if (username != "" && password != "") {

				return true;

			} else {
				alert("Username dan Password harus di isi ! (GAGAL LOGIN)");
				return false;
			}
		}
	</script>
	
</html>