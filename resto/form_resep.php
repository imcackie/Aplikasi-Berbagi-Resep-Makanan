
<!-- form_resep.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengajuan Resep Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .success-message {
            color: #4CAF50;
        }

        .error-message {
            color: #FF0000;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
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
                echo "<p class='success-message'>Resep berhasil diunggah!</p>";
                echo "<p>Nama Makanan: $nama_makanan</p>";
                echo "<p>Resep/Bahan-Bahan: $resep</p>";
                echo "<p>Gambar Makanan: <img src='$gambar_dest' alt='Gambar Makanan'></p>";
            } else {
                // Jika terjadi kesalahan
                echo "<p class='error-message'>Terjadi kesalahan saat mengunggah resep.</p>";
            }
        }
        ?>

        <h2>Pengajuan Resep Makanan</h2>
        <form action="form_resep.php" method="post" enctype="multipart/form-data">
            <label for="nama_makanan">Nama Makanan:</label>
            <input type="text" name="nama_makanan" required>

            <label for="gambar_makanan">Gambar Makanan:</label>
            <input type="file" name="gambar_makanan" accept="image/*" required>

            <label for="resep">Resep atau Bahan-Bahan:</label>
            <textarea name="resep" rows="8" cols="40" required></textarea>

            <input type="submit" value="Kirim Resep">
        </form>
    </div>
</body>
</html>