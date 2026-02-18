<html>
    <head>
        <title>
            Form Pinjaman
        </title>
    </head>
    <body>
        <h2> TOKO PEGADAIAN SYARIAH</h2>
        <p>Jl Keadilan No 16<br>Telp. 72353459</p>
        <h3>Program Penghitung Besaran Angsuran Hutang</h3>
<form action="proses_produk1.php" method="POST">
        Besar Pinjaman : 
        <input type="number" name="pinjaman" required><br><br>

        Lama Angsuran (bulan) : 
        <input type="number" name="lama" required><br><br>
        Keterlambatan (hari) : 
        <input type="number" name="terlambat" required><br><br>

        <input type="submit" value="Hitung"> 

</form>

    </body>
</html>