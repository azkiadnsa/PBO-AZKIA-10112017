<html>
<head>
    <title>Form Nilai Mahasiswa</title>
</head>
<body>

<h2>Input Data Nilai PBO</h2>

<form method="post" action="latihan5.1.php">
    <label>Nama:</label><br>
    <input type="text" name="nama[]" required><br><br>

    <label>Kelas:</label><br>
    <input type="text" name="kelas[]" required><br><br>

    <label>Nilai:</label><br>
    <input type="number" name="nilai[]" required><br><br>

<button type="submit">Proses Data</button>
</form>

</body>
</html>