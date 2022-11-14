<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
class Persona
{
    protected $nombre;
    protected $apellido;
    protected $edad;

    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function __toString()
    {
        return "Hola, soy " . $this->nombre . " " . $this->apellido . " tengo " . $this->edad . " años, ";
    }
}

class Empleado extends Persona
{
    private $sueldo;
    private $antiguedad;

    public function __construct($nombre, $apellido, $edad, $sueldo, $antiguedad)
    {
        parent::__construct($nombre, $apellido, $edad);
        $this->sueldo = $sueldo;
        $this->antiguedad = $antiguedad;
    }

    public function __toString()
    {
        return parent::__toString() . " cobro " . $this->sueldo . " euros y tengo una antigüedad de " . $this->antiguedad . " días";
    }

    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    public function __getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo): self
    {
        $this->sueldo = $sueldo;
        return $this;
    }
}

class Empresa
{
    private $nombre;
    private $empleados = array();

    public function __construct($nombre, $empleados)
    {
        $this->nombre = $nombre;
        $this->empleados = $empleados;
    }

    public function verEmpleados()
    {
        asort($this->empleados, SORT_STRING);
        while (current($this->empleados)) {
            echo current($this->empleados) . "<br>";
            next($this->empleados);
        }
    }

    public function añadirEmpleados($nif, $emp)
    {
        return ($this->empleados[$nif] = $emp) ? true : false;
    }

    public function masAntiguo()
    {
        $antiguedades = array();
        foreach ($this->empleados as $k => $v) {
            $antiguedades[$k] = $v->getAntiguedad();
        }
        asort($antiguedades);
        end($antiguedades);
        return $this->empleados[key($antiguedades)];
    }

    public function masNuevo()
    {
        $antiguedades = array();
        foreach ($this->empleados as $k => $v) {
            $antiguedades[$k] = $v->getAntiguedad();
        }
        asort($antiguedades);
        reset($antiguedades);
        return $this->empleados[key($antiguedades)];
    }

    public function antiguedadMedia()
    {
        $antiguedades = array();
        foreach ($this->empleados as $k => $v) {
            $antiguedades[] = $v->getAntiguedad();
        }
        return "La antiguedad media es de " . array_sum($antiguedades) / count($antiguedades) . " días";
    }

    public function sueldoMedio()
    {
        $sueldos = array();
        foreach ($this->empleados as $k => $v) {
            $sueldos[] = $v->__getSueldo();
        }
        echo "El sueldo medio es de " . array_sum($sueldos) / count($sueldos) . " euros";
    }

    public function aPagarAHacienda()
    {
        $sueldos = array();
        foreach ($this->empleados as $k => $v) {
            if ((int)$v->__getSueldo() > 3000) {
                $sueldos[$k] = $v->__getSueldo();
            }
        }
        asort($sueldos, SORT_DESC);
        foreach ($sueldos as $key => $value) {
            echo $this->empleados[$key] . "<br>";
        }
    }

    public function __toString()
    {
        return "Somos " . $this->nombre . " tenemos " . count($this->empleados) . " empleados.";
    }
}

$misEmpleados = array(
    "1234A" => new Empleado("Kap", "Uyo o", 20, 4800, 120),
    "1234B" => new Empleado("Alba", "Sánchez", 21, 1050, 650),
    "1234C" => new Empleado("Filo", "DaPuta", 15, 6500, 455),
    "1234D" => new Empleado("Roland", "Vallès", 33, 1520, 342)
);

    $empresa = new Empresa("Retrete SL", $misEmpleados);
    echo $empresa->verEmpleados() . "<br>";
    $emp = new Empleado("Freya", "Vallès", 31, 1400, 20);
    $empresa->añadirEmpleados("1234G", $emp);
    echo $empresa . "<br>";
    echo $empresa->verEmpleados() . "<br>";
    echo $empresa->masAntiguo() . "<br>";
    echo $empresa->masNuevo() . "<br>";
    echo $empresa->sueldoMedio() . "<br>";
    echo $empresa->antiguedadMedia() . "<br>";
    print_r($empresa->aPagarAHacienda());
    ?>
</body>

</html>