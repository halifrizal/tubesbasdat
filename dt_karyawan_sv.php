<?php
session_start(); 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	
	$id_karyawan = $_POST['id_karyawan'];
	$id_jabatan_coba = $_POST['id_jabatan_coba'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$tmp_tgl_lahir = $_POST['tmp_tgl_lahir'];
	$jenkel = $_POST['jenkel'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$no_tel = $_POST['no_tel'];

	//untuk gambar
	$foto     = $_FILES['foto']['name'];
	$tmp      = $_FILES['foto']['tmp_name'];
	$fotobaru = date('dmYHis').$foto;
	$path     = "images/".$fotobaru;
}

if (move_uploaded_file($tmp, $path)) {
	$sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '".$id_karyawan."'";
	$tambah = mysqli_query($koneksi, $sql);
}

// if ($row = mysqli_fetch_row($tambah)) {
// echo "<script>alert('Data Dengan NIP = ".$id_karyawan." sudah ada') </script>";
// 		echo "<script>window.location.href = \"datakaryawan.php\" </script>";

// }

$query = "INSERT INTO tb_karyawan set id_karyawan='$id_karyawan', id_jabatan_coba='$id_jabatan_coba', username='$username', password='$password', nama='$nama', tmp_tgl_lahir='$tmp_tgl_lahir', jenkel='$jenkel', agama='$agama', alamat='$alamat', no_tel='$no_tel', foto='$fotobaru'";
//$query = "INSERT INTO `tb_karyawan` (`id_karyawan`, `id_jabatan_coba`, `username`, `password`, `nama`, `tmp_tgl_lahir`, `jenkel`, `agama`, `alamat`, `no_tel`, `foto`) VALUES ('$id_karyawan', '$jabatan', '$username', '$password', '$nama', '$tmp_tgl_lahir', '$jenkel', '$agama', '$alamat', '$no_tel', '');";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: datakaryawan.php");
}else{
	echo "gagal";
}

 ?>