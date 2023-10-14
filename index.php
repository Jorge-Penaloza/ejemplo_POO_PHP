<?php
spl_autoload_register( function ($nombre_clase) 
{
    include $nombre_clase . '.php';
});
// Ejemplo de uso de clase anonima
echo "Prueba clase *Apoderado <br>";
$apoderado  = new Class('Segundo','Peñaloza','13834570-K','Maria Elena') extends Persona
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
};
echo $apoderado->nombre."<br>";
echo $apoderado->apellido."<br>";
echo $apoderado->rut."<br>";
echo $apoderado->direccion."<br>";
echo ($apoderado->rutEsvalido()?"Verdadero":"Falso")."<br>";
$apoderado->addEstudiantes("1383470-K");
$apoderado->addEstudiantes("111111111-1");
print_r($apoderado->obtenerEstudiantes());
echo "<br>";
$apoderado->delEstudiantes("111111111-1");
print_r($apoderado->obtenerEstudiantes());
echo "<br>";




echo "<br>Prueba clase *Estudiante <br>";
$estudiante  = new Estudiante('Jorge','Peñaloza','13834570-k','Maria Elena', 2021);
echo $estudiante->nombre."<br>";
echo $estudiante->apellido."<br>";
echo $estudiante->rut."<br>";
echo $estudiante->direccion."<br>";
echo $estudiante->anioCurso."<br>";
echo ($estudiante->rutEsvalido()?"Verdadero":"Falso")."<br>";
echo ($estudiante->obtenerAsignaturas())."<br>";
echo ($estudiante->obtenerActividades())."<br>";
echo ($estudiante->obtenerApoderado())."<br>";
echo "<br>";


echo "Prueba clase *Asignatura <br>";
$asignatura  = new Asignatura( 22,'Programacion Avanzada I','Plan de estudios');
echo $asignatura->codigo."<br>";
echo $asignatura->descripcion."<br>";
echo $asignatura->planEstudios."<br>";
$asignatura->addEstudiantes("13834570-K");
$asignatura->addEstudiantes("111111111-1");
print_r($asignatura->obtenerEstudiantes());
echo "<br>";
$asignatura->delEstudiantes("111111111-1");
print_r($asignatura->obtenerEstudiantes());
echo "<br>";
echo "<br>";


echo "Prueba clase *Actividad <br>";
$actividad  = new Actividad( 25,'Golf');
echo "<br>";
echo $actividad->codigo."<br>";
echo $actividad->descripcion."<br>";
echo $actividad->descripcion_test."<br>";
$actividad->addEstudiantes("13834570-K");
$actividad->addEstudiantes("2-2");
print_r($actividad->obtenerEstudiantes());
echo "<br>";
$actividad->delEstudiantes("13834570-K");
print_r($actividad->obtenerEstudiantes());
echo "<br>";
echo "<br><strong>Prueba de iteracion en clase con metodos magicos y palabra clave final</strong><br>";
$actividad->addEstudiantes("13834570-K");
$actividad->addEstudiantes("3-3");
$actividad->iterateVisible()
?>