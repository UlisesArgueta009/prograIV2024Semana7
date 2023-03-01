<?php
    include "en.php";
    if (isset($_GET ['send'])){
        $selection = $_GET ['selection'];
        echo "Cargado archivo: " . $selection . ".php<br>";

        // Verifica si el archivo seleccionado existe antes de intentar incluirlo
        if (!file_exists($selection . ".php")) {
            echo "El archivo " . $selection . ".php no existe.";
        } else {
            include $selection . ".php";
        }


        echo $selection . ".php";
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
    <form action="" method="GET ">
        <select name="selection" id="">
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" name="send" value="Cambiar">
    </form>
    <h1>> <?php echo TITLE; ?> </h1>
    <h1>> <?php echo SETTINGS; ?> </h1>

</body>
</html>