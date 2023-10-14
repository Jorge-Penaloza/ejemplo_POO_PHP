<?php
class Apoderado extends Persona
{
    private $estudiantes = array();
    
    public function addEstudiantes( $rut )    
    {
        $this->estudiantes[] = $rut;
    }

    public function delEstudiantes( $rut )
    {
        $this->estudiantes = array_diff($this->estudiantes, array($rut));
    }

    public function obtenerEstudiantes()
    {
        return $this->estudiantes;
    }

}
?>