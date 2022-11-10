<?php
	$datos = simplexml_load_file("fichero_xml.xml");
	echo "<br>";
    $cif = $datos->xpath('//cif');
	if($datos===false){
		echo "Error al leer el fichero";
	}
	foreach($cif as $valor){
		print_r($valor);
		echo "<br>";
	}
?>