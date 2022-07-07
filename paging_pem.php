<head>
	 
</head>
<?php 
include 'koneksi.php';

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * FROM tb_pemasukan");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);

$data_pemasukan = mysqli_query($koneksi, "SELECT * FROM tb_pemasukan LIMIT $halaman_awal, $batas");
$nomor = $halaman_awal+1;


while ($row=mysqli_fetch_array($data_pemasukan)) {
 ?>

  <tr>
         <td><?php echo $row['id_pemasukan']; ?></td>
         <td><?php echo $row['tgl_pemasukan']; ?></td>
         <td><?php echo $row['jumlah']; ?></td>
         <td><?php echo $row['nama']; ?></td>   
  
         <td><a href="absen/hapus_keterangan.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?');">Hapus</button></a></td>


         
     </tr>
 <?php } ?>

