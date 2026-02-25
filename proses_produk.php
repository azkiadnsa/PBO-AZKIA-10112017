<?php
// Class Mahasiswa
class Mahasiswa {
    public function statusKuis($nilai) {
        if ($nilai >= 70) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
}

$mhs = new Mahasiswa();
$mahasiswa = [];

// Simpan data dari form ke array
for ($i = 0; $i < count($_POST['nama']); $i++) {
    $mahasiswa[$i] = [
        "nama"   => $_POST['nama'][$i],
        "kelas"  => $_POST['kelas'][$i],
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai"  => $_POST['nilai'][$i]
    ];
}
?>

<h2>Data Nilai Mahasiswa</h2>

<?php
for ($i = 0; $i < count($mahasiswa); $i++) {
    echo "Nama : " . $mahasiswa[$i]["nama"] . "<br>";
    echo "Kelas : " . $mahasiswa[$i]["kelas"] . "<br>";
    echo "Mata Kuliah : " . $mahasiswa[$i]["matkul"] . "<br>";
    echo "Nilai : " . $mahasiswa[$i]["nilai"] . "<br>";
    echo $mhs->statusKuis($mahasiswa[$i]["nilai"]) . "<br>";
    echo "<hr>";
}
?>

