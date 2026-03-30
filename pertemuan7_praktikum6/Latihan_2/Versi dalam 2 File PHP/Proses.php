<!DOCTYPE html>
<html>
<head>
    <title>Hasil Diskon</title>
</head>
<body>

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
        echo "Mohon isi data dengan sesuai dan lengkap!";
    }
?>

</body>
</html>