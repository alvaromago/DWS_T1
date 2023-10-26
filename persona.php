<?php
class Persona
{
    public $nombre;
    public $email;
    public $telefono;
    public $dni;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getAtributos()
    {
        $array = [
            "nombre" => $this->nombre,
            "email" => $this->email,
            "telefono" => $this->telefono,
            "dni" => $this->dni
        ];
        return $array;
    }
}
