<?php

function statusKelulusan(float $ipk): string
{
    if ($ipk >= 3.50) {
        return 'Sangat Memuaskan';
    }

    if ($ipk >= 3.00) {
        return 'Memuaskan';
    }

    return 'Perlu Peningkatan';
}

function kategoriIPK(float $ipk): string
{
    if ($ipk >= 3.50) {
        return 'IPK Sangat Baik';
    }

    if ($ipk >= 3.00) {
        return 'IPK Baik';
    }

    return 'IPK Cukup';
}

$mahasiswa = [
    'nim' => '2026015',
    'nama' => 'Rizky Maulana',
    'prodi' => 'Teknik Informatika',
    'semester' => 2,
    'tahun_masuk' => 2025,

    'tanggal_lahir' => '12 Agustus 2005',
    'jenis_kelamin' => 'Laki-laki',
    'agama' => 'Islam',

    'alamat' => 'Jl. Melati No. 15, Jakarta',
    'email' => 'rizky.maulana@email.com',
    'no_hp' => '081234567890',

    'hobi' => 'Membaca dan bermain futsal',
    'status' => 'Mahasiswa Aktif',

    'ipk' => 3.45
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Biodata Mahasiswa</title>

    <style>

        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #fff;
        }

        .container {
            width: 700px;
            max-width: 95%;
            margin: 20px auto;
            background-color: white;
            border: 1px solid #ccc;
        }

        .header {
            padding: 20px;
            background-color: #444da1;
            border-bottom: 1px solid #ccc;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .header p {
            margin: 6px 0 0;
            color: #fff;
            font-size: 14px;
        }

        .content {
            padding: 25px;
        }

        h3 {
            margin: 0 0 15px;
            font-size: 18px;
            color: #444;
        }

        .data {
            width: 100%;
            border-collapse: collapse;
        }

        .data td {
            padding: 11px 8px;
            border-bottom: 1px solid #e5e5e5;
            font-size: 14px;
        }

        .data td:first-child {
            width: 35%;
            font-weight: bold;
            color: #050505;
        }

        .data td:last-child {
            color: #050505;
        }

        .bagian {
            margin-top: 28px;
        }

        .ipk {
            font-weight: bold;
            color: #315f85;
        }

        .kategori {
            display: inline-block;
            margin-left: 8px;
            padding: 3px 7px;
            background-color: #e8f0f6;
            color: #315f85;
            font-size: 11px;
        }

        .status {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #fff;
            background-color: #444da1;
        }

        .status p {
            margin: 0 0 6px;
            font-size: 13px;
            color: #fff;
        }

        .status strong {
            font-size: 17px;
            color: #fff;
        }

        .footer {
            padding: 12px;
            text-align: center;
            background-color: #444da1;
            color: #ffff;
            font-size: 12px;
            border-top: 1px solid #ccc;
        }

        @media (max-width: 600px) {

            body {
                padding: 15px;
            }

            .container {
                max-width: 100%;
            }

            .content {
                padding: 18px;
            }

            .data td {
                padding: 10px 5px;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <div class="header">

        <h1>Biodata Mahasiswa</h1>

        <p>Data informasi mahasiswa</p>

    </div>


    <div class="content">

        <h3>Data Akademik</h3>

        <table class="data">

            <tr>
                <td>NIM</td>
                <td>
                    <?= htmlspecialchars($mahasiswa['nim']) ?>
                </td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>
                    <?= htmlspecialchars($mahasiswa['nama']) ?>
                </td>
            </tr>

            <tr>
                <td>Program Studi</td>
                <td>
                    <?= htmlspecialchars($mahasiswa['prodi']) ?>
                </td>
            </tr>

            <tr>
                <td>Semester</td>
                <td>
                    <?= htmlspecialchars(
                        (string) $mahasiswa['semester']
                    ) ?>
                </td>
            </tr>

            <tr>
                <td>Tahun Masuk</td>
                <td>
                    <?= htmlspecialchars(
                        (string) $mahasiswa['tahun_masuk']
                    ) ?>
                </td>
            </tr>

            <tr>
                <td>Status</td>
                <td>
                    <?= htmlspecialchars($mahasiswa['status']) ?>
                </td>
            </tr>

            <tr>
                <td>IPK</td>
                <td>

                    <span class="ipk">
                        <?= htmlspecialchars(
                            (string) $mahasiswa['ipk']
                        ) ?>
                    </span>

                    <span class="kategori">
                        <?= htmlspecialchars(
                            kategoriIPK($mahasiswa['ipk'])
                        ) ?>
                    </span>

                </td>
            </tr>

        </table>


        <div class="bagian">

            <h3>Data Pribadi</h3>

            <table class="data">

                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['tanggal_lahir']
                        ) ?>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['jenis_kelamin']
                        ) ?>
                    </td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['agama']
                        ) ?>
                    </td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['alamat']
                        ) ?>
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['email']
                        ) ?>
                    </td>
                </tr>

                <tr>
                    <td>No. HP</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['no_hp']
                        ) ?>
                    </td>
                </tr>

                <tr>
                    <td>Hobi</td>
                    <td>
                        <?= htmlspecialchars(
                            $mahasiswa['hobi']
                        ) ?>
                    </td>
                </tr>

            </table>

        </div>


        <div class="status">

            <p>Predikat Kelulusan Berdasarkan IPK</p>

            <strong>
                <?= htmlspecialchars(
                    statusKelulusan($mahasiswa['ipk'])
                ) ?>
            </strong>

        </div>

    </div>


    <div class="footer">

        Biodata Mahasiswa © 2026

    </div>

</div>

</body>

</html>
