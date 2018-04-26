<?php
$title = 'Регистрация';
include 'temps/temp.php';
$connection = mysqli_connect("localhost", "root", "", "mv__db");

if ($connection == false){
	bderror();
}

$log = $_POST["username"];
$pass = md5($_POST["pass"]);
$email = $_POST["email"];
$repl = mysqli_query( $connection, "SELECT login FROM users WHERE login='$log'");
$row = mysqli_fetch_array($repl);

var_dump($row);

if ($repl == 0){
	echo "гуляемся";
} 

// mysqli_query( $connection, "INSERT INTO users(`login`, `password`, `email`) VALUES('$log', '$pass', '$email')");
mysqli_close($connection);
?>
<center><div style="background-color: white; border: 2px; width: 520px; height: 200px; padding: 40px"> Ваш аккаунт был зарегистрирован! </div></center>
