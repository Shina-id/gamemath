<?php

    session_start();

    $angka1 = rand(0, 20);
    $angka2 = rand(0, 20);
    $_SESSION["hasil"] = $angka1 + $angka2;

    echo "
        <head>
            <title>Game Math</title>
        </head>
        <body>
            <form action='redirect.php' method='post'>
            <h1>Halo, ". $_SESSION["nama"] ."</h1>
            Lives ". $_SESSION["lives"] ." | Skor ". $_SESSION["skor"] ."<br><br>
            <label for jawab>" . $angka1 . " + " . $angka2 . " = </label>
            <input type='number' name='jawab' placeholder='Jawab disini'><br><br>
            <input type='submit' name='submit' value='Submit'>
        </body>

        ";
    
    if (isset($_POST['submit'])) {
        header("Location: redirect.php");
        }
?>