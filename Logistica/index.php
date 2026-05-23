<?php

require_once "Paquete.php";
require_once "Sensor.php";

// Crear paquetes
$paqueteA = new Paquete();
$paqueteB = new Paquete();

// Asignar valores a paqueteA y B
$paqueteA->codigoSeguimiento = "FD12345";
$paqueteA->pesoKilogramos = 4.23;
$paqueteA->esFragil = true;
$paqueteB->codigoSeguimiento = "FD12345";
$paqueteB->pesoKilogramos = 6.67;
$paqueteB->esFragil = true;

// $paqueteA->costoInterno = 250.00;

// Crear sensor
$sensor1 = new Sensor();
$sensor1->id = 101;
$sensor1->marca = "Samsung";
$sensor1->ultimaLectura = new DateTime();
$sensor1->rangoMaximo = 77.77;

// Mostrar datos del paquete
echo "<h2>Datos del Paquete</h2>";
echo "Código: " . $paqueteA->codigoSeguimiento . "<br>";
echo "Peso: " . $paqueteA->pesoKilogramos . " kg<br>";
echo "Es frágil: " . ($paqueteA->esFragil ? "Sí" : "No") . "<br>";

// Mostrar datos del sensor
echo "<h2>Datos del Sensor</h2>";
echo "ID: " . $sensor1->id . "<br>";
echo "Marca: " . $sensor1->marca . "<br>";
echo "Última lectura: " . $sensor1->ultimaLectura->format("Y-m-d H:i:s") . "<br>";
echo "Rango máximo: " . $sensor1->rangoMaximo . "<br>";