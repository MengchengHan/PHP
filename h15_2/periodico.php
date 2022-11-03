<?php
if (!isset($_COOKIE['eleccion'])) {
    ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="setCookiePeriodico.php" method='post'>
        <span>Elige tema</span>
        <br>
        <input name="noticias" type="radio" value="economia">
        <label for="noticias" id="economia">Economía</label>
        <br>
        <input name="noticias" type="radio" value="politica">
        <label for="noticias" id="politica">Política</label>
        <br>
        <input name="noticias" type="radio" value="deporte">
        <label for="noticias" id="deporte">Deportes</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
} else if ($_COOKIE['eleccion'] == 'economia'){
    header('Location: economia.php');
} else if ($_COOKIE['eleccion'] == 'politica'){
    header('Location: politica.php');
} else if ($_COOKIE['eleccion'] == 'deporte') {
    header('Location: deporte.php');
}
?>