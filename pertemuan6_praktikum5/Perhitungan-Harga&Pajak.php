<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>

    <style>
        p{
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <?php
        // Konstanta pajak
        define("PAJAK", 0.10);

        // Array harga barang
        $barang = array(
            "Keyboard" => 150000,
            "Mouse" => 50000,
            "Monitor" => 1200000
        );

        // Memilih barang
        $nama_barang = "Keyboard";

        // Jumlah beli
        $jumlah_beli = 2;

        // Mengambil harga dari array
        $harga = $barang[$nama_barang];

        // Perhitungan
        $total_sebelum_pajak = $harga * $jumlah_beli;
        $nilai_pajak = $total_sebelum_pajak * PAJAK;
        $total_bayar = $total_sebelum_pajak + $nilai_pajak;
    ?>

    <div style="width:500px; border:2px solid black; padding:20px; font-family:Times New Roman;">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
        <hr>
        <p>Nama Barang: <?php echo $nama_barang; ?></p>
        <p>Harga Satuan: Rp <?php echo number_format($harga,0,",","."); ?></p>
        <p>Jumlah Beli: <?php echo $jumlah_beli; ?></p>
        <p>Total Harga (Sebelum Pajak): Rp <?php echo number_format($total_sebelum_pajak,0,",","."); ?></p>
        <p>Pajak (10%): Rp <?php echo number_format($nilai_pajak,0,",","."); ?></p>

        <b>Total Bayar: Rp <?php echo number_format($total_bayar,0,",","."); ?></b>
    </div>

</body>
</html>