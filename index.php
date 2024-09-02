<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        h2 {
            
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h3 {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 align="center">Kalkulator Pengurangan dan Pembagian</h2>

<form method="post">
    <label>Angka 1</label>
    <input type="number" step="any" name="angka1" required>
    <br><br>
    
    <label>Angka 2</label>
    <input type="number" step="any" name="angka2" required>
    <br><br>
    
    <label>Operasi:</label>
    <select name="operasi">
        <option value="pengurangan">Pengurangan (-)</option>
        <option value="pembagian">Pembagian (/)</option>
    </select>
    <br><br>
    
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if (isset($_POST['submit'])) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['operasi'];
    
    if ($operasi == "pengurangan") {
        $hasil = $angka1 - $angka2;
        echo "<h3>Hasil Pengurangan: $hasil</h3>";
    } elseif ($operasi == "pembagian") {
        if ($angka2 == 0) {
            echo "<h3>Error: Tidak dapat membagi dengan nol.</h3>";
        } else {
            $hasil = $angka1 / $angka2;
            echo "<h3>Hasil Pembagian: $hasil</h3>";
        }
    }
}
?>

</body>
</html>
