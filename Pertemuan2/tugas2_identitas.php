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

    public function __construct(string $nim, string $nama, float $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->setIpk($ipk);
    }

    public function setIpk(float $ipk): void
    {
        if ($ipk < 0 || $ipk > 4) {
            throw new InvalidArgumentException('IPK harus 0 sampai 4.');
        }

        $this->ipk = $ipk;
    }

    public function getIpk(): float
    {
        return $this->ipk;
    }

    public function ringkasan(): string
    {
        return $this->nim . ' - ' . $this->nama . ' - IPK: ' . $this->ipk;
    }
}

$mhs = new Mahasiswa('2026001', 'Andi Pratama', 3.75);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffb6c1, #b5e8ff);
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 400px;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #6c5ce7;
            margin-bottom: 25px;
        }

        .data {
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 12px;
        }

        .nim {
            background: #ffeaa7;
        }

        .nama {
            background: #81ecec;
        }

        .ipk {
            background: #fab1a0;
        }

        .label {
            font-size: 13px;
            color: #555;
            margin-bottom: 5px;
        }

        .value {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="card">

    <h2>🌈 Data Mahasiswa</h2>

    <div class="data nim">
        <div class="label">NIM</div>
        <div class="value">2026001</div>
    </div>

    <div class="data nama">
        <div class="label">Nama</div>
        <div class="value">Andi Pratama</div>
    </div>

    <div class="data ipk">
        <div class="label">IPK</div>
        <div class="value"><?= $mhs->getIpk(); ?></div>
    </div>

    <div class="footer">
        Data Mahasiswa
    </div>

</div>

</body>
</html>
