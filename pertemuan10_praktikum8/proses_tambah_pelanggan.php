<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    $stmt = $conn->prepare("INSERT INTO Pelanggan (Nama, Email, Telepon, Alamat) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $email, $telepon, $alamat);

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil ditambahkan');
        window.location='transaksi.php?message=Pelanggan+baru+berhasil+ditambahkan';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data pelanggan');
        window.location='tambah_pelanggan.php';</script>";
    }
}
?>
