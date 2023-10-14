<?php
class Asignatura 
{
    use Salir;

    public $codigo;
    public $descripcion;
    public $planEstudios;
    private $estudiantes = array();
    
    public function __construct( $codigo, $descripcion, $planEstudios ) 
    {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->planEstudios = $planEstudios;
    }

    public function __destruct()
    {
        $this->salir();
    }

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