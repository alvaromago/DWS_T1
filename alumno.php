<?php
include("persona.php");

class Alumno extends Persona
{
    public $ciclo;
    public $cuota;

    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }
    public function setCuota($cuota)
    {
        $this->cuota = $cuota;
    }
    public function getAtributos()
    {
        $array = parent::getAtributos();
        $array['ciclo'] = $this->ciclo;
        $array['cuota'] = $this->cuota;
        return $array;
    }
}
