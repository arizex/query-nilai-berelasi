<?php
include 'connect.php';

$query = "SELECT * FROM tb_mahasiswa";
$result = mysqli_query($koneksi, $query);

if(mysqli_num_rows($result) > 0) {
    echo "<table style='margin:auto;' border='1' cellpadding='8'>";
    echo "<tr><th>nim</th><th>nama</th><th>prodi</th></tr>";

    while($item = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $item['nim'] . "</td>";
        echo "<td>" . $item['nama'] . "</td>";
        echo "<td>" . $item['prodi'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "tidak ada celeng";
}

?>