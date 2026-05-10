<!-- Menu Navigasi -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="bg-gray-800 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-4">
        <a class="text-xl font-bold" href="index.php">Toko Buku Online</a>
        <div class="hidden lg:flex lg:items-center lg:justify-end space-x-4">
            <a class="text-white hover:text-gray-300" href="index.php">Daftar Buku</a>
            <a class="text-white hover:text-gray-300" href="tambah_buku.php">Tambah Buku</a>
            <a class="text-white hover:text-gray-300" href="tambah_pelanggan.php">Tambah Pelanggan</a>
            <a class="text-white hover:text-gray-300" href="transaksi.php">Buat Pesanan</a>
            <a class="text-white hover:text-gray-300" href="lihat_transaksi.php">Lihat Pesanan</a>
            <span class="text-white">
                <?php if (isset($_SESSION['nama'])): ?>
                    Pengguna: <strong><?= htmlspecialchars($_SESSION['nama']) ?></strong>
                <?php endif; ?>
            </span>
            <a class="bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded" href="logout.php">Logout</a>
        </div>
        <!-- Mobile menu button -->
        <div class="lg:hidden">
            <button class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile menu -->
    <div class="lg:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a class="block text-white hover:text-gray-300 px-3 py-2" href="index.php">Daftar Buku</a>
            <a class="block text-white hover:text-gray-300 px-3 py-2" href="tambah_buku.php">Tambah Buku</a>
            <a class="block text-white hover:text-gray-300 px-3 py-2" href="tambah_pelanggan.php">Tambah Pelanggan</a>
            <a class="block text-white hover:text-gray-300 px-3 py-2" href="transaksi.php">Buat Pesanan</a>
            <a class="block text-white hover:text-gray-300 px-3 py-2" href="lihat_transaksi.php">Lihat Pesanan</a>
            <span class="block text-white px-3 py-2">
                <?php if (isset($_SESSION['nama'])): ?>
                    Pengguna: <strong><?= htmlspecialchars($_SESSION['nama']) ?></strong>
                <?php endif; ?>
            </span>
            <a class="block bg-red-500 hover:bg-red-700 text-white px-3 py-2 rounded" href="logout.php">Logout</a>
        </div>
    </div>
</nav>