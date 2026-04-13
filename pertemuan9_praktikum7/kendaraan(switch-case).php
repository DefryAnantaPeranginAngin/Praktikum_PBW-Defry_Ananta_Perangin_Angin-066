<h3>Nomor 1. Menentukan Jenis Kendaraan</h3>

<form method="post">
    Masukkan jumlah roda:
    <input type="number" name="roda">
    <button type="submit">Proses</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];

    switch ($roda) {
        case 2:
            echo "Kendaraan: Motor";
            break;
        case 3:
            echo "Kendaraan: Bajaj";
            break;
        case 4:
            echo "Kendaraan: Mobil";
            break;
        case 6:
            echo "Kendaraan: Truk Ringan";
            break;
        case 8:
            echo "Kendaraan: Besar";
            break;
        case 18:
            echo "Kendaraan: Truk Gandeng";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui";
    }
}
?>