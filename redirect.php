<?php
    session_start();
    require "koneksi.php";
    $db = new dbObj();
    $connection = $db->getConnstring();

    if ($_POST["jawab"] == $_SESSION["hasil"]) {
        $_SESSION["skor"] += 10;
        header("Location: game.php");
    } else {
        $_SESSION["skor"] -= 2;
        $_SESSION["lives"] -= 1;
        header("Location: game.php");
    }

    if ($_SESSION["lives"] == 0) {
        $nama = $_SESSION["nama"];
        $email = $_SESSION["email"];
        $skor = $_SESSION["skor"];
        $query = "INSERT INTO peserta SET nama='$nama', email='$email', skor='$skor'";
        mysqli_query($connection, $query);
        header("Location: gameover.php");
    }
?>
