<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "optimal";
    $conn = new mysqli($servsername, $username, $password, $dbname);
    if ($conn->connect_error) {die("Ошибка ошибка ",
        $conn->connect_error);}
        /* else {
        echo "Соединение успешно";
        } */
    ?>