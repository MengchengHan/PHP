<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try{
            $mydb = new PDO('mysql:host=localhost; dbname=juego','root', '');
            $usuario = $_POST['usuario'];
            $contraseña = password_hash($_POST['contraseña'], PASSWORD_ARGON2ID);
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $sentencia = $mydb->query("INSERT INTO jugadores VALUES ('$usuario', '$contraseña', '$nombre', '$apellido')");

            header('Location:login.php');
        }catch(PDOexception $e){
            echo $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de nuevo jugador</title>
    <link rel="stylesheet" href="register_styles.css">
</head>
<body>
    <div id="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="usuario"   placeholder="Usuario" id="user">
            <input type="password" name="contraseña" placeholder="Contraseña" id="pass">
            <div id="caja_checkbox">
                <input type="checkbox" name="show_pass" id="show_pass">
                <label for="show_pass" id="label_show_pass">Mostrar contraseña</label>
            </div>
            <input type="submit" value="Registrar ">
        </form>
    </div>
</body>
<script>
    {
        document.getElementById("show_pass").addEventListener("click", function () {

            var pw = document.getElementById("pass");
            if (pw.type == "password") {
                pw.type = "text";
            } else {
                pw.type = "password";
            }
        });
    }
</script>
</html>