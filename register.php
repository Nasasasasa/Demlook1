<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "optimal";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed:" .
    $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $login = $_POST['login'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

if ($pass1 == $pass2) {
    echo "Пароли совпадают, успешно!";


$sql = "SELECT * FROM opti WHERE login = '$login'";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "Пользователь с таким логином уже уществует!";
    } else {
        $sql = "INSERT INTO opti (name, login, tel, email, pass1, pass2) VALUES ('$name', '$login', '$tel', '$email', '$pass1', '$pass2')";
        
        if ($conn->query($sql) === TRUE) {
            header('Location: index.html');
            exit;
        } else {
            echo "Error" . $sql . "<br>" . $conn->error;
        }
}
} else {
    echo "Пароли не совпадают!";
}
}
$conn->close();
?>