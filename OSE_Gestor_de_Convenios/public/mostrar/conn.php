<?php 
	$conn= mysqli_connect('127.0.0.1','root','','usuarios');
	//$conn= mysqli_connect("192.168.100.4","vinculacion","katakana123","vinculacion");


	
	if (!$conn) {
		die('Error de conexion(' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
	}
 ?>