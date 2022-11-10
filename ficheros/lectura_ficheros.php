<?php
	$fich = fopen("fichero_ejemplo.txt", "r");
	if ($fich === False){
		echo "No se encuentra el fichero o no se pudo leer<br>";
	}else{
		$lineas = file ('fichero_ejemplo.txt');
		echo '<pre>' . print_r($lineas, true) . '</pre>';
		// while( !feof($fich) ){
		// 	$car = fgets($fich, 2);			
		// 	echo $car . "<br>";
		// }
	}
	echo mkdir('directorio');
	fclose($fich); 