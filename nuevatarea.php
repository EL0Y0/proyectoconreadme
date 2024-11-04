<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $host = 'localhost';
    $usuario = 'root';
    $password = '';
    $basededatos = 'migtd3';

    $conexion = new mysqli($host, $usuario, $password, $basededatos);

    if ($conexion->connect_error) {
        echo 'nanai de la china';
        die('la has cagao chaval');
    } else {
        echo 'se vienen cositas🔥🔥🔥🔥🔥🔥';
    }

    $sql = 'INSERT INTO tareas (nombre) VALUES (?)'; // si hay (?,?)
    $queryFormateada = $conexion->prepare($sql);
    $queryFormateada->bind_param('s', $nombre); // escribes ('ss', $nombre, $desc)

    $todoBien = $queryFormateada->execute();

    if ($todoBien) {
        header('location: index.php');
    } else {
        die('la has cagao chaval');
    }


} else {
    echo 'jola';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tareaa</title>
</head>

<body>
    <header>Creación de tarea</header>
    <main>
        <form action="?" method='POST'>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <div class="operaciones">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </main>
</body>

</html>