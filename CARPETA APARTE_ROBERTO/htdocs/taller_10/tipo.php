<?PHP 
require("encabezado.php");
include ("configuracion.php");
$texto = 'No enviado';
if(isset($_REQUEST['id'])) $id = $_REQUEST['id'];

// Captura los datos
if(isset($_REQUEST['tipo'])) $tipo = $_REQUEST['tipo'];
if(isset($_REQUEST['clasificacion'])) $clasificacion = $_REQUEST['clasificacion'];

echo '<link rel="stylesheet" href="menu/reset.css">';
   echo '<p><br>';
echo '<table border="0" cellpadding="4" cellspacing="4">';

// no necesita, como siempre se emvia las 2 variables, esta es la caden DE BUSQUquda. Otro tema??? entonces solo era necesario tener un 
//archivo solo ver php o tipo php y enlazar las dos variables? también puede realizarse de esa manera? Si, ver.php busca por id, y tipo.php por tipo y clasifcacion. Lo unico que cambia es la cade na de busqueda
//entiendo maestro creo que eso sería todo muchas gracias por su ayuda . Okey un gusto.. Me desconecto

if(isset($_REQUEST['tipo']) AND isset($_REQUEST['clasificacion']) ) 
$query = "select * from c19030111 WHERE  tipo =  '".$tipo."' AND clasificacion =  '".$clasificacion."'";

$result = mysqli_query($conn, $query);
 while ($row = mysqli_fetch_assoc($result)) {
 
    echo '<tr>';
    echo '<td>';
    // PONER IMAGEN AQUI
	    echo '<img src="'.$row["portada"].'" width="300">';
		
    echo '</td>';
    echo '<td valign="top">';
    echo '<b><font color="white">Titulo: </b>'.$row["pelicula"].'</font><br>';
    echo '<b><font color="white">Reseña: </b>'.$row["resumen"].'</font><br>';
    //echo '<b>Editorial: </b>'.$row["Editorial"].'<br>';

    echo '</td>';
    echo '</tr>';
    }
 echo '</table>';

include("pie.php");
?>