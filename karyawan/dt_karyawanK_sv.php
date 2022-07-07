<?php
session_start(); 
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	
	$jumlah = $_POST['jumlah'];
	$nama = $_POST['nama'];
}

$query = "INSERT INTO tb_pengeluaran set id_pengeluaran='', tgl_pengeluaran=CURDATE(), jumlah='$jumlah', nama='$nama'";
//$query = "INSERT INTO `tb_karyawan` (`id_karyawan`, `id_jabatan_coba`, `username`, `password`, `nama`, `tmp_tgl_lahir`, `jenkel`, `agama`, `alamat`, `no_tel`, `foto`) VALUES ('$id_karyawan', '$jabatan', '$username', '$password', '$nama', '$tmp_tgl_lahir', '$jenkel', '$agama', '$alamat', '$no_tel', '');";
mysqli_query($koneksi, $query);

if ($query) {
	header("location: index.php");
    echo "berhasil update data";
}else{
	echo "gagal";
}

 ?>