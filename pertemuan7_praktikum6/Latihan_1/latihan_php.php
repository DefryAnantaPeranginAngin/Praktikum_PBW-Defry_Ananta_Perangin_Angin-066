<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>

<h2>Input Nilai Mahasiswa</h2>

<form method="post" action="">
    Nama: <input type="text" name="nama"><br><br>
    Nilai: <input type="number" name="nilai"><br><br>
    <input type="submit" value="Proses">
</form>

<hr>

<?php
if (!empty($_POST['nama']) && !empty($_POST['nilai'])) {

    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    // Validasi nilai
    if ($nilai > 100 || $nilai < 0) {
        echo "Mohon masukkan nilai yang valid!";
    } else {

        // Menentukan predikat
        if ($nilai >= 85) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($nilai >= 75) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($nilai >= 65) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($nilai >= 50) {
            $predikat = "D";
            $status = "Tidak Lulus";
        } else {
            $predikat = "E";
            $status = "Tidak Lulus";
        }

        // Output
        echo "<h3>Hasil</h3>";
        echo "<p>Nama : $nama</p>";
        echo "<p>Nilai : $nilai</p>";
        echo "<p>Predikat : $predikat</p>";
        echo "<p>Status : $status</p>";
    }

} else {
    echo "Silahkan masukkan data yang sesuai!";
}
?>

</body>
</html>