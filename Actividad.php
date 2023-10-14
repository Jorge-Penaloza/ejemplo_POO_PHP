<?php
class Actividad 
{
    protected $data = array();
    private $estudiantes = array();
    
    public function __construct( $codigo, $descripcion ) 
    {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
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

    private function salir()
    {
        echo "<br>Desctructor de clases se ha activado<br>";
    }

    public function __set($name, $value)
    {
        echo "Estableciendo ".$name." a ".$value."<br>";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Consultando '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            ' <strong>Mesaje de comprobacion creado para probar sobrecarga y metodos magicos </strong><br>'.
            ' Propiedad indefinida mediante __get(): ' . $name .
            ' en ' . $trace[0]['file'] .
            ' en la línea ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    // Esta funcion obtenida de php.net se modifico para que cuando el tipo de dato sea un array, pueda recorrerlo por
    function iterateVisible() 
    {
        foreach ($this as $clave => $valor) 
        {
            echo "<br> tipo de dato: ".gettype($valor)."<br>"; 
            if(gettype($valor)=="array")
            {
                $i = 0;
                foreach ($valor as $key => $value) 
                {
                    echo $i."-".$key." => ".$value."<br>";    
                    $i++;
                }
            }
            else 
            {
                print $clave." => ".$valor."\n";
            }
            
        }
     }


}
?>