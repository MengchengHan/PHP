<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try{
            $usuario = $_POST['user'];
            $contraseña = $_POST['pass'];
            $mydb = new PDO('mysql:host=localhost; dbname=juego','root', '');
            $resultado = $mydb->query("SELECT contraseña FROM jugadores WHERE usuario LIKE '$usuario'");
            if ($contraseña != $resultado->fetchColumn()) {
                echo "<br>" . 'Has introducido mal tus credenciales, inténtalo de nuevo.';
            } else {
                header('Location:juego.php');
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión</title>
    <link rel="stylesheet" href="login_styles.css">
</head>

<body>
    <div id="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <input type="text" name="user" placeholder="Usuario" id="user">
                <input type="password" name="pass" placeholder="Constraseña" id="pass">
                <div id="caja_checkbox">
                    <input type="checkbox" name="show_pass" id="show_pass">
                    <label for="show_pass" id="label_show_pass">Mostrar contraseña</label>
                </div>
                <input type="submit" value="Iniciar sesión" id="is">
                <div id="crear_cuenta">
                    <span>¿Es tu primera vez jugando? Regístrate <a href="registro.php">aquí</a></span>
                </div>
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