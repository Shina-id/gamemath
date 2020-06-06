<?php
    class dbObj{
        // Database Connection start
        var $servername = "localhost";
        var $username = "root";
        var $password = "";
        var $dbname = "gamemath";
        var $conn;

        function getConnstring() {
            $con = mysqli_connect(
                $this->servername,
                $this->username,
                $this->password,
                $this->dbname)
                or die("Connection failed: " . mysqli_connect_error());

                //Check Connection
                if(mysqli_connect_error()) {
                    print("Connect failed: %s\n" . mysqli_connect_error());
                    exit();
                } else {
                    $this->conn = $con;
                }
            return $this->conn;
        }
    }
?>