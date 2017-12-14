<?php
session_start();
//<!--connect to the database-->
$link = mysqli_connect("localhost", "root", "root", "onlinenotes");

if(mysqli_connect_error()) {
	die("Error: Unable to connect:" . mysqli_connect_error());
	echo "<script>window.alert('Hi!')</script>";
}
?>