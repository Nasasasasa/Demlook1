<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "optimal";

$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connect failed:" .
    $conn->connect_error);
 }
  $login = $_POST['login'];
  $pass1 = $_POST['pass1'];

  $sql = "SELECT * FROM opti WHERE login = '$login' AND pass1 = '$pass1'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "Успешно!" ;
    header("Location: index.html");
  } else {
    echo "Пользователь с таким логином и паролем не найден";
  }
  $conn->close()
?>