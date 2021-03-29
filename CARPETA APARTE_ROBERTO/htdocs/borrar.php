<?php
include("configuracion.php");
include("encabezado.php");

if (isset($_REQUEST["id"])) $id = $_REQUEST["id"];

$sql = "DELETE FROM destinos WHERE id = '".$id."' ";

echo '<table width="100%" cellpadding="10">';
echo '<tr><td>';

if ($conn->query($sql) === TRUE) {
	echo "Registro eliminado";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

echo '</td></tr>';
echo '</table>';

include("piedepagina.php");