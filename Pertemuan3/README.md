**Tugas 03 - Prak. Pemrograman Berbasis Web - B**


Pada tugas Pertemuan 03, saya melakukan praktik membuat database akademik menggunakan phpMyAdmin. Pada praktik ini saya membuat database bernama akademik, kemudian membuat beberapa tabel yang saling berhubungan, yaitu tabel mahasiswa, dosen, mata_kuliah, dan krs. Selain membuat tabel, saya juga melakukan pengecekan menggunakan perintah SQL untuk memastikan tabel yang dibuat sudah berhasil.


**Membuat Database Akademik & Menampilkan Database Akademik**


Pada gambar pertama terlihat proses pembuatan database dengan nama akademik menggunakan perintah CREATE DATABASE IF NOT EXISTS akademik;. Setelah perintah dijalankan, database berhasil dibuat dan muncul pada bagian sebelah kiri phpMyAdmin. Database ini nantinya digunakan untuk menyimpan seluruh tabel yang berhubungan dengan data akademik.

*Screenshot Membuat Database Akademik:*

![Membuat Dataabase Akademik](asset/Membuat%20Database%20Akademik.png)

*Screenshot Menampilkan Database Akademik:*

![Menampilkan Database Akademik](asset/Menampilkan%20Database%20Akademik.png)





**Hitung**


Program Hitung Produk menggunakan konsep OOP PHP dengan interface BisaDihitung, class Produk, dan class turunan ProdukDiskon. Program digunakan untuk menghitung harga akhir produk, termasuk produk yang mendapatkan diskon. Class ProdukDiskon melakukan perhitungan harga berdasarkan persentase diskon yang diberikan.

Pada modifikasi program, ditambahkan field kategori produk serta validasi diskon agar nilai diskon hanya berada pada rentang 0 sampai 100 persen. Selain itu, ditambahkan beberapa data produk dan tampilan menggunakan CSS sehingga informasi produk, kategori, harga normal, dan harga setelah diskon dapat ditampilkan dengan lebih rapi.

*Screenshot Hitung Sebelum Modifikasi:*

![Hitung-Sebelum.php](asset/hitung-sebelum.png)


*Screenshot Hitung Sesudah Modifikasi:*

![Hitung-Sesudah.php](asset/hitung-sesudah.png)



**Error yang Pernah Muncul**

Salah satu error yang dapat terjadi pada program Hitung Produk adalah ketika nilai diskon yang dimasukkan kurang dari 0 atau lebih dari 100. Untuk mengatasinya, ditambahkan validasi pada constructor ProdukDiskon sehingga program akan memberikan pesan bahwa diskon harus berada di antara 0 sampai 100 persen.