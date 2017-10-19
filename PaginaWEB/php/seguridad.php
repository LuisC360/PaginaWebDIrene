<?php 
	$connect=mysqli_connect("localhost", "root", "") or die ("Problemas al conectar");
	$Exist=mysqli_select_db($connect, "BDIrene") or die ("Problemas al conectar con la bd");
	
	$user = $_SESSION['usuario']; 
					
	$checa_user = mysqli_query($connect, "SELECT * FROM empleado WHERE usuario='$user' ");

	if(mysqli_num_rows($checa_user) != 1){
		header("Location: index.php");
	}
?>