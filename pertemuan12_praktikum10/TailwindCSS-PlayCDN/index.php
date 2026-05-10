<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>
<?php include 'proses_index.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Daftar Buku</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="max-w-7xl mx-auto px-4 py-4">
        <h2 class="text-3xl font-bold mb-4">Daftar Buku</h2>

        <!-- Form Pencarian -->
        <form method="get" class="grid grid-cols-12 gap-3 mb-4">
            <div class="col-span-12 md:col-span-5">
                <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Cari Berdasarkan Judul</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="judul" name="judul" placeholder="Masukkan judul buku"
                    value="<?php echo htmlspecialchars($search_judul) ?>">
            </div>
            <div class="col-span-12 md:col-span-3">
                <label for="tahun_terbit" class="block text-gray-700 text-sm font-bold mb-2">Cari Berdasarkan Tahun Terbit</label>
                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="tahun_terbit" name="tahun_terbit"
                    placeholder="Masukkan tahun terbit" value="<?php echo htmlspecialchars($search_tahun) ?>">
            </div>
            <div class="col-span-12 md:col-span-2 flex items-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Cari</button>
            </div>
            <div class="col-span-12 md:col-span-2 flex items-end">
                <a href="index.php" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-center w-full">Reset</a>
            </div>
        </form>

        <!-- Tabel Daftar Buku -->
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Judul</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Penulis</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tahun Terbit</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['ID'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($row['Judul']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($row['Penulis']) ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?php echo $row['Tahun_Terbit'] ?></td>
                        <td class="border border-gray-300 px-4 py-2">Rp<?php echo number_format($row['Harga'], 2) ?></td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="form_edit.php?id=<?php echo $row['ID'] ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded text-sm">Edit</a>
                            <a href="proses_hapus.php?id=<?php echo $row['ID'] ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>