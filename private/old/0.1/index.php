<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible", content="ie=edge">
        <link rel="icon" href="/img/Dorian_icon.png">
        <link rel="stylesheet" href="/css/global.css">
        <link rel="stylesheet" href="/css/navbar.css">
        <title>Dorian Isselin</title>

        <link rel="stylesheet" href="/css/index.css">
    </head>
    

    <body>
        <?php
        include(__DIR__."/private/model/navbar.php");
        ?>

        <main class="notool">

            <div id="front">
                <div id="title">
                    <h1 style="text-transform:capitalize; font-family: Linear">Dorian Isselin</h1>
                    <p>Analogique | Numérique | Programmation</p>
                </div>
                <img src="/img/Back_mask.png" alt="mask" id="sec0">
            </div>

            <div id="back">
                <img src="/img/Back1.jpg" alt="Background_1" id="sec1">
                <img src="/img/Back1.jpg" alt="Background_1" id="sec2">
                <img src="/img/Back1.jpg" alt="Background_1" id="sec3">
            </div>

        </main>

    </body>
</html>