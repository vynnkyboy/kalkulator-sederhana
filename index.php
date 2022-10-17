<html>

<head>
    <title>
        Kalkulator Sederhana
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
            case 'operasi':
                header('location: index.php');
                break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul"><B>KALKULATOR</B></h2>
        <form action="index.php" method="post">
            <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan bilangan pertama">
            <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan bilangan kedua">
            <select name="operasi" class="opt" id="">
                <option value="operasi">pilih operasi</option>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="bagi">/</option>
                <option value="kali">x</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol" id="">
        </form>
        <form action="">
            <?php if (isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil" name="" id="">
            <input type="submit" name="operasi" value="Reset" class="reset" id="">
            <?php } else { ?>
            <input type="text" value="0" class="bil">
            <?php } ?>
        </form>
    </div>
</body>

</html>
