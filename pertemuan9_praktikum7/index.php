<!DOCTYPE html>
<html>
<head>
    <title>Tugas Bab 8 PHP Dinamis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2>Menu Navigasi</h2>
        
        <a href="?nomor=1">1. Kendaraan</a> |
        <a href="?nomor=2">2. Bilangan Genap</a> |
        <a href="?nomor=3">3. Daftar Hewan</a> |
        <a href="?nomor=4">4. Cek Angka</a>
    </header>

    <hr>

    <?php
    if (isset($_GET['nomor'])) {
        switch ($_GET['nomor']) {
            case 1:
                include "kendaraan(switch-case).php";
                break;
            case '2':
                include "genap(for).php";
                break;
            case '3':
                include "hewan(foreach).php";
                break;
            case '4':
                include "cek_angka(ternary).php";
                break;
            default:
                echo "Halaman tidak ditemukan";
        }
    } else {
        echo "Silakan pilih menu.";
    }
    ?>
</body>
</html>