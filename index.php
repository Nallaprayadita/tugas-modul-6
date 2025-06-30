<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            color: #333;
            padding: 20px;
        }
        h2 {
            color: #d63384;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ff99cc;
        }
        th {
            background-color: #ffb6d9;
            color: #fff;
        }
        td {
            padding: 10px;
        }
        a {
            color: #d63384;
            text-decoration: none;
            margin: 0 5px;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            background-color: #ff66a3;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #e05591;
        }
    </style>
</head>
<body>
    <h2>Daftar Produk Toko Online</h2>
    <a class="btn" href="tambah.php">Tambah Produk Baru</a><br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produk");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id_produk'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_produk'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
