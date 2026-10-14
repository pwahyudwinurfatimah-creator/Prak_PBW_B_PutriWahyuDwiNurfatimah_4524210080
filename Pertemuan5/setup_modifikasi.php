<?php

require_once 'koneksi.php';

$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS akademik";

if (mysqli_query($koneksi, $sqlCreateDB)) {
    echo "Database berhasil dibuat atau sudah ada.\n";
} else {
    echo "Error membuat database: " . mysqli_error($koneksi) . "\n";
}

mysqli_set_charset($koneksi, "utf8mb4");

mysqli_select_db($koneksi, 'akademik');

$sqlCreateTables = [
    "CREATE TABLE IF NOT EXISTS buku (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        kode_buku VARCHAR(15) NOT NULL UNIQUE,
        judul_buku VARCHAR(100) NOT NULL,
        penulis VARCHAR(100) NOT NULL,
        penerbit VARCHAR(100) NOT NULL,
        tahun_terbit YEAR NOT NULL,
        stok INT UNSIGNED NOT NULL DEFAULT 0
    ) ENGINE=InnoDB"
];

foreach ($sqlCreateTables as $namaTable => $query) {
    if (mysqli_query($koneksi, $query)) {
        echo "Tabel berhasil dibuat atau sudah ada.\n";
    } else {
        echo "Gagal membuat tabel: " . mysqli_error($koneksi) . "\n";
    }
}

mysqli_close($koneksi);
?>
