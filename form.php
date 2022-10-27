<?php
if (!isset($_COOKIE['usuario'])) {
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
    <form action="setCookie.php" method='post'>
        <label for="nombre">Cuál es tu nombre?</label>
        <input name="nombre"></input>
        <input type="submit">
    </form>
</body>

</html>

<?php
} else {
    header('Location: welcome.php');
}
?>