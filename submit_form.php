<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_permohonan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menyimpan data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$kontak = $_POST['kontak'];
$rincian = $_POST['rincian'];
$tujuan = $_POST['tujuan'];
$cara_memperoleh = $_POST['cara_memperoleh'];
$cara_mendapatkan = $_POST['cara_mendapatkan'];

$sql = "INSERT INTO permohonan (nama, alamat, pekerjaan, kontak, rincian, tujuan, cara_memperoleh, cara_mendapatkan) 
VALUES ('$nama', '$alamat', '$pekerjaan', '$kontak', '$rincian', '$tujuan', '$cara_memperoleh', '$cara_mendapatkan')";

if ($conn->query($sql) === TRUE) {
    echo "Permohonan berhasil diajukan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
