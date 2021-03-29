<?php 
include ("encabezado.php");
include ("configuracion.php");
?>
<table bgcolor="#B7BADB" width="100%">
  <tr><td>
 <div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
      <div class="form-header">
        <h1>Iniciar sesión</h1>
      </div>
      <div class="form-content">
        <form method="post" action="login2.php">
          <div class="form-group">
            <label for="username">Código</label>
            <input type="text" id="codigo" name="codigo" required="required"/>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required="required"/>
          </div>
          <div class="form-group">
            <button type="submit">Ingresar</button>
          </div>
          <div class="form-group">
         </label><a class="form-recovery" href="form_signup.php">¿No tienes una cuenta? Regístrate</a>
        </div>
        <div class="form-group">
        </form>
      </div>
    </div>
  </div>
  </td></tr>
 </table>
<?php
include ("piedepagina.php");
?>