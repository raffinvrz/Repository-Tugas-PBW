<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>
    <h2>Luaran Yang Diharuskan</h2>
    <form method="POST" action="">
        NPM: <input type="text" name="npm" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Prodi: <input type="text" name="prodi" required><br><br>
        Semester: <input type="number" name="semester" required><br><br>
        Biaya UKT (Rp): <input type="number" name="ukt" required><br><br>
        <input type="submit" name="submit" value="Hitung Diskon">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $ukt = $_POST['ukt'];
        $diskon = 0;

        if ($ukt >= 5000000) {
            if ($semester > 8) {
                $diskon = 15;
            } else {
                $diskon = 10;
            }
        }

        $potongan = $ukt * ($diskon / 100);
        $bayar = $ukt - $potongan;

        echo "<h3>Luaran yang Diharuskan</h3>";
        echo "NPM : $npm<br>";
        echo "NAMA : $nama<br>";
        echo "PRODI : $prodi<br>";
        echo "SEMESTER : $semester<br>";
        echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . "<br>";
        echo "DISKON : $diskon%<br>";
        echo "YANG HARUS DIBAYAR : Rp. " . number_format($bayar, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>
