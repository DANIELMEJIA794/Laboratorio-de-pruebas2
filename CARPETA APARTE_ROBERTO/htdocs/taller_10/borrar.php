<?PHP 
require("encabezado.php");
include ("configuracion.php");
echo '<font color="white">';
if(isset($_REQUEST["id"])) $id = $_REQUEST["id"];
$sql = "DELETE FROM c19030111 WHERE  id =  '".$id."'";

if ($conn->query($sql) === TRUE) {
	echo "Registro Eliminado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}
include("pie.php");
?>