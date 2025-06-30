<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    $sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', $harga, $stok)";
    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            padding: 20px;
        }
        h2 {
            color: #d63384;
        }
        input, button {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
        }
        button {
            background-color: #ff66a3;
            color: white;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #e05591;
        }
    </style>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form method="POST">
        Nama Produk: <input type="text" name="nama_produk" required><br>
        Harga: <input type="number" name="harga" required><br>
        Stok: <input type="number" name="stok" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
