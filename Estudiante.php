<?php
class Estudiante extends Persona
{
    public $anioCurso;
    
    public function __construct( $nombre, $apellido, $rut, $direccion, $anioCurso ) 
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->rut = $rut;
        $this->direccion = $direccion;
        $this->anioCurso = $anioCurso;
    }   

    public function obtenerAsignaturas( )    
    {
        return "Obtener Asignaturas";
    }

    public function obtenerActividades( )    
    {
        return "Obtener Actividades";
    }

    public function obtenerApoderado( )    
    {
        return "Obtener Apoderado";
    }
}
?>