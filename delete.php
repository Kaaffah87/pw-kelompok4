<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_khodam";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah ID diterima
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Mengambil ID dan memastikan itu adalah integer

    // Query untuk menghapus data
    $sql = "DELETE FROM list_khodam WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke halaman utama setelah sukses
        header("Location: tabel.php"); // Ganti 'index.php' dengan nama file tabel Anda
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID tidak diberikan.";
}

// Menutup koneksi
$conn->close();
?>
