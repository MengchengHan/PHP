<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
		$sexo = $_REQUEST["sexo"];
		if(!is_null($sexo)){		
			print($sexo);
		}else{
			$err = true;
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
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
				<input type="radio" name="sexo">
				<span>Hombre</span>
				<input type="radio" name="sexo">
				<span>Mujer</span>
			<input type = "submit">
		</form>
	</body>
</html>