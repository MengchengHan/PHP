<?php
if (!isset($_COOKIE['eleccion'])) {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="setCookieColores.php" method='post'>
        <input type="color" name="colour">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
} else {
    header('Location: mostrarColor.php');
}
?>