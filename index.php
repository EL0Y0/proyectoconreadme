<?php
$host = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'migtd3';

$conexion = new mysqli($host, $usuario, $password, $basededatos);

if (!$conexion->connect_error) {
    echo '🔥🔥🔥Tareas:🔥🔥🔥';
} else {
    echo 'nanai de la china';
    die('la has cagao chaval');
}

$sql = 'SELECT * FROM tareas';
$resultado = $conexion->query($sql);

$numeroResultados = $resultado->num_rows;
echo '<ul>';
while ($fila = $resultado->fetch_assoc()) {
    echo '<li>'. $fila['nombre'] .'</li>';    
}
echo '</ul>';

$conexion->close();
?>
<a href="/proyecto/nuevatarea.php">Crear nueva tarea</a>