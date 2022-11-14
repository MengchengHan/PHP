<?php
/*formulario de login habitual
si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php 
si va mal, mensaje de error */

function comprobar_usuario($nombre, $clave){
	$mysqli = new mysqli('localhost', 'root', '', 'credenciales');
	$query = "SELECT pass FROM CREDENCIALES WHERE user LIKE '$nombre'";
	if(mysqli_connect_errno()){
		echo 'Ha fallado la conexión a la base de datos.';
	} else {
		$resultado = $mysqli->query($query);
		$query_pass = mysqli_fetch_column($resultado);
		if($clave != $query_pass){
			return false;
		}
	}
	
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	
	$usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
	if($usu==false){
		$err = true;
		$usuario = $_POST['usuario'];
	}else{	
		session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
		header("Location: sesiones1_principal.php");	
	}
		
	
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>	
		<?php if(isset($_GET["redirigido"])){
			echo "<p>Haga login para continuar</p>";
		}?>
		<?php if(isset($err) and $err == true){
			echo "<p> revise usuario y contraseña</p>";
		}?>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
			Usuario
			<input value = "<?php if(isset($usuario))echo $usuario;?>"
			id = "usuario" name = "usuario" type = "text">							
			Clave			
			<input id = "clave" name = "clave" type = "password">						
			<input type = "submit">
		</form>
	</body>
</html>