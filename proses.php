<?php
$servername = "localhost";  
$username = "root";  
$password = "";  
$dbname = "form_regist";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$no_telepon = $_POST['no_telepon'];
$saran = $_POST['saran'];

// Simpan data ke database
$sql = "INSERT INTO form (nama, email, tanggal_lahir, umur, jenis_kelamin, agama, no_telepon, saran) 
VALUES ('$nama', '$email', '$tanggal_lahir', $umur, '$jenis_kelamin', '$agama', '$no_telepon', '$saran')";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pengiriman</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Data berhasil disimpan!</h2>";
        echo "<p>Terima kasih, " . $nama . ". Data Anda telah berhasil dikirimkan.</p>";
    } else {
        echo "<h2>Error:</h2><p>" . $sql . "<br>" . $conn->error . "</p>";
    }
    $conn->close();
    ?>

    <footer>
        <p>&copy; Nadila Yanuarika Rimawati | 233140701111028</p>
    </footer>
</body>
</html>
