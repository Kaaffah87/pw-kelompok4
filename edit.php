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

    // Mengambil data untuk ditampilkan di form
    $sql = "SELECT * FROM list_khodam WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak diberikan.";
    exit;
}

// Memproses form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];

    // Query untuk memperbarui data
    $sql = "UPDATE list_khodam SET nama='$nama', jenis='$jenis' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: tabel.php"); // Redirect setelah sukses
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Khodam</title>
</head>
<body>
<h2>Edit Khodam</h2>
<form method="post" action="">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required><br><br>
    <label for="jenis">Jenis:</label><br>
    <input type="text" id="jenis" name="jenis" value="<?php echo htmlspecialchars($row['jenis']); ?>" required><br><br>
    <input type="submit" value="Update">
    <a href="index.php">Cancel</a> <!-- Link untuk membatalkan -->
</form>
</body>
</html>
