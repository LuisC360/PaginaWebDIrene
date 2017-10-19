<?php require_once('conexion/connect.php'); ?>
<?php //include('php/seguridad.php'); ?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Registro de Producto</title>
        <link rel="stylesheet" href="CSS/login.css">   
  </head>
  <body style="background-image: url(img/logo.png)">  
<div class="container">
  <div id="login-form">
    <h3>Registrar Producto</h3>
    <fieldset>
      <form method="post" action="php/registrarProd.php" id="form-login">
		<?php
				$host = 'localhost';
				$user = 'root';
				$pass = '';
				$bd = 'BDIrene';
				
				$conn = new mysqli($host, $user, $pass);
				
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				else{
					$Exist=mysqli_select_db($conn,"BDIrene") or die ("Problemas al conectar con la bd");
					
					if($Exist)
					{
						$QUERY=mysqli_query($conn, "SELECT ID_Categoria, nomCategoria  FROM categoria ORDER BY nomCategoria" );
						
						echo "<select id=\"categ\" name=\"categ\" required autocomplete=\"off\">";
						while($result=mysqli_fetch_array($QUERY,MYSQLI_BOTH)){	
								echo "<option value=".$result[ID_Categoria].">".$result[nomCategoria]."</option>";
						}
						echo "</select> ";
					}
				}
		?>
			<br></br>
		<input type="text" autofocus id="name" name="name" placeholder="Nombre" required autocomplete="off"> 
		<input type="text" autofocus id="cant"  name="cant" placeholder="Cantidad" required autocomplete="off"> 
		<input type="text" autofocus id="prec"  name="prec" placeholder="Precio" required autocomplete="off"> 
		<input type="text" autofocus id="maxprod"  name="maxprod" placeholder="Maximo de Productos" required autocomplete="off"> 
		<input type="text" autofocus id="minprod"  name="minprod" placeholder="Minimo de Productos" required autocomplete="off"> 
		<textarea type="text" autofocus id="descrip" name="descrip" placeholder="Descripci&oacute;n" required autocomplete="off" rows="2" cols="37" ></textarea>
		<input type="file" autofocus id="img" name="img" required autocomplete="off"> 
		Fecha de Caducidad: 
		<br>
		<input type="date" name="fechacad" step="1" min="2017-01-01" max="2020-12-31" value="2017-01-01" autofocus required autocomplete="off">
        <input type="submit" name="doreg" id="doreg" value="Ingresar">
      </form>
    </fieldset>
  </div> <!-- end login-form -->

</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>