<h3>Nomor 3. Daftar Hewan</h3>

<form method="post">
    Masukkan nama hewan (pisahkan dengan koma):<br>
    <input type="text" name="hewan">
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['hewan'])) {
    $input = $_POST['hewan'];

    // ubah string jadi array
    $hewan = explode(",", $input);

    echo "Daftar Hewan:<br>";

    foreach ($hewan as $h) {
        echo trim($h) . "<br>"; //trim() = menghapus spasi di awal & akhir string
    }
}
?>