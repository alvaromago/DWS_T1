<?php
class Profesores
{
    public $nombre;
    public $curso;
    public $asignatura;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function asignarAsignatura($asignatura, $curso)
    {
        $this->curso = $curso;
        $this->asignatura = $asignatura;
    }
}

$nuevoProfesor = new Profesores('Alvaro');
echo "<p>El nombre del profesor es: " . $nuevoProfesor->nombre . "</p>";

$nuevoProfesor->asignarAsignatura('DWS', 'segundo');
echo "<p>Imparte la asignatura " . $nuevoProfesor->asignatura . " del curso " . $nuevoProfesor->curso . "</p>";
