<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" .
        urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>
<?php include 'nav.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tambah Buku</title>
  </head>
  <body>
    <div class="max-w-2xl mx-auto px-4 py-4">
      <h2 class="text-2xl font-bold mb-4">Tambah Buku Baru</h2>
      <form method="post" action="proses_tambah_buku.php">
        <div class="mb-4">
          <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
          <input
            type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="judul"
            name="judul"
            required
          />
        </div>
        <div class="mb-4">
          <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
          <input
            type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="penulis"
            name="penulis"
            required
          />
        </div>
        <div class="mb-4">
          <label for="tahun_terbit" class="block text-gray-700 text-sm font-bold mb-2">Tahun Terbit</label>
          <input
            type="number"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="tahun_terbit"
            name="tahun_terbit"
            required
          />
        </div>
        <div class="mb-4">
          <label for="harga" class="block text-gray-700 text-sm font-bold mb-2">Harga</label>
          <input
            type="number"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="harga"
            name="harga"
            step="0.01"
            required
          />
        </div>
        <div class="mb-4">
          <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
          <input
            type="number"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="stok"
            name="stok"
            required
          />
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Tambah Buku</button>
      </form>
    </div>
  </body>
</html>
