<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
include 'koneksi_db.php'; // Koneksi database

// Query untuk menampilkan data pesanan beserta nama pelanggan dan total harga
$query = "
SELECT pesanan.ID AS Pesanan_ID, pelanggan.Nama AS
Nama_Pelanggan, pesanan.Tanggal_Pesanan,
pesanan.Total_Harga
FROM pesanan
JOIN pelanggan ON pesanan.Pelanggan_ID = pelanggan.ID
";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Daftar Pesanan</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="max-w-7xl mx-auto px-4 py-4">
        <h2 class="text-2xl font-bold mb-4">Daftar Pesanan</h2>

        <!-- Tabel Daftar Pesanan -->
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">ID Pesanan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama Pelanggan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tanggal Pesanan</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2"><?= $row['Pesanan_ID'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($row['Nama_Pelanggan']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= $row['Tanggal_Pesanan']
                            ?></td>
                        <td class="border border-gray-300 px-4 py-2">Rp<?= number_format($row['Total_Harga'], 2) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>