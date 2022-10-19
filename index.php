<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="post">
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1024"><br> -->
        <input type="File" name="archivo"><br>
        <input required type="text" name="destino" placeholder="Introduce carpeta destino" value="<?php if(!empty($_POST['destino'])){echo $_POST['destino'];}?>"><br>
        <textarea required name="descrip"><?php if (!empty($_POST['descrip'])) {echo $_POST['descrip'];}?></textarea><br>
        <input type="submit">
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        switch ($_FILES['archivo']['error']) {
            case 0:
                if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
                    $nombreDirectorio = $_POST['destino'];
                    $nombreFichero = $_FILES['archivo']['name'];
                    $nombreCompleto = $nombreDirectorio . $nombreFichero;
                    if (is_file($nombreCompleto)) {
                        $idUnico = time();
                        $nombreFichero = $idUnico.'-'.$nombreFichero;
                        $nombreCompleto = $nombreDirectorio.$nombreFichero;
                    }
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $nombreCompleto);
                    echo "Fichero subido con el nombre: " . $nombreFichero . "<br>";
                } else {
                    print("No se ha podido subir el fichero");
                }
                break;
            case 1:
                echo 'ERR MSG: ' . "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case 2:
                echo 'ERR MSG: ' . "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case 3:
                echo 'ERR MSG: ' . "The uploaded file was only partially uploaded";
                break;
            case 4:
                echo 'ERR MSG: ' . "No file was uploaded";
                break;
            case 6:
                echo 'ERR MSG: ' . "Missing a temporary folder";
                break;
            case 7:
                echo 'ERR MSG: ' . "Failed to write file to disk";
                break;
            case 8:
                echo 'ERR MSG: ' . "File upload stopped by extension";
                break;
            default:
                echo 'ERR MSG: ' . "Unknown upload error";
                break;
        }
    }
?>

