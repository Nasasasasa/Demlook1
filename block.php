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
    $name = $_SESSION['name'];
    $sql = "SELECT * FROM opti WHERE id = '$name'";
    $result = $conn->query($sql);
    $user_data =
    $result->fetch_assoc();
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой не сам</title>
        <link href="" rel="stylesheet">
    </head>
    <body>
        <form action="message.php" method="post">
            <input type="hidden" name="name" value="<?php echo $user_data['id']; ?>">
            <input type="text" name="username" placeholder="Миша" required/>
            <textarea name="message" placeholder="Ваше сообщение"></textarea>
            <button type="submit">Отправка сообщения</button>
        </form>
</html>