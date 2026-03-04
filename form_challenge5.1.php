<!DOCTYPE html>
<html>
<head>
    <title>Form Input Kendaraan</title>
</head>
<body>

<h2>Form Input Data Kendaraan</h2>

<form action="proses_challenge5.1.php" method="POST">

    <label>Harga Mobil:</label><br>
    <input type="number" name="harga" required><br><br>

    <label>Bahan Bakar:</label><br>
    <select name="bahan_bakar" required>
        <option value="">-- Pilih Bahan Bakar --</option>
        <option value="Premium">Premium</option>
        <option value="Pertalite">Pertalite</option>
        <option value="Pertamax">Pertamax</option>
    </select><br><br>

    <label>Tahun Pembuatan:</label><br>
    <input type="number" name="tahun" required><br><br>

    <label>Plat Nomor:</label><br>
    <input type="text" name="plat" required><br><br>

    <button type="submit" name="submit">Proses</button>

</form>

</body>
</html>