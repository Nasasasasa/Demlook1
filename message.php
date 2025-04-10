<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "block";

$conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed:" .
        $conn->connect_error);
    }
    $name = $_POST['name'];
    $username = $_POST['username'];
    $message = $_POST['message'];

    $sql = "INSERT INTO message(name, username, message) VALUES ('name', 'username', 'message')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.html');
        exit;
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
}
    $conn->close();
?>
