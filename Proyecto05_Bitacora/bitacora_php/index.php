<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $actividad = trim($_POST["actividad"]);
    $responsable = trim($_POST["responsable"]);
    $fecha = trim($_POST["fecha"]);
if (empty($actividad) || empty($responsable) || empty($fecha)) {
    $mensaje = "<p style='color:red;'>Error: Todos los campos son obligatorios.</p>";
} else {
$actividad = htmlspecialchars($actividad);
$responsable = htmlspecialchars($responsable);
$registro = "Fecha: $fecha\n";
$registro .= "Actividad: $actividad\n";
$registro .= "Responsable: $responsable\n";
$registro .= "----------------------\n";
file_put_contents("bitacora.txt", $registro, FILE_APPEND);
$mensaje = "<p style='color:green;'>Actividad guardada correctamente.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bitácora de Actividades</title>
</head>
<body>
<h2>Registro de Actividades</h2>
<?php echo $mensaje; ?>
<form method="POST">
<label>Descripción de la actividad:</label><br>
<input type="text" name="actividad"><br><br>
<label>Responsable:</label><br>
<input type="text" name="responsable"><br><br>
<label>Fecha:</label><br>
<input type="date" name="fecha"><br><br>
<button type="submit">Guardar</button>
</form>
<hr>
<h2>Bitácora Registrada</h2>
<?php
if (file_exists("bitacora.txt")) {
$contenido = file("bitacora.txt", FILE_IGNORE_NEW_LINES);
echo "<ol>";
foreach ($contenido as $linea) {
if (!empty(trim($linea))) {
echo "<li>" . htmlspecialchars($linea) . "</li>";
}
}
echo "</ol>";
} else {
echo "<p>No hay actividades registradas.</p>";
}
?>
</body>
</html>