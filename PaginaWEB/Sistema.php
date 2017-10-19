<?php session_start(); ?>
<?php include('php/seguridad.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sistema de Inventario D´Irene</title>
<link href="CSS/Estilos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="CSS/Estilos.css" media="screen and (min-width:900px)"/>
<link rel="stylesheet" type="text/css" href="CSS/grande.css" media="screen and (min-width:900px)"/>
<link rel="stylesheet" type="text/css" href="CSS/mediano.css" media="screen and (min-width:500px) and (max-width:899px)"/>
<link rel="stylesheet" type="text/css" href="CSS/chico.css" media="screen and (max-width:499px)"/>

</head>
<body>

<div class="Linea"> </div>
<div class="MenuInventario"> 
		<span class="Titulo"> Sistema </span> 
		<img class="imagen" src="img/logo.png" alt="imagen de logo" />
		<div class="Picture"><a class="estilot" >   </a>
		<?php 				
				if ( isset($_SESSION['usuario']) ) {
					echo "<br></br>";
					echo "<div class=\"Submenu\"><a class=\"Button\" href=\"include/logout.php\">SALIR</a> </div>";
					echo "<div class=\"Submenu\">Usuario: ".$_SESSION['usuario']."</div>";
				}
		?>
		
	    </div>
</div>
<div class="Linea2"> </div>

<div class="MenuBotones"> 
		<div class="Inicio"> 
			<div class="ico"> <i class ="fa fa-home fa-2x"> <a class="estilol" href="."> Inicio </a> </i> </div>
		</div>
		<div class="Categorias">
			<div class="ico"> <i class="fa fa-list fa-2x"> <a class="estilol" href="categoria.php?id=21"> Categorías </a> </i> </div> 
		</div>
		<div class="Productos"> 
			<div class="ico"> <i class ="fa fa-product-hunt fa-2x"> <a class="estilol" href="producto.php"> Productos </a> </i> </div>
		</div>
		<div class="Inventario">
			<div class="ico"> <i class="fa fa-bar-chart fa-2x"> <a class="estilol" href="listproductos.php"> Inventario </a> </i> </div> 
		</div>
		<div class="Reabastecer"> 
			<div class="ico"> <i class ="fa fa-refresh fa-2x"> <a class="estilol" href="."> Reabastecer </a> </i> </div>
		</div>
		<div class="Reportes">
			<div class="ico"> <i class="fa fa-list-alt fa-2x"> <a class="estilol" href="."> Reportes </a> </i> </div> 
		</div>
		<?php 				
				if ( isset($_SESSION['usuario']) ) {	
				
					$connect=mysqli_connect("localhost", "root", "") or die ("Problemas al conectar");
					$Exist=mysqli_select_db($connect, "BDIrene") or die ("Problemas al conectar con la bd");
					
					$tipo = 0;
					$user = $_SESSION['usuario']; 
					
					$checa_user = mysqli_query($connect, "SELECT * FROM empleado WHERE usuario='$user' AND tipo='$tipo'");

					if(mysqli_num_rows($checa_user) > 0){
						echo "<div class=\"Usuarios\">";
						echo "<div class=\"ico\"> <i class =\"fa fa-users fa-2x\"> ";
						echo "<a class=\"estilol\" href=\"listusuarios.php\"> Usuarios </a> </i> </div> </div>";
					}
				}
		?>
		

</div>