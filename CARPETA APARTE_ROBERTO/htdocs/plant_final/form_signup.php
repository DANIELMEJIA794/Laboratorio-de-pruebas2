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
        <h1>Regístrate</h1>
      </div>
      <div class="form-content">
        <form method="post" action="signup2.php">
          <div class="form-group">
            <label for="username">Nombre</label>
            <input type="text" name="nombre" required="required"/>
          </div>
          <div class="form-group">
            <label for="username">Apellido</label>
            <input type="text" name="apellido" required="required"/>
          </div>
          <div class="form-group">
            <label for="username">Correo electrónico</label>
            <input type="text" name="correo" required="required"/>
          </div>
          <div class="form-group">
            <label for="username">Código</label>
            <input type="text" name="codigo" required="required"/>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" required="required"/>
          </div>
          <div class="form-group">
            <button type="submit">Registrarse</button>
          </div>
        <div class="form-group">
         </label><a class="form-recovery" href="form_login.php">¿Ya tienes una cuenta? Ingresa aquí</a>
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