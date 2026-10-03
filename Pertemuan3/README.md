**Tugas 03 - Prak. Pemrograman Berbasis Web - B**


Pada tugas Pertemuan 03 dilakukan praktik pembuatan database menggunakan phpMyAdmin. Database yang dibuat bernama akademik dan digunakan untuk menyimpan data yang berhubungan dengan kegiatan akademik. Setelah database berhasil dibuat, beberapa tabel dibuat di dalamnya, yaitu tabel mahasiswa, dosen, mata_kuliah, dan krs. Setiap tabel memiliki fungsi masing-masing dan beberapa tabel dibuat saling berhubungan menggunakan primary key dan foreign key.


**Membuat Database Akademik**


Database akademik dibuat menggunakan perintah CREATE DATABASE IF NOT EXISTS akademik;. Perintah tersebut digunakan untuk membuat database baru dan memastikan database dengan nama yang sama tidak dibuat kembali jika sudah tersedia. Setelah perintah berhasil dijalankan, database akademik muncul pada bagian daftar database di sebelah kiri phpMyAdmin. Database ini menjadi tempat untuk menyimpan tabel-tabel yang digunakan dalam tugas.

*Screenshot Membuat Database Akademik:*

![Membuat Dataabase Akademik](asset/MembuatDatabaseAkademik.png)





**Menampilkan Database Akademik**


Database akademik kemudian dipilih menggunakan perintah USE akademik;. Perintah ini digunakan agar proses pembuatan tabel selanjutnya dilakukan di dalam database akademik. Setelah database dipilih, pada bagian atas phpMyAdmin terlihat keterangan bahwa database yang sedang digunakan adalah akademik.

*Screenshot Menampilkan Database Akademik:*

![Menampilkan Database Akademik](asset/MenampilkanDatabaseAkademik.png)





**Membuat Tabel Mahasiswa**


Tabel mahasiswa dibuat untuk menyimpan data mahasiswa. Beberapa kolom yang digunakan yaitu nim, nama, email, prodi, angkatan, dan ipk. Kolom nim digunakan sebagai primary key sehingga setiap mahasiswa mempunyai identitas yang berbeda. Kolom email dibuat UNIQUE agar tidak ada email yang sama. Pada kolom ipk juga diberikan aturan agar nilai yang dimasukkan berada pada rentang 0 sampai 4.

*Screenshot Membuat Tabel Mahasiswa:*

![Membuat Tabel Mahasiswa](asset/MembuatTabelMahasiswa.png)





**Membuat Tabel Dosen**


Tabel dosen digunakan untuk menyimpan data dosen. Tabel ini memiliki kolom nidn, nama, dan email. Kolom nidn digunakan sebagai primary key, sedangkan kolom email diberikan aturan UNIQUE. Data dosen yang tersimpan pada tabel ini nantinya dapat digunakan untuk membuat hubungan dengan tabel mata kuliah.

*Screenshot Membuat Tabel Dosen:*

![Membuat Tabel Dosen](asset/MembuatTabelDosen.png)





