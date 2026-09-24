<?php

interface BisaDihitung
{
    public function hargaAkhir(): float;
}


// CLASS PRODUK
class Produk implements BisaDihitung
{
    protected string $nama;
    protected float $harga;

    // Modifikasi 1: field baru
    protected string $kategori;

    public function __construct(
        string $nama,
        float $harga,
        string $kategori
    ) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    public function hargaAkhir(): float
    {
        return $this->harga;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getHarga(): float
    {
        return $this->harga;
    }

    public function getKategori(): string
    {
        return $this->kategori;
    }
}


// CLASS PRODUK DISKON
class ProdukDiskon extends Produk
{
    private float $diskon;

    public function __construct(
        string $nama,
        float $harga,
        string $kategori,
        float $diskon
    ) {
        parent::__construct(
            $nama,
            $harga,
            $kategori
        );

        // Modifikasi 2: validasi diskon
        if ($diskon < 0 || $diskon > 100) {
            throw new InvalidArgumentException(
                'Diskon harus antara 0 sampai 100%'
            );
        }

        $this->diskon = $diskon;
    }

    // Override hargaAkhir()
    public function hargaAkhir(): float
    {
        return $this->harga *
            (1 - $this->diskon / 100);
    }

    public function getDiskon(): float
    {
        return $this->diskon;
    }
}


// DATA PRODUK
try {

    $daftarProduk = [

        new Produk(
            'Keyboard',
            250000,
            'Perangkat Komputer'
        ),

        new ProdukDiskon(
            'Mouse',
            150000,
            'Aksesoris',
            10
        ),

        new Produk(
            'Flashdisk',
            85000,
            'Penyimpanan'
        ),

        new ProdukDiskon(
            'Headset',
            300000,
            'Audio',
            15
        )

    ];

} catch (InvalidArgumentException $e) {

    die($e->getMessage());

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Toko Komputer</title>

<style>

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;

    background: #f5f7fb;

    color: #1f2937;
}

.container {
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
}


/* HEADER */

.header {
    background: #111827;
    color: white;

    padding: 30px;

    border-radius: 18px;

    margin-bottom: 25px;
}

.header h1 {
    margin: 0 0 8px;
    font-size: 28px;
}

.header p {
    margin: 0;

    color: #cbd5e1;
}


/* TOTAL PRODUK */

.info {
    background: white;

    padding: 18px 22px;

    border-radius: 12px;

    margin-bottom: 20px;

    box-shadow:
        0 4px 15px rgba(0,0,0,0.06);
}

.info strong {
    color: #2563eb;
}


/* PRODUK */

.produk {
    background: white;

    border-radius: 15px;

    margin-bottom: 15px;

    padding: 22px;

    display: flex;

    justify-content: space-between;

    align-items: center;

    box-shadow:
        0 5px 18px rgba(0,0,0,0.07);

    transition: 0.2s;
}

.produk:hover {
    transform: translateY(-3px);
}


/* KIRI */

.kiri {
    display: flex;

    align-items: center;

    gap: 15px;
}

.icon {
    width: 55px;
    height: 55px;

    background: #eff6ff;

    border-radius: 12px;

    display: flex;

    justify-content: center;

    align-items: center;

    font-size: 25px;
}

.nama {
    font-size: 18px;

    font-weight: bold;

    margin-bottom: 5px;
}

.kategori {
    color: #64748b;

    font-size: 13px;
}


/* KANAN */

.kanan {
    text-align: right;
}

.harga {
    font-size: 20px;

    font-weight: bold;

    color: #2563eb;
}

.harga-normal {
    color: #9ca3af;

    text-decoration: line-through;

    font-size: 12px;
}

.diskon {
    display: inline-block;

    background: #dcfce7;

    color: #15803d;

    padding: 4px 8px;

    border-radius: 6px;

    font-size: 11px;

    font-weight: bold;

    margin-bottom: 4px;
}


/* FOOTER */

.footer {
    text-align: center;

    color: #94a3b8;

    font-size: 12px;

    margin-top: 25px;
}


/* RESPONSIVE */

@media(max-width:600px) {

    .produk {
        align-items: flex-start;

        gap: 15px;

        flex-direction: column;
    }

    .kanan {
        text-align: left;

        width: 100%;
    }

}

</style>

</head>


<body>

<div class="container">


    <div class="header">

        <h1>🛒 Toko Komputer</h1>

        <p>
            Daftar produk dan harga terbaru
        </p>

    </div>


    <div class="info">

        Jumlah produk:
        <strong>
            <?= count($daftarProduk) ?>
        </strong>

    </div>


    <?php foreach ($daftarProduk as $produk): ?>

        <div class="produk">


            <div class="kiri">

                <div class="icon">

                    <?php

                    if (
                        strtolower(
                            $produk->getKategori()
                        ) == 'audio'
                    ) {

                        echo '🎧';

                    } elseif (
                        strtolower(
                            $produk->getKategori()
                        ) == 'penyimpanan'
                    ) {

                        echo '💾';

                    } elseif (
                        strtolower(
                            $produk->getKategori()
                        ) == 'aksesoris'
                    ) {

                        echo '🖱️';

                    } else {

                        echo '⌨️';

                    }

                    ?>

                </div>


                <div>

                    <div class="nama">

                        <?= htmlspecialchars(
                            $produk->getNama()
                        ) ?>

                    </div>

                    <div class="kategori">

                        <?= htmlspecialchars(
                            $produk->getKategori()
                        ) ?>

                    </div>

                </div>

            </div>


            <div class="kanan">


                <?php if (
                    $produk instanceof ProdukDiskon
                ): ?>

                    <div class="diskon">

                        DISKON
                        <?= $produk->getDiskon() ?>%

                    </div>

                    <div class="harga-normal">

                        Rp
                        <?= number_format(
                            $produk->getHarga(),
                            0,
                            ',',
                            '.'
                        ) ?>

                    </div>

                <?php endif; ?>


                <div class="harga">

                    Rp
                    <?= number_format(
                        $produk->hargaAkhir(),
                        0,
                        ',',
                        '.'
                    ) ?>

                </div>


            </div>


        </div>

    <?php endforeach; ?>


    <div class="footer">

        PHP OOP • Interface • Inheritance • Polymorphism

    </div>


</div>

</body>

</html>