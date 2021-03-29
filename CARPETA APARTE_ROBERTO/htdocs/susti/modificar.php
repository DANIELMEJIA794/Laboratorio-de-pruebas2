<?php
require("cabeza.php");
include ("configuracion.php");

echo '<font color="black">';
// --------------------------------------------------------------------

	// VARIABLES ENVIADAS Y GUARDADAS
	if (isset($_GET["id"]))  $id = $_GET["id"]; 
	if (isset($_GET["titulo"])) $titulo = $_GET["titulo"]; 
	if (isset($_GET["resumen"])) $resumen = $_GET["resumen"]; 
	if (isset($_GET["ano"])) $ano = $_GET["ano"];
	if (isset($_GET["autor"])) $autor = $_GET["autor"];


	// SQL - Insertar datos..

	$sql = "UPDATE  l19030111  SET titulo='".$titulo."',resumen='".$resumen."',ano='".$ano."',autor='".$autor."' WHERE id= '".$id."'";
    
	if ($conn->query($sql) === TRUE) {
	echo "Registro Actualizado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}

	// SUBIR ARCHIVO
    
    


include("pie.php");
?>