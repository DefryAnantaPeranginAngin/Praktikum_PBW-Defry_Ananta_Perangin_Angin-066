<h3>Nomor 4. Cek Genap atau Ganjil</h3>

<form method="post">
    Masukkan angka:
    <input type="number" name="angka">
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

    echo "Angka $angka adalah $hasil";
}
?>