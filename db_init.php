<?php
$db_uname = "root";
$db_psk = "rootroot";
$db_address = "localhost:3306";
$conn = new mysqli($db_address, $db_uname, $db_psk);
$conn->query("CREATE DATABASE mydb");
$conn->close();
$conn1 = new mysqli($db_address, $db_uname, $db_psk, "mydb");
$conn1->query("CREATE table users(usr varchar(128) UNIQUE, psk varchar(128));");
$conn1->close();
die();
?>
