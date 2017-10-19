<?php require_once('conexion/connect.php'); ?>
<?php //include('php/seguridad.php'); ?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Productos</title>
        <link rel="stylesheet" href="CSS/tabla.css"> 
		
  </head>
  <body style="background-image: url(img/logo.png)">  
  
<div class="datagrid">
	<table>
		<caption>Productos</caption>
	<thead>
	<tr align=center>
		<th><strong>ID_Producto</strong></th>
		<th><strong>Categoria</strong></th>
		<th><strong>Nombre</strong></th>
		<th><strong>Descripcion</strong></th>
		<th><strong>Imagen</strong></th>
		<th><strong>Cantidad</strong></th>
		<th><strong>Precio</strong></th>
		<th><strong>Cantidad Minima</strong></th>
		<th><strong>Caducidad</strong></th>
	</tr></thead>
	
	<tbody>
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
					$Exist=mysqli_select_db($conn,$bd) or die ("Problemas al conectar con la bd");
					
					if($Exist)
					{
						$QUERY=mysqli_query($conn, "SELECT ID_Producto, categoria, nombre, descripcion, imagen, cantidad, precio, min, fechacaducidad
						FROM producto ORDER BY categoria" );
						
						while($result=mysqli_fetch_row ( $QUERY)){
						echo "<tr class=\"alt\">";							
								echo "<td>".$result[0]."</td>";
								echo "<td>".$result[1]."</td>";
								echo "<td>".$result[2]."</td>";
								echo "<td>".$result[3]."</td>";
								echo "<td>";
								echo "<img src=\"imagenes/\".$result[4]. height= 120 width= 140>";
								echo "<td>";   
								//echo "<td>".$result[4]."</td>";
								echo "<td>".$result[5]."</td>";
								echo "<td>".$result[6]."</td>";
								echo "<td>".$result[7]."</td>";
								echo "<td>".$result[8]."</td>";
						echo "</tr> ";
						}
						
					}	
				}
		?>
		
	</tbody>
	</table>
</div>
	<script type="text/javascript" src="js/jquery-1.12.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>