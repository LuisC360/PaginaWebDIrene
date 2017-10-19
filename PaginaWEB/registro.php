<?php require_once('conexion/connect.php'); ?>
<?php //include('php/seguridad.php'); ?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Registro de Empleado</title>
        <link rel="stylesheet" href="CSS/login.css">   
		
  </head>
  <body style="background-image: url(img/logo.png)">  
  
<div class="container">
  <div id="login-form">
    <h3>Registrar Empleado</h3>
    <fieldset>
      <form method="post" action="php/registrar.php" id="form-login">
			<select id="tipo" name="tipo" required autocomplete="off">
				<option value="0">Administrador</option>
				<option value="1">Capturista</option>
				<option value="2">usuario</option>
			</select> 
			<br></br>
		<input type="text" autofocus id="name" name="name" placeholder="Nombres" required autocomplete="off"> 
		<input type="text" autofocus id="apP" name="apP" placeholder="Apellido Paterno" required autocomplete="off"> 
		<input type="text" autofocus id="apM" name="apM" placeholder="Apellido Materno" required autocomplete="off"> 
		<input type="text" autofocus id="calle"  name="calle" placeholder="Calle" required autocomplete="off"> 
		<input type="text" autofocus id="num"  name="num" placeholder="N&uacute;mero" required autocomplete="off"> 
		<input type="text" autofocus id="col"  name="col" placeholder="Colonia" required autocomplete="off"> 
		<input type="text" autofocus id="tel"  name="tel" placeholder="Tel&eacute;fono" required autocomplete="off"> 
		<input type="text" autofocus id="mail" name="mail" placeholder="E-Mail" required autocomplete="off"> 
		<input type="text" autofocus id="user" name="user" placeholder="Usuario" required autocomplete="off"> 
		<input type="password" id="pass" name="pass" placeholder="Contraseña" required autocomplete="off"> 
        <input type="submit" name="doreg" id="doreg" value="Ingresar">
      </form>
    </fieldset>
  </div> <!-- end login-form -->

</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
