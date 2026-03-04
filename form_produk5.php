<!DOCTYPE html>
<html>
<head>
    <title>Form Diskon Member</title>
</head>
<body>

<h2>Form Perhitungan Diskon</h2>

<form action="proses_tugas5.php" method="POST">

    <label>Apakah Memiliki Kartu Member?</label><br>
    <select name="kartu" required>
        <option value="">-- Pilih --</option>
        <option value="ya">Ya</option>
        <option value="tidak">Tidak</option>
    </select><br><br>

    <label>Total Belanja:</label><br>
    <input type="number" name="total" required><br><br>

    <button type="submit" name="submit">Proses</button>

</form>

</body>
</html>