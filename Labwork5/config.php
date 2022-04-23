<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="modul5";
	//buat koneksi dan cek disini

	global $conn;
    $conn = mysqli_connect($server, $username, $pass, $dbname);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }
	echo "Connected Succesfully"
?>