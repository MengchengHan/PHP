<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = array();
        $err = false;

        foreach ($_POST as $k => $v) {
            if (empty($v)) {
                $str[] = $k;
                $err = true;
            } elseif ($k == 'sexo' || $k == 'estaciones'){
                if ($k == 'sexo' && empty($v)){
                    $str[] = "sexo";
                } elseif ($k == 'estaciones' && empty($v)){
                    $str[] = "estación";
                }
            }
        }

        if ($err) {
            echo "Falta el campo de ";
            foreach ($str as $item) {
                echo $item . " ";
            }
            echo "<br> <br>";
        } else {
            header("Location:welcome.html");
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
        <label for="estaciones">Estación del año fav</label>
        <select name="estaciones"]">
            <option value="" disabled selected></option>
            <option <?php if (isset($_POST["estaciones"]) && $_POST["estaciones"] == "Primavera") {echo 'selected';}?>>Primavera</option>
            <option <?php if (isset($_POST["estaciones"]) && $_POST["estaciones"] == "Verano") {echo 'selected';}?>>Verano</option>
            <option <?php if (isset($_POST["estaciones"]) && $_POST["estaciones"] == "Otoño") {echo 'selected';}?>>Otoño</option>
            <option <?php if (isset($_POST["estaciones"]) && $_POST["estaciones"] == "Invierno") {echo 'selected';}?>>Invierno</option>
        </select>
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php if (!empty($_POST["nombre"])) {echo $_POST["nombre"];}?>">
        <br>

        <label for="last_name">Apellido:</label>
        <input type="text" name="apellido" value="<?php if (!empty($_POST["apellido"])) {echo $_POST["apellido"];}?>">
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php if (!empty($_POST["email"])) {echo $_POST["email"];}?>">
        <br>

        <input type="radio" name="sexo" value="macho" <?php if (!empty($_POST["sexo"]) && $_POST["sexo"] == "macho") {echo 'checked';}?>>
        <label for="sexo" id="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hembra" <?php if (!empty($_POST["sexo"]) && $_POST["sexo"] == "hembra") {echo 'checked';}?>>
        <label for="sexo" id="mujer">Mujer</label>
        <br>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="<?php if (!empty($_POST["fecha_nacimiento"])) {echo $_POST["fecha_nacimiento"];}?>">
        <br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" min="0" max="120" value="<?php if (!empty($_POST["edad"])) {echo $_POST["edad"];}?>">
        <br>

        <input type="submit">

    </form>
</body>

</html>