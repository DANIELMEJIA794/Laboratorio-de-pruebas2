<?php

include("configuracion.php");

ob_start();
session_start();

if (isset($_REQUEST["codigo"])) $codigo = $_REQUEST["codigo"];
if (isset($_REQUEST["password"])) $password = $_REQUEST["password"];

$sql = "select * from usuarios where codigo = '".$codigo."' AND password = '".$password."' ";

echo '<table width="60%" cellpadding="5" cellspacing="5">';
	$result = mysqli_query($conn, $sql);     
	if (mysqli_num_rows($result) > 0) 
	{	
		while($row = mysqli_fetch_assoc($result))
			{
			$_SESSION["codigo"] = $row["codigo"];
			$_SESSION["nombre"] = $row["nombre"];
			$_SESSION["apellido"] = $row["apellido"];
			} 
  	}

if (isset($_SESSION["codigo"]))
{
	header ("Location: index.php");
}
else
{
	echo 'Usted no está autorizado a esta sección';
	header ("Location: login.php?error=invalid");
}

?>