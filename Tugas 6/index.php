<?php
function konversiKeRomawi($angkaAwal)
{
    $hasilUbah = "";

    $romawi = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($romawi as $roman => $nilai) {
        $sama = $angkaAwal / $nilai;
        $hasilUbah .= str_repeat($roman, $sama);
        $angkaAwal = $angkaAwal % $nilai;
    }

    return $hasilUbah;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Convert to Romawi</title>
</head>

<body>
    <div class="container">
        <h1>
            Convert Integer To Roman Numeral
        </h1>

        <form method="post">
            <label for="angkaAwal">Input Angka:</label>
            <br>
            <input id="angkaUser" type="text" name="angkaAwal" type="number">
            <br>
            <button id="konversiBtn">Convert</button>
        </form>
        <div class="outputNumber">
            <h2>
                <?php error_reporting(0);
                echo konversiKeRomawi($_POST["angkaAwal"]);
                ?>
            </h2>

        </div>
    </div>
</body>

</html>