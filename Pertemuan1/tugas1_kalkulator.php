<?php

$hasil = null;
$pesan = '';

$a = $_POST['a'] ?? '';
$b = $_POST['b'] ?? '';
$operator = $_POST['operator'] ?? '+';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($a == '' || $b == '') {
        $pesan = "Silakan isi kedua angka.";
    } else {

        $a = (float) $a;
        $b = (float) $b;

        switch ($operator) {

            case '+':
                $hasil = $a + $b;
                break;

            case '-':
                $hasil = $a - $b;
                break;

            case '*':
                $hasil = $a * $b;
                break;

            case '/':
                if ($b == 0) {
                    $pesan = "Tidak bisa membagi dengan 0.";
                } else {
                    $hasil = $a / $b;
                }
                break;

            case '^':
                $hasil = $a ** $b;
                break;

            case '%':
                if ($b == 0) {
                    $pesan = "Sisa bagi dengan 0 tidak bisa.";
                } else {
                    $hasil = $a % $b;
                }
                break;

            default:
                $pesan = "Operator tidak tersedia.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kalkulator</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #ffff;
            margin: 0;
            padding: 30px;
        }

        .kalkulator {
            width: 350px;
            max-width: 100%;
            margin: auto;

            /* Kotak kalkulator warna hitam */
            background: #111;

            padding: 25px;
            border-radius: 15px;

            box-shadow: 0 5px 15px #222;
        }

        h2 {
            text-align: center;

            /* Judul putih */
            color: white;
        }

        label {
            display: block;
            margin-bottom: 5px;

            /* Label putih */
            color: white;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;

            border: 2px solid #3498db;
            border-radius: 8px;

            box-sizing: border-box;

            background: #222;
            color: white;
        }

        input::placeholder {
            color: #aaa;
        }

        input:focus,
        select:focus {
            border-color: #74b9ff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 11px;

            border: none;
            border-radius: 8px;

            background: #3498db;
            color: white;

            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #2980b9;
        }

        .reset {
            display: block;
            text-align: center;

            margin-top: 10px;
            padding: 10px;

            background: #555;
            color: white;

            text-decoration: none;
            border-radius: 8px;
        }

        .reset:hover {
            background: #777;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;

            text-align: center;

            background: #27ae60;
            border-radius: 10px;

            color: white;
        }

        .pesan {
            margin-top: 20px;
            padding: 15px;

            text-align: center;

            background: #e74c3c;
            color: white;

            border-radius: 10px;
        }

    </style>

</head>

<body>

<div class="kalkulator">

    <h2>🧮 Kalkulator</h2>

    <form method="post">

        <label>Angka pertama</label>

        <input
            type="number"
            step="any"
            name="a"
            value="<?= htmlspecialchars($a) ?>"
            placeholder="Contoh: 10"
            required
        >

        <label>Operasi</label>

        <select name="operator">

            <option value="+"
                <?= $operator == '+' ? 'selected' : '' ?>>
                ➕ Tambah
            </option>

            <option value="-"
                <?= $operator == '-' ? 'selected' : '' ?>>
                ➖ Kurang
            </option>

            <option value="*"
                <?= $operator == '*' ? 'selected' : '' ?>>
                ✖️ Kali
            </option>

            <option value="/"
                <?= $operator == '/' ? 'selected' : '' ?>>
                ➗ Bagi
            </option>

            <option value="^"
                <?= $operator == '^' ? 'selected' : '' ?>>
                🔺 Pangkat
            </option>

            <option value="%"
                <?= $operator == '%' ? 'selected' : '' ?>>
                🔢 Sisa Bagi
            </option>

        </select>

        <label>Angka kedua</label>

        <input
            type="number"
            step="any"
            name="b"
            value="<?= htmlspecialchars($b) ?>"
            placeholder="Contoh: 5"
            required
        >

        <button type="submit">
            Hitung
        </button>

    </form>

    <a href="kalkulator.php" class="reset">
        🔄 Reset
    </a>

    <?php if ($pesan != ''): ?>

        <div class="pesan">
            <?= htmlspecialchars($pesan) ?>
        </div>

    <?php elseif ($hasil !== null): ?>

        <div class="hasil">
            <b>Hasil:</b><br>
            <strong><?= htmlspecialchars($hasil) ?></strong>
        </div>

    <?php endif; ?>

</div>

</body>

</html>
