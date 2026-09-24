<?php

interface Identitas
{
    public function ringkasan(): string;
}

class Mahasiswa implements Identitas
{
    private string $nim;
    private string $nama;
    protected float $ipk;

    // MODIFIKASI: field baru
    private int $semester;

    public function __construct(
        string $nim,
        string $nama,
        float $ipk,
        int $semester
    ) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->semester = $semester;
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void
    {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException(
                'IPK harus antara 0 sampai 4.'
            );
        }

        $this->ipk = $ipk;
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }

    // MODIFIKASI: menentukan status akademik
    public function statusAkademik(): string
    {
        if ($this->ipk >= 3.00) {
            return 'Aktif & Berprestasi';
        } elseif ($this->ipk >= 2.00) {
            return 'Aktif';
        } else {
            return 'Perlu Bimbingan';
        }
    }

    public function ringkasan(): string
    {
        return $this->nim .
            ' - ' .
            $this->nama .
            ' - IPK: ' .
            $this->ipk;
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getSemester(): int
    {
        return $this->semester;
    }
}


// Membuat objek mahasiswa
$mhs = new Mahasiswa(
    '2026001',
    'Andi Pratama',
    3.75,
    4
);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Profil Mahasiswa</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 500px;
            background: white;

            border-radius: 15px;

            box-shadow:
                0 8px 25px rgba(0,0,0,0.10);

            overflow: hidden;
        }

        .top {
            background: #0f172a;
            color: white;

            padding: 30px;

            text-align: center;
        }

        .circle {
            width: 80px;
            height: 80px;

            background: #38bdf8;

            color: #0f172a;

            border-radius: 50%;

            margin: 0 auto 15px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 30px;
            font-weight: bold;
        }

        .top h1 {
            margin: 5px 0;
            font-size: 25px;
        }

        .top p {
            margin: 5px 0;
            color: #cbd5e1;
        }

        .content {
            padding: 25px;
        }

        .row {
            display: flex;

            justify-content: space-between;

            padding: 15px 5px;

            border-bottom: 1px solid #e2e8f0;
        }

        .row:last-child {
            border-bottom: none;
        }

        .label {
            color: #64748b;
            font-size: 14px;
        }

        .value {
            color: #0f172a;
            font-weight: bold;
        }

        .ipk {
            color: #0284c7;
            font-size: 20px;
        }

        .status {
            margin-top: 20px;

            background: #e0f2fe;

            border-radius: 10px;

            padding: 15px;

            text-align: center;

            color: #0369a1;
        }

        .status span {
            display: block;

            margin-top: 5px;

            font-size: 18px;

            font-weight: bold;
        }

        .summary {
            margin-top: 20px;

            background: #f8fafc;

            padding: 15px;

            border-radius: 10px;

            color: #475569;

            font-size: 14px;
        }

        .footer {
            text-align: center;

            margin-top: 15px;

            font-size: 12px;

            color: #94a3b8;
        }

    </style>

</head>

<body>

    <div>

        <div class="card">

            <div class="top">

                <div class="circle">
                    <?= strtoupper(
                        substr($mhs->getNama(), 0, 1)
                    ) ?>
                </div>

                <h1>
                    <?= htmlspecialchars(
                        $mhs->getNama()
                    ) ?>
                </h1>

                <p>
                    Profil Mahasiswa
                </p>

            </div>


            <div class="content">

                <div class="row">

                    <span class="label">
                        NIM
                    </span>

                    <span class="value">
                        <?= htmlspecialchars(
                            $mhs->getNim()
                        ) ?>
                    </span>

                </div>


                <div class="row">

                    <span class="label">
                        Nama
                    </span>

                    <span class="value">
                        <?= htmlspecialchars(
                            $mhs->getNama()
                        ) ?>
                    </span>

                </div>


                <div class="row">

                    <span class="label">
                        Semester
                    </span>

                    <span class="value">
                        <?= $mhs->getSemester() ?>
                    </span>

                </div>


                <div class="row">

                    <span class="label">
                        IPK
                    </span>

                    <span class="value ipk">
                        <?= number_format(
                            $mhs->getIpk(),
                            2
                        ) ?>
                    </span>

                </div>


                <div class="status">

                    Status Akademik

                    <span>
                        <?= htmlspecialchars(
                            $mhs->statusAkademik()
                        ) ?>
                    </span>

                </div>


                <div class="summary">

                    <strong>Ringkasan:</strong>

                    <br><br>

                    <?= htmlspecialchars(
                        $mhs->ringkasan()
                    ) ?>

                </div>

            </div>

        </div>


        <div class="footer">

            PHP Interface & Class Mahasiswa

        </div>

    </div>

</body>

</html>