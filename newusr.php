<?php
$db_uname = "root";
$db_psk = "rootroot";
$db_address = "db";
$db_name = "mydb";
$conn = new mysqli($db_address, $db_uname, $db_psk, $db_name);
$uname = $_POST["uname"];
$psk = $_POST["psk"];
$conn->query("INSERT INTO users (usr,psk,data) values ('$uname','$psk','')");
$conn->close();
header("Location: /login.php");
die();
?>
