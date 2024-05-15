<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_permohonan";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil ID dari parameter GET
$id = $_GET['id'];

// Query untuk menghapus data berdasarkan ID
$sql = "DELETE FROM permohonan WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
