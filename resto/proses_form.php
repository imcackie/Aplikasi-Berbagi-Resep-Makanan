<!-- proses_form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_makanan = $_POST["nama_makanan"];
    $resep = $_POST["resep"];
    $gambar_makanan = $_FILES["gambar_makanan"];
    $gambar_name = $gambar_makanan["name"];
    $gambar_tmp = $gambar_makanan["tmp_name"];

    // Membuat direktori uploads jika belum ada
    $uploads_dir = 'uploads';
    if (!is_dir($uploads_dir)) {
        mkdir($uploads_dir);
    }

    $gambar_dest = "$uploads_dir/$gambar_name";

    if (move_uploaded_file($gambar_tmp, $gambar_dest)) {
        // Jika file berhasil diunggah
        header("Location: form_resep.php?success=true");
        exit();
    } else {
        // Jika terjadi kesalahan
        header("Location: form_resep.php?success=false");
        exit();
    }
}
?>
