<?php
// biodata.php

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


// MODIFIKASI:
// Menambahkan fungsi kategori IPK
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


// DATA MAHASISWA

$mahasiswa = [
    'nim' => '2026001',
    'nama' => 'Andi Pratama',
    'prodi' => 'Teknik Informatika',
    'semester' => 1,
    'ipk' => 3.72,

    // MODIFIKASI
    'tanggal_lahir' => '15 Mei 2005',

    // MODIFIKASI
    'jenis_kelamin' => 'Laki-laki'
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Biodata Mahasiswa</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;

            font-family: Arial, sans-serif;

            background: #eef2f7;

            padding: 40px;
        }

        .container {
            width: 600px;

            max-width: 95%;

            margin: auto;

            background: white;

            border-radius: 15px;

            box-shadow:
                0 5px 20px
                rgba(0, 0, 0, 0.12);

            overflow: hidden;
        }

        .header {
            background: #4a6cf7;

            color: white;

            text-align: center;

            padding: 25px;
        }

        .header h1 {
            margin: 0 0 8px;

            font-size: 27px;
        }

        .header p {
            margin: 0;

            font-size: 14px;

            opacity: 0.9;
        }

        .content {
            padding: 25px;
        }

        .data {
            width: 100%;

            border-collapse: collapse;
        }

        .data tr {
            border-bottom: 1px solid #eee;
        }

        .data tr:last-child {
            border-bottom: none;
        }

        .data td {
            padding: 14px 10px;
        }

        .data td:first-child {
            width: 40%;

            font-weight: bold;

            color: #555;
        }

        .data td:last-child {
            color: #333;
        }

        .ipk {
            color: #4a6cf7;

            font-weight: bold;

            font-size: 18px;
        }

        .kategori {
            display: inline-block;

            margin-top: 5px;

            padding: 5px 10px;

            border-radius: 15px;

            background: #eaf2ff;

            color: #2455b5;

            font-size: 12px;

            font-weight: bold;
        }

        .hasil {
            margin-top: 20px;

            padding: 18px;

            background: #f5f7ff;

            border-radius: 10px;

            text-align: center;
        }

        .hasil p {
            margin: 5px;

            color: #666;
        }

        .hasil strong {
            color: #4a6cf7;

            font-size: 19px;
        }

        .footer {
            text-align: center;

            padding: 15px;

            background: #f7f7f7;

            color: #888;

            font-size: 12px;
        }

    </style>

</head>

<body>

<div class="container">


    <!-- HEADER -->

    <div class="header">

        <h1>
            Biodata Mahasiswa
        </h1>

        <p>
            Sistem Informasi Data Mahasiswa
        </p>

    </div>


    <div class="content">


        <!-- DATA MAHASISWA -->

        <table class="data">

            <tr>
                <td>NIM</td>

                <td>
                    <?= htmlspecialchars(
                        $mahasiswa['nim']
                    ) ?>
                </td>
            </tr>


            <tr>
                <td>Nama</td>

                <td>
                    <?= htmlspecialchars(
                        $mahasiswa['nama']
                    ) ?>
                </td>
            </tr>


            <tr>
                <td>Program Studi</td>

                <td>
                    <?= htmlspecialchars(
                        $mahasiswa['prodi']
                    ) ?>
                </td>
            </tr>


            <tr>
                <td>Semester</td>

                <td>
                    <?= htmlspecialchars(
                        (string)$mahasiswa['semester']
                    ) ?>
                </td>
            </tr>


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
                <td>IPK</td>

                <td>

                    <span class="ipk">
                        <?= htmlspecialchars(
                            (string)$mahasiswa['ipk']
                        ) ?>
                    </span>

                    <br>

                    <span class="kategori">

                        <?= htmlspecialchars(
                            kategoriIPK(
                                $mahasiswa['ipk']
                            )
                        ) ?>

                    </span>

                </td>

            </tr>

        </table>


        <!-- HASIL STATUS -->

        <div class="hasil">

            <p>
                Predikat Kelulusan
            </p>

            <strong>

                <?= htmlspecialchars(
                    statusKelulusan(
                        $mahasiswa['ipk']
                    )
                ) ?>

            </strong>

        </div>


    </div>


    <!-- FOOTER -->

    <div class="footer">

        Biodata Mahasiswa © 2026

    </div>


</div>

</body>

</html>