<?php session_start();

			sleep(1);
	
			$pass = md5($_POST['pass']);
			$user = $_POST['user'];				
			
			$connect=mysqli_connect("localhost", "root", "") or die ("Problemas al conectar");
			$Exist=mysqli_select_db($connect, "BDIrene") or die ("Problemas al conectar con la bd");
			
			$checa_user = mysqli_query($connect, "SELECT * FROM empleado WHERE usuario='$user' AND password='$pass'");
			
			if(mysqli_num_rows($checa_user) == 1){
				$_SESSION['usuario'] = $user = $_POST['user'];
				header("Location: ../sistema.php");
				echo 1;
			}else{
				header("Location: ../index.php");
   				echo 0;
   		}
?>