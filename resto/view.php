<?php
include 'config.php';
?>
<html>
<head>
	<div><p><marquee behavior="scroll"><h1><b>SELAMAT DATANG DI WEBSITE RESTCOOK<b><h1></marquee></p>
</head>
<body bgcolor="darkorange">
<table>
	<tr>
		<th>No</th>
		<th>Nama Resep</th>
		<th>Jumlah Resep</th>
		<th>Foto Makanan</th>
	</tr>
<?php
$data = mysqli_query($conn,"select * from resep");
if(!$data){
	die("Query Error : ".mysqli_error($conn).".".mysqli_error($conn));
}
$no = 1;
while($d = mysqli_fetch_assoc($data)) {
?>
<tr>
	<td><?php echo $no++; ?></td>
	<td><?php echo $d['nama_resep']; ?></td>
	<td><?php echo $d['jumlah_resep']; ?></td>
	<td><?php echo $d['foto_makanan']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>