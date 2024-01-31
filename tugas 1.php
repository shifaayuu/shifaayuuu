<?php
    $huruf = [ "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $mapel = [ "Pendidikan Agama Dan Budi Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia", "Matemtika", "Bahasa Inggris", "Dasar Dasar Kejuruan RPL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .bulat{
            height: 50px;
            width: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            border-radius: 50px;
            float: left;
            margin: 5px;
            border-radius: 50%;
            color: white;
        }

        .ayam{
            height: 115px;
            width: 250px;
            background-color: orange;
            text-align: center;
            line-height: 100px;
            border-radius: 20px 0px 20px 0px;
            float: left;
            margin: 5px;
            color: white;
        }

        .clear{
            clear: both;
        }
    </style>
<body>

        <?php for($i = 0; $i < count($huruf); $i++) : ?>
            <div class="bulat"> <?= $huruf[$i]; ?> </div>
        <?php endfor;?>

        <div class="clear"></div>

        <h1>Mata Pelajaran - X RPL 1</h1>

        <?php foreach($mapel as $angka) : ?>
            <div class="ayam"> <?= $angka; ?> </div>
        <?php endforeach; ?>
</body>
</html>