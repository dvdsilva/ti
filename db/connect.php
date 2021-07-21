<?php
$utf8 = header("Content-Type: text/html; charset=utf-8");
$server = "localhost";
$user= "phpmyadmin";
$pass="#Vyttr@#";
$db="db_cadastro";

$link = mysqli_connect($server,$user,$pass,$db);
$link->set_charset('utf8');
?>