<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM produk WHERE id_produk=$id");
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];

    $sql = "UPDATE produk SET nama_produk='$nama', harga=$harga, stok=$stok WHERE id_produk=$id";
    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal memperbarui data!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
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
    <h2>Edit Produk</h2>
    <form method="POST">
        Nama Produk: <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br>
        Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
