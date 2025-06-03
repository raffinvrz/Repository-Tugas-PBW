<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web Contoh</title>
</head>
<body>
    <?php
// Membuat koneksi ke database MySQL dengan parameter: host, username,
password, dan nama database
$conn = new mysqli('localhost', 'root', 'Unsika2020',
'pemrograman_web_contoh');
// Mengecek apakah terjadi kesalahan saat mencoba melakukan koneksi
if ($conn->connect_error) {
// Jika koneksi gagal, hentikan program dan tampilkan pesan error
die("Connection failed: " . $conn->connect_error);
}
?> 
</body>
</html>