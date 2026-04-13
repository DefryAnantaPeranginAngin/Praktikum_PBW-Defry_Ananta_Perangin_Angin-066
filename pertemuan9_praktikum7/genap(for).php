<h3>Nomor 2. Bilangan Genap</h3>

<form method="post">
    Tampilkan bilangan genap dari 2 sampai (misalnya 10):
    <input type="number" min=0 name="batas">
    <button type="submit">Proses</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];

    echo "Bilangan genap dari 2 sampai $batas:<br>";

    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . "<br>";
    }
}
?>