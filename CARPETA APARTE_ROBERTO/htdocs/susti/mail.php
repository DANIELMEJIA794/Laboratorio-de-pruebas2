<?php

include ("configuracion.php");
include ("cabeza.php");

if (isset($_REQUEST["correodestino"])) $correodestino = $_REQUEST["correodestino"];
$tema = "Suscripci�n a Librerias el Crisol";
//$mensaje = "Pronto te avisaremos toda la informaci�n de promociones y ofertas.";
$remitente = "From: crisol@tu_mejor_opcion.com";
$mensaje = "Gracias por suscribirte a nuestro bolet�n. �Recibir�s ofertas todos los d�as!";
mail($correodestino,$tema,$mensaje,$remitente);
echo 'Su correo ha sido enviado';

include ("pie.php");
?>