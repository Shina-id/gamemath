<?php

    session_start();
    
    echo "
        <head>
            <title>Mulai Game Math</title>
        </head>
        <body>
            <form action='".$_SERVER["PHP_SELF"]."' method='post'>
            Halo ".$_SESSION['nama'].", selamat datang kembali di permainan ini !!!<br><br><br>
            <input type='submit' name='start' value='Start Game'><br><br>
            <a href='destroy.php'> Bukan Anda? (klik di sini)</a>
        </body>

        ";
    
    if (isset($_POST['start'])) {
        header("Location:game.php");
    }
?>