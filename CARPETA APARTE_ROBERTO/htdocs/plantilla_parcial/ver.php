<?PHP 
require("encabezado.php");
include ("configuracion.php");
$texto = 'No enviado';
if(isset($_REQUEST['id'])) $id = $_REQUEST['id'];
echo '<link rel="stylesheet" href="menu/reset.css">';
   echo '<p><br>';
echo '<table border="0" cellpadding="4" cellspacing="4">';
$query = "select * from c19030111 WHERE  id =  '".$id."' Order by id DESC ";
$result = mysqli_query($conn, $query);
 while ($row = mysqli_fetch_assoc($result)) {
 
    echo '<tr>';
    echo '<td>';
    // PONER IMAGEN AQUI
	    echo '<img src="'.$row["portada"].'" width="300">';
		
    echo '</td>';
    echo '<td  valign="top">';
    echo '<b><h2><font color="white">Titulo: </b>'.$row["pelicula"].'</font><br>';
    echo '<b><font color="white">Reseña </b>'.$row["resumen"].'</font></h2><br>';
    //echo '<b>Editorial: </b>'.$row["Editorial"].'<br>';

    echo '</td>';
 echo '</tr>';
    }
 echo '</table>';

include("pie.php");
?>