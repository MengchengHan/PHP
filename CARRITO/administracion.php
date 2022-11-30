<?php
/*comprueba que el usuario haya abierto sesión o redirige*/
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Panel de administración</title>
</head>

<body>
    <?php require 'cabecera.php'; ?>
    <h1>Panel de administración</h1>
    <img src="https://www.dariobf.com/wp-content/uploads/2014/02/Captura-de-pantalla-2014-02-12-a-las-11.10.46.png" />
    <!--lista de vínculos con la forma 
		productos.php?categoria=1-->
</body>

</html>