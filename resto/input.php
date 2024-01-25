<html>
<head>
</head>
<marquee behavior="scroll" direction="left" scrollamount="15">
<H1>Selamat Datang Di Form Input Resep RESTCOOK</H1>
  </marquee>
<body bgcolor="cyan">
	<form name="" method="POST" action="inputdata.php" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<td>Nama Resep :</td>
				<td><input type="text" name="nama_resep" class="input"></td>
			</tr>
			<tr>
				<td>Jumlah Resep :</td>
				<td><input type="text" name="jumlah_resep_" class="input"></td>
			</tr>
			<tr>
				<td>Foto Makanan:</td>
				<td><input type="file" class="form-control-file" name="foto_makanan"></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" class="submit" value="Simpan"></td>
			</tr>
		</table>
</body>
</html>