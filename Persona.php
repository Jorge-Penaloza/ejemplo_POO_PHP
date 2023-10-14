<?php
trait Salir
{
    public function salir()
    {
        echo "<br>Desctructor de clases se ha activado<br>";
    }
}    

class Persona extends PersonaA
{
    use Salir;

    public $nomsbre;
    public $apellido;
    public $rut;
    public $direccion;
    
    // Ejemplos de metodos magicos
    public function __construct( $nombre, $apellido, $rut, $direccion ) 
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->rut = $rut;
        $this->direccion = $direccion;
    }

    public function __destruct()
    {
        $this->salir();
    }

    //La validacion de rut se ha obtenido de https://gist.github.com/rbarrigav/3881019#file-validar_rut-php
    protected function rutIsValid( $rutA)
    {   
        $rut = $rutA;
        $rut = preg_replace('/[^k0-9]/i', '', $rut);
        $dv  = substr($rut, -1);
        $numero = substr($rut, 0, strlen($rut)-1);
        $i = 2;
        $suma = 0;
        foreach(array_reverse(str_split($numero)) as $v)
        {
            if($i==8)
                $i = 2;
    
            $suma += $v * $i;
            ++$i;
        }
        $dvr = 11 - ($suma % 11);
        if($dvr == 11)
            $dvr = 0;
        if($dvr == 10)
            $dvr = 'K';
        if($dvr == strtoupper($dv))
            return true;
        else
            return false;
    }

    public function rutEsvalido($rutA = Null)
    {
        return $this->rutIsValid(isset($rutA) ? $rutA : $this->rut);
    }
    
    public function __isset($name)
    {
        echo "¿Está definido '$name'?\n";
        return isset($this->data[$name]);
    }

}

?>
