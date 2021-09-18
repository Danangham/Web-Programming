<?php  
include "koneksi.php"
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR HTML</title>
	<!-- <style></style> -->
	<!-- <script></script> -->
</head>
<body bgcolor="#FF0000FF">
<div>
	<h3>WEBSITE UNTUK BELAJAR HTML</h3>
	<hr>
	<h5>PENYUSUN : <a href="https://DANANG.github.io">DANANG</a></h5>
	<img src="shopee.png" width="200px">
	<table border="1">
		<tread>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>No hp</th>
			<th>Aksi</th>
		</tread>

<?php 
$sql = "select * from anggota order by id_anggota desc";
$hasil = mysqli_query($kon,$sql);
$no=0;
while ($data = mysqli_fetch_array($hasil)) {
	$no++
 ?>
		<tbody>
			
			</tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data ["nama"]; ?></td>
			<td><?php echo $data ["jk"]; ?></td>
			<td><?php echo $data ["alamat"]; ?></td>
			<td><?php echo $data ["email"]; ?></td>
			<td><?php echo $data ["no_hp"]; ?></td>
			<td>
				<a href="">Update</a>
				<a href="">Delete</a>
			<tr>
		<tbody>

		<?php 
			}
		 ?>

	<table>
	<br>
	<a href="create.php">Tambah Data</a>
</div>
</body>
</html>