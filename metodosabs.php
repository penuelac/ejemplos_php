<html>
<head>

  <title> Sobreescribir constructor</title>
</head>

<body>
  <?php
abstract class Trabajador
{
  protected $nombre;
  protected $sueldo;
  function __construct($nom)
  {
    $this->nombre=$nom;
  }

  public function imprimir(){
    echo "Nombre: ".$this->nombre ."<br>";
    echo "Sueldo: ".$this->sueldo ."<br>";
  }
  public abstract function calcularSueldo();
}


class Empleado extends Trabajador
{
  protected $horasTrabajadas;
  protected $valorHora;

  public function __construct($nomb,$hor,$valor)
  {
    parent::__construct($nomb);
    $this->horasTrabajadas=$hor;
    $this->valorHora=$valor;
  }
  public function calcularSueldo(){
    $b=$this->sueldo=$this->horasTrabajadas*$this->valorHora;
    return $b;
  }
}


class Gerente extends Trabajador
{
  protected $utilidad;

  public function __construct($nomb,$util)
  {
    parent::__construct($nomb);
    $this->utilidad=$util;
  }
  public function calcularSueldo(){
    $a=$this->sueldo=$this->utilidad*0.10;
    return $a;
  }
}
$sueldoEmp=0;
$sueldoGer=0;
$vec[]=new Empleado('Pablo Rodriguez',150,3.50);
$vec[]=new Empleado('Ana',180,3.50);
$vec[]=new Empleado('Pedro',250,3.50);



$vec[]=new Gerente('Marcos Herning',1000000);
$vec[]=new Gerente('Emma',1105500);

for ($f=0; $f < count($vec); $f++) {
  if ($vec[$f] instanceof Empleado) {
    echo 'El sueldo del empleado<br>';
    $salario=$vec[$f]->calcularSueldo();
    $vec[$f]->imprimir();
    $sueldoEmp += $salario;
  } else {
    echo 'El sueldo del gerente <br>';
    $salario=$vec[$f]->calcularSueldo();
    $vec[$f]->imprimir();
    $sueldoGer += $salario;
  }
}

echo 'Valor total del sueldo de Empleados: $' .$sueldoEmp."<br>";
echo 'Valor total del sueldo de Gerentes: $' .$sueldoGer."<br>";







  ?>






 </body>


 </html>
