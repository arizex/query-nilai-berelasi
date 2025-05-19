<?php
include 'connect.php';

$query = "SELECT 
             tm.nim, 
             tm.nama, 
             tm.prodi, 
             tml.matkul, 
             tn.nilai
          FROM tb_nilai tn
          JOIN tb_mahasiswa tm ON tn.nim = tm.nim
          JOIN tb_matkul tml ON tn.matkul = tml.matkul";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<link rel='stylesheet' type='text/css' href='style.css'";
    echo "<div>";
    echo "<h2>UAS MAHASISWA UNUGIRI 2025</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
          </tr>";

    while ($item = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$item['nim']."</td>";
        echo "<td>".$item['nama']."</td>";
        echo "<td>".$item['prodi']."</td>";
        echo "<td>".$item['matkul']."</td>";
        echo "<td>".$item['nilai']."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "Tidak ada data nilai.";
}
?>