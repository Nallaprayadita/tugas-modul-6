<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM produk WHERE id_produk=$id");
}

header("Location: index.php");
?>
