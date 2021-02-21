<?php 


$dbhost = "localhost";
$dbname = "ppdb";
$dbuser = "root";
 $dbpass = "";
 
$koneksi = new PDO("mysql:host=" . $dbhost . ";dbname=" . $dbname . "", $dbuser, $dbpass);


 // $koneksi = mysqli_connect("localhost","root","","ppdb");
 
// Check connection
//if (mysqli_connect_errno()){
//	echo "Koneksi database gagal : " . mysqli_connect_error();
//}
 
?>