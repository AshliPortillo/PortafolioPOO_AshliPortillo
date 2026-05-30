<?php
namespace App\Calculo;
class IntegradorNumerico {
    private float $inicio; // Límite inferior (segundos)
    private float $fin; // Límite superior (segundos)
    private int $pasos; // Precisión (n subintervalos)

    private string $perfil; //DESAFIO

    public function __construct(float $a, float $b, int $n = 1000, string $perfil = "AVERAGE") {
        if ($a >= $b) {
            throw new \Exception("El tiempo inicial debe ser menor al final.");
        }
        if ($n <= 0) {
            throw new \Exception("La precisión (n) debe ser un número positivo.");
        }
        $this->inicio = $a;
        $this->fin = $b;
        $this->pasos = $n;

        $this->perfil = $perfil; //DESAFIO
    }

    public function aKWh(float $joules): float { //DESAFIO
        return $joules * 2.7778e-7; 
    }

    /**
    * Modela la función de potencia P(t) = t^2 + 2t (Ejemplo de carga creciente)
    * En informática, esto representaría los Watts consumidos.
    */
    /*  CODIGO REAL, PRUEBAS
    private function funcionPotencia(float $t): float {
        return pow($t, 2) + (2 * $t);
    }
    */

    private function funcionPotencia(float $t): float {
        switch ($this->perfil) {
            case "IDLE":
                return 5;
            
            case "AVERAGE":
                return (2 * $t) + 5;
            
            case "STRESS":
                return pow($t, 2);
            case "REAL":
    		return pow($t, 2) + (2 * $t);
            default:
                return (2 * $t) + 5;
        }
    }
    public function calcularEnergiaTotal(): float {
        $h = ($this->fin - $this->inicio) / $this->pasos;
        $suma = ($this->funcionPotencia($this->inicio) + $this->funcionPotencia($this->fin)) / 2;
 
        for ($i = 1; $i < $this->pasos; $i++) {
            $t_i = $this->inicio + $i * $h;
            $suma += $this->funcionPotencia($t_i);
        }

        return $suma * $h;
    }
}