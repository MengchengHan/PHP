<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bd = new PDO('mysql:host=localhost; dbname=pedidos', 'root', '');
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pais = $_POST['pais'];
        $cp = $_POST['cp'];
        $ciudad = $_POST['ciudad'];
        $dir = $_POST['dir'];
        $sentencia = $bd->prepare("INSERT INTO restaurantes VALUES('', :user, :pass, :pais, :cp, :ciudad, :dir)");
        $sentencia->bindParam(':user', $user);
        $sentencia->bindParam(':pass', $pass);
        $sentencia->bindParam(':pais', $pais);
        $sentencia->bindParam(':cp', $cp);
        $sentencia->bindParam(':ciudad', $ciudad);
        $sentencia->bindParam(':dir', $dir);
        $sentencia->execute();
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <input type="text" name="user" placeholder="Correo">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="text" name="pais" placeholder="País">
        <input type="text" name="cp" placeholder="CP">
        <input type="text" name="ciudad" placeholder="Ciudad">
        <input type="text" name="dir" placeholder="Dirección">
        <input type="submit">
    </form>
</body>
</html>
