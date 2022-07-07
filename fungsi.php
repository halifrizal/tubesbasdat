<?php 
    require_once("koneksi2.php");

    class Fungsi extends koneksi{
        public function getCountRows($table){
	    	global $con;
	    	$sql = "SELECT * FROM $table";
	    	$query = mysqli_query($con, $sql);
	    	$rows = mysqli_num_rows($query);
	    	return $rows;
	    }
    }

        $hostname = "localhost";
		$username = "root";
		$password = "";
		$database = "absensi_karyawan";

		$con = mysqli_connect($hostname, $username, $password, $database) or die("Connection corrupt");

?>