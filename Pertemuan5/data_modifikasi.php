<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM buku");

while ($data = mysqli_fetch_assoc($query)) {
    echo $data['kode_buku'];
    echo " - ";
    echo $data['judul_buku'];
    echo "<br>";
}
?>
