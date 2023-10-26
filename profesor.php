<?php
include("persona.php");

class Profesor extends Persona
{
    public $asignatura;
    public $sueldo;

    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getAtributos()
    {
        $array = parent::getAtributos();
        $array['asignatura'] = $this->asignatura;
        $array['sueldo'] = $this->sueldo;
        return $array;
    }
}
