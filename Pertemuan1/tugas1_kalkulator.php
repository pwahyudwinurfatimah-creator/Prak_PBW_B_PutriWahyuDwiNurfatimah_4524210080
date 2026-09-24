<?php
// kalkulator.php

$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

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
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b;
            }
            break;

        default:
            $pesan = 'Operator tidak valid.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <title>Kalkulator</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            margin: 0;
            padding: 40px;
        }

        .kalkulator {
            width: 400px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            color: #444;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            box-sizing: border-box;
        }

        input:focus,
        select:focus {
            border-color: #4a6cf7;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4a6cf7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #3451c7;
        }

        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #eaf2ff;
            border-radius: 8px;
            text-align: center;
            color: #2455b5;
            font-size: 18px;
            font-weight: bold;
        }

        .pesan {
            margin-top: 20px;
            padding: 15px;
            background: #ffe8e8;
            color: #c62828;
            border-radius: 8px;
            text-align: center;
        }

    </style>
</head>

<body>

<div class="kalkulator">

    <h1>Kalkulator Sederhana</h1>

    <form method="post">

        <label for="a">
            Angka Pertama
        </label>

        <input
            type="number"
            step="any"
            name="a"
            id="a"
            placeholder="Masukkan angka pertama"
            required
        >


        <label for="operator">
            Operator
        </label>

        <select name="operator" id="operator" required>

            <option value="+">Penjumlahan (+)</option>
            <option value="-">Pengurangan (-)</option>
            <option value="*">Perkalian (*)</option>
            <option value="/">Pembagian (/)</option>

        </select>


        <label for="b">
            Angka Kedua
        </label>

        <input
            type="number"
            step="any"
            name="b"
            id="b"
            placeholder="Masukkan angka kedua"
            required
        >


        <button type="submit">
            Hitung
        </button>

    </form>


    <?php if ($pesan): ?>

        <div class="pesan">
            <?= htmlspecialchars($pesan) ?>
        </div>

    <?php elseif ($hasil !== null): ?>

        <div class="hasil">
            Hasil:
            <?= htmlspecialchars((string)$hasil) ?>
        </div>

    <?php endif; ?>

</div>

</body>

</html>