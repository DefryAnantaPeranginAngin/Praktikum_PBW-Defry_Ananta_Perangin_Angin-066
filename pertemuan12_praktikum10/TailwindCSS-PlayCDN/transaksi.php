<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
include 'koneksi_db.php';
include 'nav.php';
// Ambil daftar buku dan pelanggan
$buku_result = $conn->query("SELECT ID, Judul FROM buku");
$pelanggan_result = $conn->query("SELECT ID, Nama FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Buat Pesanan</title>
</head>

<body>
    <div class="max-w-4xl mx-auto px-4 py-4">
        <h2 class="text-2xl font-bold mb-4">Buat Pesanan Baru</h2>
        <?php if (isset($_GET['message'])): ?>
            <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded mb-4"><?= htmlspecialchars($_GET['message']) ?></div>
        <?php endif; ?>

        <form method="post" action="proses_transaksi.php">
            <div class="mb-4">
                <label for="pelanggan_id" class="block text-gray-700 text-sm font-bold mb-2">Pilih Pelanggan</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="pelanggan_id"
                    id="pelanggan_id" required>
                    <option value="">Pilih Pelanggan</option>
                    <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
                        <option value="<?= $row['ID'] ?>"><?= $row['Nama'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <h3 class="text-xl font-bold mb-4 mt-6">Daftar Buku</h3>
            <div class="mb-4">
                <label for="buku_id" class="block text-gray-700 text-sm font-bold mb-2">Pilih Buku</label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="buku[1][id]"
                    id="buku_id" required>
                    <option value="">Pilih Buku</option>
                    <?php while ($row = $buku_result->fetch_assoc()): ?>
                        <option value="<?= $row['ID'] ?>"><?= $row['Judul'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="kuantitas" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Buku</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="kuantitas" name="buku[1][kuantitas]" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Buat Pesanan</button>
        </form>
    </div>
</body>

</html>