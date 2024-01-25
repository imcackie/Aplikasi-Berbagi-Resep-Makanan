<?php

include 'config.php';
//untuk mengambil data dari formulir//
$namaresep= $_POST['nama_resep'];
$jumlahresep= $_POST['jumlah_resep'];

$filename = $_FILES['foto_makanan']['name'];
$xx = $rand.'_'.$filename;
mkdir("dataresep/$username");
move_uploaded_file($_FILES['foto_makanan']['tmp_name'],'dataresep/'.$username.'/'.$rand.'_'.$filename);

mysqli_query($conn,"insert into resep values('','$nama_resep','$jumlah_resep','$xx')");
header("Location: halamanutama.php?alert=berhasil");
?>