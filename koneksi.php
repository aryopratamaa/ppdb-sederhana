<?php 

$dbhost = "localhost";
$dbname = "ppdb";
$dbuser = "root";
$dbpass = "";
 
$koneksi = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . "", $dbuser, $dbpass);
 
?>