<!DOCTYPE html>
<html>
<head>
    <title>Tienda en Línea</title>
</head>
<body>
<h2>Registro de Productos</h2>
<form action="procesar.php" method="POST">
<?php
for ($i = 1; $i <= 5; $i++) {
echo "
<h3>Producto $i</h3>
Nombre:
<input type='text' name='productos[]' required>
Precio:
<input type='number' name='precios[]' step='0.01' min='1' required>
<br><br>
";
}
?>
<input type="submit" value="Procesar">
</form>
</body>
</html>
