<?php
class koneksi_db{
	
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db_name = "userlogin";

	function __construct(){
		//$link = mysql_connect($this->host, $this->user, $this->pass);
		mysql_connect($this->host, $this->user, $this->pass);
		$db_select  = mysql_select_db($this->db_name);

		if ($link && $db_select) {
			echo "<script type='text/javascript'>";
			echo "alert('Koneksi dan DB terhubung')";
			echo "</script>";
		} elseif ($link == true && $db_select == false) {
			echo "<script type='text/javascript'>";
			echo "alert('DB tidak terhubung')";
			echo "</script>";
		} else{
			echo "<script type='text/javascript'>";
			echo "alert('Koneksi GAGAALL !')";
			echo "</script>";
		}
		
	}
}

$database = new koneksi_db();

?>