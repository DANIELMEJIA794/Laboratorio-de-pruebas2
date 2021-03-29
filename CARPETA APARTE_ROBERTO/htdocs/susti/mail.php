<?php

include ("configuracion.php");
include ("cabeza.php");

if (isset($_REQUEST["correodestino"])) $correodestino = $_REQUEST["correodestino"];
$tema = "Suscripción a Librerias el Crisol";
//$mensaje = "Pronto te avisaremos toda la información de promociones y ofertas.";
$remitente = "From: crisol@tu_mejor_opcion.com";
$mensaje = "Gracias por suscribirte a nuestro boletín. ¡Recibirás ofertas todos los días!";
mail($correodestino,$tema,$mensaje,$remitente);
echo 'Su correo ha sido enviado';

include ("pie.php");
?>