<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/src/Calculo/IntegradorNumerico.php';

use App\Calculo\IntegradorNumerico;

$resultado = null;
$kwh = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {

        $inicio = (float)$_POST['t_inicio'];
        $fin = (float)$_POST['t_fin'];
        $precision = (int)$_POST['precision'];
        $perfil = $_POST['perfil'] ?? 'AVERAGE';

        $integrador = new IntegradorNumerico($inicio, $fin, $precision, $perfil);

        $resultado = $integrador->calcularEnergiaTotal();
        $kwh = $integrador->aKWh($resultado);

    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

// 🔹 TABLA COMPARATIVA [0,10]
$tabla = [];

foreach ([10, 100, 1000] as $n) {
    $temp = new IntegradorNumerico(0, 10, $n, "REAL");
    $res = $temp->calcularEnergiaTotal();

    $tabla[] = [
        "n" => $n,
        "resultado" => $res,
        "error" => abs(433.33 - $res)
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cloud Energy Monitor</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

    <h1>⚡ Analizador de Consumo Energético en Servidores</h1>

    <form method="POST">

        <label>Tiempo inicial (s):</label>
        <input type="number" step="0.1" name="t_inicio" required>

        <label>Tiempo final (s):</label>
        <input type="number" step="0.1" name="t_fin" required>

        <label>Precisión (n):</label>
        <input type="number" name="precision" value="1000" required>

        <label>Perfil:</label>
        <select name="perfil">
            <option value="IDLE">IDLE (P(t)=5)</option>
            <option value="AVERAGE" selected>AVERAGE (P(t)=2t+5)</option>
            <option value="STRESS">STRESS (P(t)=t!)</option>
        </select>

        <button type="submit">Calcular energía</button>

    </form>

    <?php if ($resultado !== null): ?>
        <div class="result">
            <h2>Resultado</h2>
            <p><b>Joules:</b> <?= number_format($resultado, 4) ?></p>
            <p><b>kWh:</b> <?= number_format($kwh, 8) ?></p>
        </div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="error">
            <b>Error:</b> <?= $error ?>
        </div>
    <?php endif; ?>

    <h2>Tabla comparativa (intervalo [0,10])</h2>

    <table>
        <tr>
            <th>n</th>
            <th>Resultado</th>
            <th>Error</th>
        </tr>

        <?php foreach ($tabla as $fila): ?>
            <tr>
                <td><?= $fila["n"] ?></td>
                <td><?= number_format($fila["resultado"], 4) ?></td>
                <td><?= number_format($fila["error"], 4) ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>