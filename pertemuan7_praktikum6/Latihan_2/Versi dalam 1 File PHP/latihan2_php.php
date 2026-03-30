<!DOCTYPE html>
<html>
<head>
    <title>Diskon UKT Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>

    <form method="post" action="">
        NPM: <input type="text" name="npm"><br><br>
        Nama: <input type="text" name="nama"><br><br>
        Prodi: <input type="text" name="prodi"><br><br>
        Semester: <input type="number" name="semester"><br><br>
        Biaya UKT: <input type="number" name="ukt"><br><br>

        <input type="submit" value="Proses">
    </form>

    <hr>

    <?php
    if (
        !empty($_POST['npm']) &&
        !empty($_POST['nama']) &&
        !empty($_POST['prodi']) &&
        !empty($_POST['semester']) &&
        !empty($_POST['ukt'])
    ) {

        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $ukt = $_POST['ukt'];

        // Menentukan diskon
        if ($ukt >= 5000000 && $semester > 8) {
            $diskon = 15;
        } elseif ($ukt >= 5000000) {
            $diskon = 10;
        } else {
            $diskon = 0;
        }

        // Hitung pembayaran
        $potongan = ($diskon / 100) * $ukt;
        $bayar = $ukt - $potongan;

        // Output
        echo "<h3>Diskon UKT Mahasiswa</h3>";
        echo "<p>NPM : $npm </p>";
        echo "<p>NAMA : $nama </p>";
        echo "<p>PRODI : $prodi </p>";
        echo "<p>SEMESTER : $semester </p>";
        echo "<p>BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . ",-</p>";
        echo "<p>DISKON : $diskon% </p>";
        echo "<p>YANG HARUS DIBAYAR : Rp. " . number_format($bayar, 0, ',', '.') . ",-</p>";
    } else {
        echo "Silahkan masukkan data dengan sesuai dan lengkap!";
    }
    ?>

</body>
</html>