<?php
    session_start();
    include "koneksi.php";
    $db = new dbObj();
    $connection = $db->getConnstring();

    echo "
        <head>
            <title>Leaderboard Game Math</title>
        </head>
        <body>
            Hello, ".$_SESSION['nama']." Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.
            <br><br>
            <form action='".$_SERVER["PHP_SELF"]."' method='post'>
            <table border='2'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Skor</th>
                        </tr>
                    </thead>
                    <tbody>

                        ";
                        $result = mysqli_query($connection, "SELECT * FROM peserta ORDER BY skor DESC LIMIT 10");
                        $no = 1;
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>
                            <td>" . $no . "</td>
                            <td>" . $row['nama'] . "</td>
                            <td>" . $row['skor'] . "</td>
                            </tr>";
                            $no++;
                        };
                        echo "
                    </tbody>
            </table>
            <br><br>
            <input type='submit' name='ulang' value='Main Lagi?'>
        </body>
    ";
    
    if (isset($_POST['ulang'])) {
        header("Location: destroy.php");
    }
?>