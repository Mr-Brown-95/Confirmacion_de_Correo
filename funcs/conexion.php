<?php

$hostname="192.168.0.4";
$user="android";
$password="12345";
$dataBase="awos21a";

	$mysqli=new mysqli($hostname,$user,$password,$dataBase); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>