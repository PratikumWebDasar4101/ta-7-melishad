<?php
//langkah ke 2 sesudah membuat form
$servername = "localhost";
$username = "root";
$password = "";
$db= "webdas";

// FILE INI UNTUK MENGHUBUNGKAN DATABASE PHPMYADMIN DENGAN PHP 

$connect = mysqli_connect($servername, $username, $password, $db);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>