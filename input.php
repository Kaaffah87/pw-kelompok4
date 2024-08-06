<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Kodam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Lebar maksimum form */
            margin: 0 auto; /* Tengahkan form secara horizontal */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #0074D9; /* Warna biru cerah */
            color: #fff;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Warna biru lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="">
            <label for="Nama Kodam">Nama Kodam</label>
            <input type="text" name="nama_kodam" placeholder="Kurama">
            <label for="Jenis_Kodam">Jenis Kodam</label>
            <input type="text" name="jenis_kodam" placeholder="Biju">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
