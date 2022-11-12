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
        <form action="" method="post">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Apellido">
            <input type="text" placeholder="Usuario" id="user">
            <input type="password" placeholder="Contraseña" id="pass">
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