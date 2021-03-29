<?php
include ("configuracion.php");

	if (isset($_POST["codigo"]))  $codigo = $_POST["codigo"]; 
	if (isset($_POST["password"]))  $password = $_POST["password"]; 
	if (isset($_POST["correo"]))  $correo = $_POST["correo"]; 
	if (isset($_POST["nombre"]))  $nombre = $_POST["nombre"];
	if (isset($_POST["apellido"]))  $apellido = $_POST["apellido"];	

$sql = "INSERT INTO usuarios (codigo, password, correo, nombre, apellido) values ('".$codigo."','".$password."', '".$correo."','".$nombre."','".$apellido."')";

	if ($conn->query($sql) === TRUE) {
	echo '<table>';
	echo '<tr><td>';
	echo 'Nuevo usuario registrado<br>';
	echo '</tr></td>';
	echo '<table>';

	header("location: form_signup.php?error=none");

		} 

	else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}
