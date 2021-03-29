<?php
// VARIABLES
if (isset($_REQUEST["termino"])) $palabra_buscada = $_REQUEST["termino"]; // Metodo Get
// if (isset($_POST["termino"])) $palabra_buscada = $_POST["termino"]; // Metodo Post

// FUNCIONES
function verpalabra($palabra_buscada) {
echo '<h1><font color="white" face="arial">Este es el termino a buscar: </font><font color="red">'.$palabra_buscada.'</font></h1>';

}

// DATOS DE CONFIGURACION

$GLOBALS['DB_IP'] = 'localhost';
$GLOBALS['DB_USER'] = 'root';
$GLOBALS['DB_PASS'] = '';
$GLOBALS['DB_NAME'] = 'archivo';
$database  = $GLOBALS['DB_NAME'];

$mysqli = new mysqli($GLOBALS['DB_IP'], $GLOBALS['DB_USER'],$GLOBALS['DB_PASS'],$GLOBALS['DB_NAME']);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$conn =$mysqli;




?>