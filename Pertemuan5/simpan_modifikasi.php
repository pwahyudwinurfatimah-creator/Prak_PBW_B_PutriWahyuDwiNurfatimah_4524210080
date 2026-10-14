<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    $query = mysqli_query(
        $koneksi,
        "INSERT INTO buku
        (kode_buku, judul_buku, penulis, penerbit, tahun_terbit, stok)
        VALUES
        ('$kode_buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$stok')"
    );

if ($query) {
    echo "Data berhasil disimpan";
} else {
    echo "Data gagal disimpan";
}
}

?>
