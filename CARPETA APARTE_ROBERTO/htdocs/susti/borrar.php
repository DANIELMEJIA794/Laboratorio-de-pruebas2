<?PHP 
require("cabeza.php");
include ("configuracion.php");
echo '<font color="black">';
if(isset($_REQUEST["id"])) $id = $_REQUEST["id"];
$sql = "DELETE FROM l19030111 WHERE  id =  '".$id."'";

if ($conn->query($sql) === TRUE) {
	echo "Registro Eliminado";
		} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
		}
include("pie.php");
?>