<!-- Menu Navigasi -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Toko Buku Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Daftar Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_buku.php">Tambah Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_pelanggan.php">Tambah Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi.php">Buat Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lihat_transaksi.php">Lihat Pesanan</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link">
                        <?php if (isset($_SESSION['nama'])): ?>
                            Pengguna: <strong><?= htmlspecialchars($_SESSION['nama']) ?></strong>
                        <?php endif; ?>
                    </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white ms-2" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>