<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
</head>
<body>
<h2>Resultados del Inventario</h2>
<?php
$productos = $_POST['productos'];
$precios = $_POST['precios'];
$total = array_sum($precios);
$promedio = $total / count($precios);
$maxPrecio = max($precios);
$minPrecio = min($precios);
$productoCaro = $productos[array_search($maxPrecio, $precios)];
$productoBarato = $productos[array_search($minPrecio, $precios)];
echo "<table border='1' cellpadding='5'>";
echo "
<tr>
<th>Producto</th>
<th>Precio</th>
</tr>
";
for ($i = 0; $i < count($productos); $i++) {
echo "
<tr>
<td>{$productos[$i]}</td>
<td>\${$precios[$i]}</td>
</tr>
";
}
echo "</table>";
echo "<br>";
echo "<b>Total:</b> $$total <br>";
echo "<b>Promedio:</b> $$promedio <br>";
echo "<b>Producto más caro:</b> $productoCaro - $$maxPrecio <br>";
echo "<b>Producto más barato:</b> $productoBarato - $$minPrecio <br>";
?>
</body>
</html>

