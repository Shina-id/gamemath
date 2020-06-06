<?php

    session_start();
    require "koneksi.php";
    $db = new dbObj();
    $connection = $db->getConnstring();

    echo "
        <head>
            <title>Login Game Math</title>
        </head>

        <body>
            <h1>GAME MATEMATIKA</h1>
            <form action='".$_SERVER["PHP_SELF"]."' method='post'>
            <label for='nama'>Nama Anda: </label>
            <input type='text' name='nama'><br><br>
            <label for='nama'>Email Anda: </label>
            <input type='text' name='email'><br><br>
            <input type='submit' name='submit' value='submit'>
        </body>
            
            ";


    if (isset($_POST["submit"])) {
        if (!empty($_POST['nama']) && !empty($_POST['email'])) {
            $_SESSION["nama"] = $_POST["nama"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["skor"] = 0;
            $_SESSION["lives"] = 5;
            header("Location: index.php");
        } else {
            echo "<br><br>Form tidak boleh kosong!!";
        }
    }
?>