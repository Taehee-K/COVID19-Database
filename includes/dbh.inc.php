<?php

$servername = "localhost";
$dBUsername = "team12";
$dBPassword = "team12";
$dBName = "team12";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}