<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
include 'koneksi_db.php';
include 'nav.php';

$id = $_GET['id'] ?? 0;
// Ambil data buku berdasarkan ID
$stmt = $conn->prepare("SELECT * FROM buku WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Edit Buku</title>
</head>

<body>
    <div class="max-w-2xl mx-auto px-4 py-4">
        <h2 class="text-2xl font-bold mb-4">Edit Data Buku</h2>
        <form method="post" action="proses_edit.php">
            <input type="hidden" name="id" value="<?=$row['ID'] ?>">
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="judul" name="judul" value="<?= htmlspecialchars($row['Judul']) ?>" required>
            </div>
            <div class="mb-4">
                <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="penulis" name="penulis" value="<?= htmlspecialchars($row['Penulis']) ?>" required>
            </div>
            <div class="mb-4">
                <label for="tahun_terbit" class="block text-gray-700 text-sm font-bold mb-2">Tahun Terbit</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tahun_terbit" name="tahun_terbit" value="<?= $row['Tahun_Terbit'] ?>" required>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="harga" name="harga" value="<?= $row['Harga'] ?>" step="0.01" required>
            </div>
            <div class="mb-4">
                <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="stok" name="stok" value="<?= $row['Stok'] ?>" required>
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan Perubahan</button>
        </form>
    </div>
</body>

</html>