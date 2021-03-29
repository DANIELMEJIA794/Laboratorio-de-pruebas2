<form method='get' id='userform' action='array.php'> <tr>
       <td>Trouble Type</td>
       <td>
       <input type='checkbox' name='hobbies[]' value='Option One'>1<br>
       <input type='checkbox' name='hobbies[]' value='Option Two'>2<br>
       <input type='checkbox' name='hobbies[]' value='Option Three'>3
       </td> </tr> </table> <input type='submit' class='buttons'> </form>

<?php 


 
   $hobby = $_GET['hobbies'];
echo "Hobbies:" ;
foreach ($hobby as $hobys=>$value) 
{
  echo $value.". ";
 }
?>