<?php
class CuentaHoras
{
    //CONSTRUCTOR
    public function __construct()
    {
    }

    /**
     * Recibe arreglo con horas, retorna la suma de todas ellas
     * @param array $datos
     * @return string
     */
    public function sumarHoras($datos)
    {
        $total = 0;
        foreach ($datos as $cantHoras) {
            $total += $cantHoras;
        }
        $mensaje = "Cantidad total de horas en la cursada de Programación Web: " . $total;

        return $mensaje;
    }
}