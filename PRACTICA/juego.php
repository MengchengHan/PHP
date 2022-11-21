<?php
include 'session.php';
if (!$_SESSION['logged_in']) {
    header('Location:login.php');
} else {
    if (!isset($_SESSION['letras'])) {
        $_SESSION['intento'] = 0;
        $_SESSION['puntos'] = 0;
        if ($_COOKIE['veces'] == 1) {
            echo "Llevas " . $_COOKIE['veces'] . " vez iniciando sesión.";
        } else if ($_COOKIE['veces'] > 1) {
            echo "Llevas " . $_COOKIE['veces'] . " veces iniciando sesión.";
        }
        $mysqli = new mysqli("localhost", "root", "", "juego");
        $resultado = mysqli_query($mysqli, "SELECT palabra FROM palabras ORDER BY RAND() LIMIT 2");
        $palabras = array_map('current', mysqli_fetch_all($resultado));
        //echo "<pre>" . print_r($palabras, true) . "</pre>";

        function letras($palabras)
        {
            $array = [];
            foreach ($palabras as $k => $v) {
                $array_letras = preg_split('//', $v, -1, PREG_SPLIT_NO_EMPTY);
                $array = array_merge($array_letras, $array);
            }
            return array_unique($array);
        }

        $letras = letras($palabras);
        shuffle($letras);
        $_SESSION['palabras'] = $palabras;
        $_SESSION['letras'] = $letras;
        //echo "<pre>" . print_r($letras, true) . "</pre>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css">
    </link>
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <form method="POST">
                <input type="hidden" name="hid" value="1">
                <input type="submit" value="Cerrar sesión" id="cerrar_sesion">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['hid'])) {
                        session_destroy();
                        unset($_COOKIE['numPartidas']);
                        header('Location:login.php');
                    }
                }
                ?>
            </form>
        </nav>
    </header>

    <section id="container">
        <form action="logica.php" method="post">
            <div id="letras">
                <?php
                foreach ($_SESSION['letras'] as $k => $v) {
                    echo "<b>" . $v . " " . "</b>";
                }
                ?>
            </div>

            <div id="datos">
                <?php
                // if (isset($_SESSION['puntos'])) {
                echo "<br>" . "Aciertos: " . $_SESSION['puntos'] . "<br>";
                echo "Intentos: " . $_SESSION['intento'];
                // }
                ?>
            </div>
            <br>
            <div id="introducir">
                <input type="text" name="introducido" placeholder="Introduce palabra" class="texto">
                <input type="submit" class="enviar">
            </div>
        </form>
        <div id="respuestas">
            <?php
            // echo "<pre>" . print_r($_SESSION['palabras'], true) . "</pre>";
            foreach ($_SESSION['palabras'] as $k => $v) {
                echo "<div class='palabras'>" . $v . "</div>";
            }
            ?>
        </div>
        <div id="play_again">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <?php
                if (empty($_SESSION['palabras'])) {
                    echo "<input type='hidden' name='escondido'>";
                    echo "<input type='submit' name='play' value='Jugar de nuevo'>";

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        unset($_SESSION['letras']);
                    }
                }
                ?>
            </form>
        </div>
    </section>
</body>

</html>