<?php
include ("configuracion.php");
include ("cabeza.php");


// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS (necesidad de cambios)
	if (isset($_POST["nombres"]))  $nombres = $_POST["nombres"]; 
	if (isset($_POST["apellido_paterno"]))  $apellido_paterno = $_POST["apellido_paterno"]; 
	if (isset($_POST["apellido_materno"]))  $apellido_materno = $_POST["apellido_materno"]; 
	if (isset($_POST["sexo"]))  $sexo = $_POST["sexo"];
	if (isset($_POST["comentarios"]))  $comentarios = $_POST["comentarios"];	
	if (isset($_POST["status"]))  $status = $_POST["status"];
	if (isset($_POST["correo_electronico"]))  $correo_electronico = $_POST["correo_electronico"];
 
	// SQL - Insertar datos..(necesidad de cambios)

	$sql = "INSERT INTO s19030111  (nombres,apellido_paterno,apellido_materno,sexo,comentarios,status,correo_electronico) values ('". $nombres."','".$apellido_paterno."','".$apellido_materno."','".$sexo."','".$comentarios."','".$status."','".$correo_electronico."')";
    
	if ($conn->query($sql) === TRUE) {
	echo '<font color="black">Nuevo registro creado</font>';
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}


include ("pie.php");
?>