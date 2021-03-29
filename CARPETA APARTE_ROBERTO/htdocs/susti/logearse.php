<?php
include ("configuracion.php");
?>
<?php
session_start();
if (isset($_REQUEST["codigo"])) $codigo   = $_REQUEST["codigo"];
if (isset($_REQUEST["password"])) $password = $_REQUEST["password"];
//$_SESSION["codigo"] = $codigo;	
//$_SESSION["password"] = $password;
$varsesion =  $_SESSION['codigo'];
$consulta="select * from u19030111	where 	codigo = '".$codigo."' AND password = '".$password."'";
	echo '<table>'; 
	$result = mysqli_query($conn, $consulta);
	$filas= mysqli_num_rows($result);
	// cod  joseph 
	$data =  mysqli_fetch_array($result);
	//
	if ($filas>0){
		//  logeado con exito
		//setear  variables d e session 
		//echo 'se conectó con éxito'.$filas['nombre'];
		$_SESSION["nombre"]= $data['nombre'];
		$_SESSION["apellido"]= $data['apellido'];
		$_SESSION["rol_de_usuario"]= $data['rol'];
			// redireccion
				header ("location:index.php");
	}else{
	echo 'usted no tiene autorización';
	die();
	}
	mysql_free_result ($resultado);
	mysql_close 	   ($conn);
	?>