<?php

session_start();
if(!isset($_SESSION['submit'])){
    header("location: t19.php");
}else{
    $email= $_POST["email"];
    $password= $_POST["password"];

    echo "<h2>Selamat datang, " . $email . "!</h2>";
	echo "<p>Password Anda: " . $password . "</p>";
}
?>